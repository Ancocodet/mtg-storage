<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SecurityController extends AbstractController
{
    #[Route('/api/security', name: 'app_api_security')]
    public function index(): Response
    {
        return $this->json([
            'status' => 'success',
            'message' => 'API Security endpoint is working!',
        ]);
    }
}
