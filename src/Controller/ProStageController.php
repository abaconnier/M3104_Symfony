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

    public function afficherStage($idS): Response
    {
        return $this->render('pro_stage/affichageStage.html.twig',
        ['idStage'=>$idS]);
    }

    /**
     * @Route("/listeEntreprise", name="proStage_listeEntreprise")
     */

    public function afficherListeEntreprise(): Response
    {
        return $this->render('pro_stage/affichageListeEntreprise.html.twig');
    }

    /**
     * @Route("/stageEntreprise/{idE}", name="proStage_stageEntreprise")
     */

    public function afficherStageEntreprise($idE): Response
    {
        return $this->render('pro_stage/affichageStageEntreprise.html.twig',
        ['idEntreprise'=>$idE]);
    }

}
