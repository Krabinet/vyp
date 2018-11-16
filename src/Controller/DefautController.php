<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefautController extends AbstractController
{
    /**
     * @Route("/", name="defaut")
     */
    public function index()
    {
        return $this->render('defaut/index.html.twig', [
            'controller_name' => 'DefautController',
        ]);
    }
}
