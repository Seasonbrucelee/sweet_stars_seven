<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FavoriteController extends AbstractController
{
    #[Route('/favorite', name: 'app_favorite')]
    public function favorite(): Response
    {
        return $this->render('favorite/favorite.html.twig', [
            'controller_name' => 'FavoriteController',
        ]);
    }
}
