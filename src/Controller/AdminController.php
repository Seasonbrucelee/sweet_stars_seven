<?php

namespace App\Controller;

use App\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin', name: 'admin_')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
   
    #[Route('/category/add', name:'category_add')]
    public function addCategory(Request $request): Response
    {
        //dd($request);
        $category = new Category();
        //dd($category);
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AddCategory',
        ]);
    }
    //voir video du 22 avril 2023 pour la suite
}
