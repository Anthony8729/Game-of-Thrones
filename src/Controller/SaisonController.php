<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Saison;
use Symfony\Component\Validator\Constraints\All;

class SaisonController extends AbstractController
{
    /**
     * @Route("/saison/{id}", name="saison")
     */
    public function index($id)
    {

        $saisons = $this->getDoctrine()
        ->getRepository(Saison::class)
        ->findOneBy(['id'=>$id]);

        return $this->render('saison/index.html.twig', [
            'controller_name' => 'SaisonController',
            'saisons' => $saisons
        ]);
    }
}
