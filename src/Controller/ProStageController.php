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
        return $this->render('pro_stage/index.html.twig', [
            'controller_name' => 'Controleur proStage',
        ]);
    }
}