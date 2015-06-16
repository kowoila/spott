<?php

namespace spott\crawlerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\HttpFoundation\Response;

class CrawlController 
{
    public function indexAction()
    {
        return new Response("Salut");
    }
}
