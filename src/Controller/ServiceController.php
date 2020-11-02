<?php

namespace App\Controller;

use App\Entity\LogUser;
use App\Form\LogUserType;
use App\Repository\LogUserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
    /**
     * @Route("/service/log/user", name="service")
     */
    public function index(LogUserRepository $logUserRepository): Response
    {
        $fecha_actual = date("Y-m-d");
        $desde = date("Y-m-d",strtotime($fecha_actual."- 1 month"));
        $logUser = $logUserRepository->ultimoMes($desde,$fecha_actual);
        return $this->json($logUser);

    }

    
}
