<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class RegisterationController extends AbstractController
{
    #[Route('/registeration', name: 'app_registeration')]
    public function index(): Response
    {
        return $this->render('registeration/index.html.twig', [
            'controller_name' => 'RegisterationController',
        ]);
    }
}
