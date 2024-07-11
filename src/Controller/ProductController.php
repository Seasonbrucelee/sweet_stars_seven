<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(ProductRepository $productRepository): Response
    {   
        $products = $productRepository->findAll();

        // Pass the products array to the home template

        return $this->render('product/home.html.twig', [
        'products' => $products
        ]);
    }
    
    #[Route('/product/{id}', name: 'product_view')]
    public function product(int $id, ProductRepository $productRepository): Response
    {

        //dd($product);
        # TODO : A afficher sur la vue
        $product = $productRepository->find($id);
        if (!$product) {
            throw $this->createNotFoundException('The product does not exist');
        }
        return $this->render('product/view.html.twig', 
        ['product'=> $product,
                
            ]);
    }
}
