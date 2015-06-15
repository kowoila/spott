<?php

namespace spott\crawlerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('spottcrawlerBundle:Default:index.html.twig', array('name' => $name));
    }
}
