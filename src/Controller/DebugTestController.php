<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DebugTestController extends AbstractController
{
    #[Route('/debug/test', name: 'app_debug_test')]
    public function index(): Response
    {
        return $this->render('debug_test/index.html.twig', [
            'controller_name' => 'DebugTestController',
        ]);
    }
}
