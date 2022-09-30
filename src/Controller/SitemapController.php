<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SitemapController extends AbstractController
{
    #[Route('/sitemap.xml', name: 'sitemap', defaults: ['_format'=>'xml'])]
    public function index(Request $request): Response
     {
        //Récupère l'url en absolue d'hébèrgement
        $hostname = $request->getSchemeAndHttpHost();

        //Tableau permettant d'envoyer dedans les différentes URL
        $urls = [];

        //Nos URL selon nos pages
        $urls[] = ['loc' => $this->generateUrl('app_login')];
        $urls[] = ['loc' => $this->generateUrl('app_home')];
        $urls[] = ['loc' => $this->generateUrl('app_user_index')];
        $urls[] = ['loc' => $this->generateUrl('app_franchise_main_index')];
        $urls[] = ['loc' => $this->generateUrl('app_structure_main_index')];
        $urls[] = ['loc' => $this->generateUrl('app_option_index')];

        $response = new Response(
            $this->renderView('Sitemap/index.html.twig', [
                'urls' => $urls,
                'hostname' => $hostname,
            ]), 
            200 //préciser le statut que l'on souhaite émettre
        );

        //On précise bien le format que l'on va retourner dans notre contenu (ici du xml)
        $response->headers->set('Content-type', 'text/xml');

        return $response;
     }
}