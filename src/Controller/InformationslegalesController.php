<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InformationslegalesController extends AbstractController
{
    /**
     * @Route("/informationslegales", name="informationslegales")
     */
    public function index()
    {
        return $this->render('informationslegales/index.html.twig', [
            'controller_name' => 'InformationslegalesController',
        ]);
    }
}
