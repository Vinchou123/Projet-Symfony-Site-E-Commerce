<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ECommerceWebController extends AbstractController
{
    #[Route('/e/commerce/web', name: 'app_e_commerce_web')]
    public function index(): Response
    {
        return $this->render('e_commerce_web/index.html.twig', [
            'controller_name' => 'ECommerceWebController',
        ]);
    }
}
