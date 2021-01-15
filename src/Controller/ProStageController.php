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
     * @Route("/stage/{id}", name="proStage_stage")
     */

    public function afficherStage($id): Response
    {
        return $this->render('pro_stage/affichageStage.html.twig',
        ['idStage'=>$id]);
    }

    /**
     * @Route("/listeEntreprise", name="proStage_entreprise")
     */

    public function afficherStageEntreprise(): Response
    {
        return $this->render('pro_stage/affichageStageEntreprise.html.twig');
    }

}
