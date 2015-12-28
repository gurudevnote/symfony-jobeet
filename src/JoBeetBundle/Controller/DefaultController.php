<?php

namespace JoBeetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JoBeetBundle:Default:index.html.twig');
    }
}
