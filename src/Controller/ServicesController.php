<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

use App\Entity\Service;
use App\Repository\ServiceRepository;

class ServicesController extends AbstractController
{
    public function __construct(ServiceRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/services", name="services.index")
     * @return Response
     */
    public function index(): Response 
    { 
        // $service = new Service();
        // $service->setTitle('My First Service')
        //     ->setPrice(2000)
        //     ->setIsFavorite(true)
        //     ->setIsActive(true)
        //     ->setDescription('This is your first service');

        // $em = $this->getDoctrine()->getManager();
        // $em->persist($service);
        // $em->flush();

        $service = $this->repository->findAllActive();
        dump($service);

        return $this->render('services/index.html.twig', [
            'current_menu' => 'services'
        ]); 
    }
}
