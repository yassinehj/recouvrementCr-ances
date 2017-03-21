<?php

namespace Recouvrement\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RecouvrementUserBundle:Default:index.html.twig');
    }
    public function marketeurAction()
    {
        return $this->render('RecouvrementUserBundle:user:marketeur.html.twig');
    }
    public function commercialAction()
    {
        return $this->render('RecouvrementUserBundle:user:commercial.html.twig');
    }
    public function recouvreurAction()
    {
        return $this->render('RecouvrementUserBundle:user:recouvreur.html.twig');
    }
}
