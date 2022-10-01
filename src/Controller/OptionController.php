<?php

namespace App\Controller;

use App\Entity\Option;
use App\Form\OptionType;
use App\Repository\OptionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

#[IsGranted('ROLE_USER')]
#[Route('/option')]
class OptionController extends AbstractController
{
    #[Route('/', name: 'app_option_index', methods: ['GET'])]
    public function index(OptionRepository $optionRepository): Response
    {
        return $this->render('option/index.html.twig', [
            'options' => $optionRepository->findAll(),
        ]);
    }

    /* Fonction permettant la création d'une nouvelle option, on va récupérer le formulaire puis établir de nouvelles données dedans
    puis le mettre à jour dans notre BDD */
    #[Route('/new', name: 'app_option_new', methods: ['GET', 'POST'])]
    public function new(Request $request, OptionRepository $optionRepository): Response
    {
        $option = new Option();
        $form = $this->createForm(OptionType::class, $option);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $optionRepository->add($option, true);

            $this->addFlash(
                'success',
                "Ajout d'une Option avec succès"
            );
            
            return $this->redirectToRoute('app_option_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('option/new.html.twig', [
            'option' => $option,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_option_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Option $option, OptionRepository $optionRepository): Response
    {
        $form = $this->createForm(OptionType::class, $option);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $optionRepository->add($option, true);

            $this->addFlash(
                'success',
                "Modification d'une Option avec succès"
            );
            return $this->redirectToRoute('app_option_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('option/edit.html.twig', [
            'option' => $option,
            'form' => $form,
        ]);
    }

    /* Fonction pour supprimer une option, on va récupérer l'id de cette option puis après récupérer toutes ses informations rentrer dans les 
    attribus de formulaire et les supprimer définitivement */
    #[Route('/{id}', name: 'app_option_delete', methods: ['POST'])]
    public function delete(Request $request, Option $option, OptionRepository $optionRepository): Response
    {
        /* Ici on a une condition qui va permettre de demander à l'utilisateur s'il est vraiment sur de supprimer l'option. 
        C'est une confirmation de suppression pour éviter de supprimer par inadvértance une option */
        if ($this->isCsrfTokenValid('delete'.$option->getId(), $request->request->get('_token'))) {
            $optionRepository->remove($option, true);
        }

        /* Message s'affichant de façon temporaire pour indiquer un succès d'exécution de la fonction */
        $this->addFlash(
            'success',
            "Suppression d'une Option avec succès"
        );

        /*  Après ça, on se redirige vers la page principale des options où se trouve afficher toutes nos options existantes*/
        return $this->redirectToRoute('app_option_index', [], Response::HTTP_SEE_OTHER);
    }
}
