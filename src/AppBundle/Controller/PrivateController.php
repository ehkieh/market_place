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
         * Muestra un formulario para rellenar un nuevo Trayecto
         * 
         * 
         * 1. Habría que copiar los twig de nuevoTrayecto.html.twig
         * 2. Y indicar en el render que se muestren
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
         * Guarda los datos enviados por rayecto
         * 
         * 1. Habría que guardar los datos recibiendos en $_GET en un nuevoTrayecto
         * 2. Podríamos poner una redirección a HomeAction (pantalla principal) o a ListAction (a la pantalla de listado de trayectos)
         * 
         **/ 
        die("Pendiente de hacer");
        //return $this->render('building/index.html.twig');
    }
}