<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\FranchiseMainRepository;
use App\Repository\OptionRepository;
use App\Repository\StructureMainRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

/* Route universel par défaut établit pour toutes les fonctions en dessous */
#[Route('/user')]
class UserController extends AbstractController
{
    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    /* Fonction permettant de voir toutes les données d'un utilisateur */
    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user, FranchiseMainRepository $franchiseMainRepository, StructureMainRepository $structureMainRepository, OptionRepository $optionRepository, UserRepository $userRepository): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
            'structures' => $structureMainRepository->findAll(),
            'options' => $optionRepository->findAll(),
            'users' => $userRepository->findAll(),
            'franchises' => $franchiseMainRepository->findAll(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, UserRepository $userRepository, MailerInterface $mailer): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->add($user, true);

            /* Si on modifie des infos personnels d'un utilisateurs alors on le prévient par email qu'une modification a été effectué */
            $email = (new Email())
            ->from('admin@athletice.com')
            ->to($user->getEmail())
            ->subject('Modification de votre compte Utilisateur')
            ->html('Nous avons effectué une modification dans vos données d\'utilisateur');            

        $mailer->send($email);

            $this->addFlash(
                'success',
                "Modification d'un utilisateur avec succès"
            );

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, UserRepository $userRepository, MailerInterface $mailer): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user, true);
        }

        /* Si on supprime un utilisateur alors on va récupérer son email et lui envoyer un mail pour le prévenir de la suppression de son compte */
        $email = (new Email())
            ->from('admin@athletice.com')
            ->to($user->getEmail())
            ->subject('Suppression de votre compte Utilisateur')
            ->html('Nous avons supprimé votre compte Utilisateur');            

        $mailer->send($email);

            $this->addFlash(
                'success',
                "Suppression d'un utilisateur avec succès"
            );
        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }
}
