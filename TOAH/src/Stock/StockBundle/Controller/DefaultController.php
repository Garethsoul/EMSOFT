<?php

namespace Stock\StockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('StockBundle:Default:index.html.twig', array('name' => $name));
    }
    public function loginAction()
    {
        return $this->render('StockBundle:Default:login.html.twig');
    }
}
