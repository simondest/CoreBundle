<?php

namespace Vertacoo\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VertacooCoreBundle:Default:index.html.twig');
    }
}
