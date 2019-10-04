<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Royaumes;
use Symfony\Component\Validator\Constraints\All;
class RoyaumesController extends AbstractController
{
    /**
     * @Route("/royaumes", name="royaumes")
     */
    public function index()
    {

        $royaumes = $this->getDoctrine()
            ->getRepository(Royaumes::class)
            ->findAll();

        return $this->render('royaumes/index.html.twig', [
            'controller_name' => 'RoyaumesController',
            'royaumes' => $royaumes
        ]);
    }
}
