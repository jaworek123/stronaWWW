<?php

namespace Koniec\PolskaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KoniecPolskaBundle:Default:index.html.twig', array('name' => $name));
    }
}
