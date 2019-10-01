<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RoyaumesController extends AbstractController
{
    /**
     * @Route("/royaumes", name="royaumes")
     */
    public function index()
    {
        return $this->render('royaumes/index.html.twig', [
            'controller_name' => 'RoyaumesController',
        ]);
    }
}
