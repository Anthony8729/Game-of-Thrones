<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SpinoffController extends AbstractController
{
    /**
     * @Route("/spinoff", name="spinoff")
     */
    public function index()
    {
        return $this->render('spinoff/index.html.twig', [
            'controller_name' => 'SpinoffController',
        ]);
    }
}
