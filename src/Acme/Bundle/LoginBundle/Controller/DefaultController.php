<?php

namespace Acme\Bundle\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeLoginBundle:Default:index.html.twig', array('name' => $name));
    }



    public function loginAction(){
        return $this->render('AcmeLoginBundle:Default:login.html.twig', array('name' => 'name'));
    }
}
