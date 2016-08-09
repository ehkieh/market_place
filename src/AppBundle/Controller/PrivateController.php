<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PrivateController extends Controller
{
    /**
     * @Route("/nuevoTrayecto", name="private_nuevoTrayecto")
     */
    public function nuevoTrayectoAction(Request $request)
    {
        /**
         * 1. Habría que...
         * 
         * 
         * 
         * 
         * */
        die("Pendiente de hacer: Nuevo Trayecto");
    }
    
    /**
     * @Route("/publicarTrayecto", name="private_publicarTrayecto")
     */ 
    public function publicarTrayectoAction(Request $request)
    {
        /**
         * 1. Habría que...
         * 
         * 
         **/ 
        die("Pendiente de hacer");
        //return $this->render('building/index.html.twig');
    }
}