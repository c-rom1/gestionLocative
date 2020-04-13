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
 * Description of Accueil
 *
 * @author rhum1
 */

class AccueilController extends AbstractController {
    /**
    * @Route("/accueil")
    */
    public function accueil(Environment $twig) {
        
        return new Response($twig->render('accueil.html.twig'));
    }
}

