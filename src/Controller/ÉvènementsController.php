<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ÉvènementsController extends AbstractController
{
    /**
     * @Route("//v/nements", name="_v_nements")
     */
    public function index()
    {
        return $this->render('Évènements/index.html.twig', [
            'controller_name' => 'ÉvènementsController',
        ]);
    }
}
