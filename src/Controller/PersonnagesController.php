<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Personnages;
use Symfony\Component\Validator\Constraints\All;

class PersonnagesController extends AbstractController
{
    /**
     * @Route("/personnages", name="personnages")
     */
    public function index()
    {

        $personnages = $this->getDoctrine()
            ->getRepository(Personnages::class)
            ->findAll();
        

        return $this->render('personnages/index.html.twig', [
            'controller_name' => 'PersonnagesController',
            'personnages' => $personnages
        ]);
    }
}
