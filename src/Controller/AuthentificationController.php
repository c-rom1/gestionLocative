<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;


/**
 * Description of Authentification
 *
 * @author rhum1
 */
class AuthentificationController  extends AbstractController {
    /**
    * @Route("/")
    */
    public function authentification(Environment $twig)
    {
        $number = random_int(0, 100);
        
       return new Response($twig->render('authentification.html.twig', [
            'number' => $number,
        ]));
        
    }
    
}
