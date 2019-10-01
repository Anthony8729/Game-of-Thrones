<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InformationsLégalesController extends AbstractController
{
    /**
     * @Route("/informations/l/gales", name="informations_l_gales")
     */
    public function index()
    {
        return $this->render('informations_légales/index.html.twig', [
            'controller_name' => 'InformationsLégalesController',
        ]);
    }
}
