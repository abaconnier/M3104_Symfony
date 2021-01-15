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
     * @Route("/ressource/{id}", name="proStage_ressource")
     */

    public function afficherRessources($id): Response
    {
        return $this->render('pro_stage/affichageRessource.html.twig',
        ['idRessource'=>$id]);
    }
}
