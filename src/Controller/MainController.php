<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class MainController extends AbstractController
{
    #[Route(path: '/', name: 'app_main')]
    public function login(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        return $this->render('base.html.twig');
    }
}
