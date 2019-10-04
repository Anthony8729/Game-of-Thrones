<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Spinoff;
use Symfony\Component\Validator\Constraints\All;
class SpinoffController extends AbstractController
{
    /**
     * @Route("/spinoff", name="spinoff")
     */
    public function index()
    {

        $spinoff = $this->getDoctrine()
        ->getRepository(Spinoff::class)
        ->findAll();

        return $this->render('spinoff/index.html.twig', [
            'controller_name' => 'SpinoffController',
            'spinoff' => $spinoff
        ]);
    }
}
