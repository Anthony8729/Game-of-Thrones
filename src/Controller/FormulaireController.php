<?php

namespace App\Controller;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Formulaire;

class FormulaireController extends AbstractController
{
    /**
     * @Route("/formulaire", name="formulaire")
     */
    public function index(Request $request, ObjectManager $manager)
    {

        $formulaire = new Formulaire();

        $form = $this->createFormBuilder($formulaire)
            ->add('login', TextType::class)
            ->add('email', EmailType::class)
            ->add('motdepasse', PasswordType::class)
            ->add('repetezlemotdepasse',PasswordType::class)
            ->getForm();
            

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

             return $this->redirectToRoute('home'); 
        }

        return $this->render('formulaire/index.html.twig', [
            'controller_name' => 'FormulaireController',
            'form' => $form->createView(),
        ]);
    }
}
