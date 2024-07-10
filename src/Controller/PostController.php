<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PostController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(PostRepository $postRepository): Response
    {
        return $this->render('post/home.html.twig', [
            
                'posts' => $postRepository->findAll()
        ]);
    }
    #[Route('/post/{id}', name: 'post_view')]
    public function post($id): Response
    {
        return $this->render('post/view.html.twig', [
            'post' => [
                'title' => 'Shop article',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse fermentum varius pellentesque. Curabitur et odio ultricies, pharetra arcu sed, lobortis mi. Sed tristique risus sit amet leo suscipit pretium. Integer eget viverra velit. Nullam dapibus arcu eu leo tempus, a finibus ex volutpat. Proin ut rutrum justo. Duis hendrerit laoreet odio, eu dignissim lectus vehicula in. Quisque commodo malesuada augue quis malesuada. Sed condimentum velit non maximus vehicula. Ut dignissim ac ligula ac venenatis. Morbi interdum ipsum commodo ipsum tempor, sed congue leo condimentum. Suspendisse finibus vel lorem in egestas. Aenean congue venenatis elementum. Vivamus at augue interdum, gravida urna et, suscipit arcu. Praesent convallis metus sed tortor congue laoreet.'
            ],
        ]);
    }
}
