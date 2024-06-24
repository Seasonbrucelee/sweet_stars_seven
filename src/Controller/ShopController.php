<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ShopController extends AbstractController
{
    #[Route('/shop', name: 'shop')]
    public function shop(): Response
    {
        return $this->render('shop/shop.html.twig', [
            'controller_name' => 'ShopController',
        ]);
    }
    #[Route('/allproducts', name: 'page_allproducts')]
    public function allproducts(): Response
    {
        return $this->render('shop/allproducts.html.twig', [
            'controller_name' => 'ShopController',
        ]);
    }
    #[Route('/popularitems', name: 'page_popularitems')]
    public function popularitems(): Response
    {
        return $this->render('shop/popularitems.html.twig', [
            'controller_name' => 'ShopController',
        ]);
    }
    #[Route('/newarrivals', name: 'page_newarrivals')]
    public function newarrivals(): Response
    {
        return $this->render('shop/newarrivals.html.twig', [
            'controller_name' => 'ShopController',
        ]);
    }
}
