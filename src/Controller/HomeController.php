<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class HomeController extends AbstractController
{
    // Page d'accueil
    #[Route('/', name: 'home')]
    public function index(HttpClientInterface $client): Response
    {
        // Envoi de la requête pour récupérer les produits
        $response = $client->request('GET', 'https://api.escuelajs.co/api/v1/products?offset=0&limit=10');

        // Décodage de la réponse JSON en tableau PHP
        $products = $response->toArray();

        // Retourner la vue avec les produits
        return $this->render('home/index.html.twig', [
            'products' => $products,
        ]);
    }

    // Page profil
    #[Route('/profil', name: 'profil')]
    public function profil(): Response
    {
        return $this->render('home/profil.html.twig');
    }

    // Page panier
    #[Route('/panier', name: 'panier')]
    public function panier(): Response
    {
        return $this->render('home/panier.html.twig');
    }
}

