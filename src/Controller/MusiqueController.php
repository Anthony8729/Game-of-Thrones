<?php

namespace App\Controller;

use App\Entity\Musique;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MusiqueController extends AbstractController
{
    /**
     * @Route("/musique", name="musique")
     */
    public function index()
    {

        $musiques = $this->getDoctrine()
        ->getRepository(Musique::class)
        ->findAll();


        return $this->render('musique/index.html.twig', [
            'controller_name' => 'MusiqueController',
            'musiques' => $musiques
        ]);
    }
}
