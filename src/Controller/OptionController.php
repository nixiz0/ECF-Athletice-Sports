<?php

namespace App\Controller;

use App\Entity\Option;
use App\Form\OptionType;
use App\Repository\OptionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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

    #[Route('/{id}', name: 'app_option_delete', methods: ['POST'])]
    public function delete(Request $request, Option $option, OptionRepository $optionRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$option->getId(), $request->request->get('_token'))) {
            $optionRepository->remove($option, true);
        }

        $this->addFlash(
            'success',
            "Suppression d'une Option avec succès"
        );

        return $this->redirectToRoute('app_option_index', [], Response::HTTP_SEE_OTHER);
    }
}
