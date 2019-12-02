<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ServicesController extends AbstractController
{
    /**
     * @Route("/services", name="services.index")
     * @return Response
     */
    public function index(): Response 
    { 
        return $this->render('services/index.html.twig', [
            'current_menu' => 'services'
        ]); 
    }
}
