<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AuthorController extends AbstractController
{
    #[Route('/author', name: 'app_author')]
    public function index(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }
    #[Route('/showauthor/{name}', name: 'app_author')]
    public function showAuthor(String $name): Response
    {
        return $this->render('author/show.html.twig', [
            'name' => $name,
        ]);
    }
    #[Route('/listauthor', name: 'app_listauthor')]
    public function listAuthor(): Response
    {
        $authors = [
            1 => ['id' => 1, 'username' => 'Victor Hugo', 'picture' => '/images/victor.jpeg', 'email' => 'victor.hugo@gmail.com', 'nb_books' => 100],
            2 => ['id' => 2, 'username' => 'William Shakespeare', 'picture' => '/images/william.jpeg', 'email' => 'william.shakespeare@gmail.com', 'nb_books' => 200],
            3 => ['id' => 3, 'username' => 'Taha Hussein', 'picture' => '/images/taha.jpeg', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300],
        ];
        return $this->render('author/list.html.twig', [
           'authors'=>$authors,
        ]);
    }
    
    #[Route("/author/{id}", name: "author_details")]
    public function authorDetails(int $id): Response
    { 
        $authors = [
            1 => ['id' => 1, 'username' => 'Victor Hugo', 'picture' => '/images/victor.jpeg', 'email' => 'victor.hugo@gmail.com', 'nb_books' => 100],
            2 => ['id' => 2, 'username' => 'William Shakespeare', 'picture' => '/images/william.jpeg', 'email' => 'william.shakespeare@gmail.com', 'nb_books' => 200],
            3 => ['id' => 3, 'username' => 'Taha Hussein', 'picture' => '/images/taha.jpeg', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300],
        ];
    
        // Find the author by ID
        $author = $authors[$id] ?? null;
    
        // Render the author's details if found
        return $this->render('author/details.html.twig', [
            'author' => $author,
        ]);
    }
    
}
