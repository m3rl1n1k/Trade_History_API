<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController
{
    #[Route('/index', name: 'app_index', methods: ['GET'])]
    public function index(): JsonResponse
    {
        return $this->json([
            "message" => "Use Documentation API"
        ]);
    }
}
