<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MedecinController extends AbstractController
{
    /**
     * @Route("/medecin", name="medecin")
     */
    public function index()
    {
        return $this->render('medecin/index.html.twig', [
            'controller_name' => 'MedecinController',
        ]);
    }
    /**
     * @Route("/medecin/lol", name="medecinlol")
     */
    public function lol(){
        return $this->render('medecin/lol.html.twig',[
            'controller_name' => 'MedecinController',
        ]);
    }
}
