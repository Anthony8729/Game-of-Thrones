<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SaisonController extends AbstractController
{
    /**
     * @Route("/saison", name="saison")
     */
    public function index()
    {
        return $this->render('saison/index.html.twig', [
            'controller_name' => 'SaisonController',
        ]);
    }
}
