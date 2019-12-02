<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

use App\Entity\Service;

class ServicesController extends AbstractController
{
    /**
     * @Route("/services", name="services.index")
     * @return Response
     */
    public function index(): Response 
    { 
        $service = new Service();
        $service->setTitle('My First Service')
            ->setPrice(2000)
            ->setIsFavorite(true)
            ->setIsActive(true)
            ->setDescription('This is your first service');

        $em = $this->getDoctrine()->getManager();
        $em->persist($service);
        $em->flush();

        return $this->render('services/index.html.twig', [
            'current_menu' => 'services'
        ]); 
    }
}
