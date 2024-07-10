<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
    #[Route("/cart/add/{id}", name:"page_cart_add")]
    public function add($id, Request $request) {
            $session = $request->getSession();
            
            $cart = $session->get('cart', []);

            $cart[$id] = 1;

            $session->set('cart', $cart);
            dd($session->get('cart'));

    }
}
