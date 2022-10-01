<?php

namespace App\Controller;

use App\Entity\FranchiseMain;
use App\Form\FranchiseMainType;
use App\Repository\FranchiseMainRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

#[Route('/franchise/main')]
class FranchiseMainController extends AbstractController
{
    /* Fonction qui nous permet de voir toutes nos franchises et leurs données enregistrés */
    #[IsGranted('ROLE_USER')]
    #[Route('/', name: 'app_franchise_main_index', methods: ['GET'])]
    public function index(FranchiseMainRepository $franchiseMainRepository): Response
    {        
        return $this->render('franchise_main/index.html.twig', [
            'franchises' => $franchiseMainRepository->findAll(),
        ]);
    }

    /* Fonction edit qui va chercher dans la route l'id de la franchsie à modifier puis après aller dans le formulaire
    déjà existant de la franchise avec toutes ses données pour pouvoir si besoin remodifier, et si modification il y a, alors on re-persist
    et re-flush pour mettre à jours les éléments dans notre BDD */
    #[IsGranted('ROLE_USER')]
    #[Route('/{id}/edit', name: 'app_franchise_main_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, FranchiseMain $franchiseMain, FranchiseMainRepository $franchiseMainRepository): Response
    {
        $form = $this->createForm(FranchiseMainType::class, $franchiseMain);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $franchiseMainRepository->add($franchiseMain, true);

            return $this->redirectToRoute('app_franchise_main_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('franchise_main/edit.html.twig', [
            'franchise_main' => $franchiseMain,
            'form' => $form,
        ]);
    }

}
