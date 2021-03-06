<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/clientes", name="cliente_index")
     */
    public function clienteIndex()
    {
        // replace this example code with whatever you need
        return new Response('<h5> <small>Hola Mundo</small></h5>');
    }

    /**
     * @Route("/clientes/{id}", name="cliente_detalle")
     */
    public function clienteDetalle($id)
    {
        // replace this example code with whatever you need
        return new Response('<h5> <small>Hola Mundo</small></h5>'.$id);
    }
}
