<?php

namespace App\Controller;

use App\Entity\LogUser;
use App\Form\LogUserType;
use App\Repository\LogUserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\MessageGenerator;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @Route("/log/user")
 */
class LogUserController extends AbstractController
{

    /**
     * @Route("/", name="log_user_index", methods={"GET"})
     */
    public function index(LogUserRepository $logUserRepository): Response
    {   
        
        $fecha_actual = date("Y-m-d");
        $desde = date("Y-m-d",strtotime($fecha_actual."- 1 month"));

        //llamando al servicio
        $messageGenerator = new MessageGenerator();
        $message = $messageGenerator->getHappyMessage();        
        return $this->render('log_user/index.html.twig', [
            'log_users' => $logUserRepository->ultimoMes($desde,$fecha_actual),
            'messageService' => $message
        ]);
    }

     
    public function addLogUser($entityManager = null)
    {   
        if($entityManager == null){
            $entityManager = $this->getDoctrine()->getManager();
        }        

        $LogUser = new LogUser();
        $LogUser->setFechaCrea(\DateTime::createFromFormat('Y-m-d', "2020-10-09"));
        $LogUser->setFechaModifica(\DateTime::createFromFormat('Y-m-d', "2018-09-09"));
        $LogUser->setIpUsuario("127.0.0.1");
        $LogUser->setUserAgent("userAgent");
        $LogUser->setCodPais("57");
        $LogUser->setClaveEvent("123456");
        
        $entityManager->persist($LogUser);
        $entityManager->flush();
    }

 
  

    




   
}
