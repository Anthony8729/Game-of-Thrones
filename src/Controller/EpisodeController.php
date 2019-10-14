<?php

namespace App\Controller;

use App\Entity\Episode;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\All;

class EpisodeController extends AbstractController
{
    /**
     * @Route("/episode", name="episode")
     */
    public function index()
    {

        $episodes = $this->getDoctrine()
        ->getRepository(Episode::class)
        ->findAll();

        return $this->render('episode/index.html.twig', [
            'controller_name' => 'EpisodeController',
            'episodes' => $episodes
        ]);
    }
}
