<?php

namespace Torum\LawBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TorumLawBundle:Default:index.html.twig');
    }
}
