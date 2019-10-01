<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SpinOffController extends AbstractController
{
    /**
     * @Route("/spin/off", name="spin_off")
     */
    public function index()
    {
        return $this->render('spin_off/index.html.twig', [
            'controller_name' => 'SpinOffController',
        ]);
    }
}
