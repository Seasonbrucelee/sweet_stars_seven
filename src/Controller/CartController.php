<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CartController extends AbstractController
{
    #[Route('/cart', name: 'page_cart')]
    public function cart(): Response
    {
        return $this->render('cart/cart.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }
}
