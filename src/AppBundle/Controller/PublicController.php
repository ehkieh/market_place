<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PublicController extends Controller
{
    /**
     * @Route("/", name="public_homepage")
     */
    public function homeAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('home/index.html.twig');
    }
    
    /**
     * @Route("/list", name="public_list")
    */
    public function listAction(Request $request)
    {
        /**
         * 1 .Tenemos que copiar el arhivo list.html.twig del anterior proyecto, para poder incluirlo en el nuevo proyecto en Symfony
         * 2. Una vez incluido el archivo, tendremos que copiar todos los archivos twig que esten incluidos (inlcude) en el fichero list.html.twig
         * 3. Habra que rehacer las rutas.
         * 4. Hay que coger del anterior proyecto el fichero "/controllers/list.php" que es el que realiza la busqueda de todos los trayectos e incluirlo
         * en el Controller del nuevo proyecto.
         **/
         
         // Pendiente de hacer: Renderizar un nuevo twig para que se muestre el error y no se vea feo
         // /building/index.html.twig y borrar el die.
         die("Pendiente de hacer en casa");
    }
}
