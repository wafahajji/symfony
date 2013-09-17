<?php

namespace hajji\wafaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('wafaBundle:Default:index.html.twig', array('name' => $name));
    }
}
