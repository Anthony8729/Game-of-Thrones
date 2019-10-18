<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Evenements;
use Symfony\Component\Validator\Constraints\All;
class EvenementsController extends AbstractController
{
    /**
     * @Route("/evenements", name="evenements")
     */
    public function index()
    {

        $evenements = $this->getDoctrine()
        ->getRepository(Evenements::class)
        ->findAll();

        return $this->render('evenements/index.html.twig', [
            'controller_name' => 'EvenementsController',
            'evenements' => $evenements
        ]);
    }
}
