<?php

namespace Esprit\RubriqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EspritRubriqueBundle:Default:index.html.twig', array('name' => $name));
    }
}
