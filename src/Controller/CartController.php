<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use SessionIdInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;

class CartController extends AbstractController
{
    #[Route('/cart', name: 'page_cart')]
    public function cart(SessionInterface $session, ProductRepository $productRepository): Response
    {   
    $cart = $session->get('cart', []);

    $cartWithData = [];
    foreach($cart as $id => $quantity){
        $cartWithData[] = [
            'product' => $productRepository->find($id),
            'quantity' => $quantity
        ];
    }   
    //dd($cartWithData);
        return $this->render('cart/cart.html.twig', [   
            'items' => $cartWithData
        ]);
    }

    #[Route('/cart/add/{id}', name:'cart_add')]

    public function add($id, SessionInterface $session) {
            //$session = $request->getSession();
            
            $cart = $session->get('cart', []);
        if(!empty($cart[$id])){
            $cart[$id]++;
        }else{
            $cart[$id] = 1;
            }
            $session->set('cart', $cart);
            return $this->redirectToRoute('page_cart');
            dd($session->get('cart'));

    }
}
