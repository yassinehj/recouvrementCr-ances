<?php

namespace Recouvrement\AmiableBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RecouvreurController extends Controller
{
    public function acceuilRecouvreurAction()
    {
        return $this->render('@RecouvrementAmiable/Recouvreur/AcceuilRecouvreur.html.twig');
    }
}
