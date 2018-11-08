<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Rapport;

class RapportController extends AbstractController
{
    /**
     * @Route("/rapport", name="rapport")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(Rapport::class);
        $lesRapports = $repository->FindAll();

        return $this->render('rapport/index.html.twig', [
            'controller_name' => 'RapportController',
            'LesRapports' => $lesRapports
        ]);
    }
}
