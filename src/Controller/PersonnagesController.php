<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PersonnagesController extends AbstractController
{
    /**
     * @Route("/personnages", name="personnages")
     */
    public function index()
    {
        return $this->render('personnages/index.html.twig', [
            'controller_name' => 'PersonnagesController',
        ]);
    }
}
