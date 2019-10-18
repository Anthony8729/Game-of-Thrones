<?php

namespace App\Controller;

use App\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    /**
     * @Route("/produit/{id}", name="produit")
     */
    public function index($id)
    {

        $produits = $this->getDoctrine()
        ->getRepository(Produit::class)
        ->findOneBy(['id'=>$id]);

        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
            'produits' => $produits
        ]);
    }
}
