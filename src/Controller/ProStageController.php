<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProStageController extends AbstractController
{
    /**
     * @Route("/accueil", name="proStage_accueil")
     */

    public function index(): Response
    {
        return $this->render('pro_stage/index.html.twig');
    }

    /**
     * @Route("/ressource/123", name="proStage_ressource123")
     */

    public function afficherRessources(): Response
    {
        return $this->render('pro_stage/affichageRessource.html.twig',
        ['idRessource'=>123]);
    }
}
