<?php

namespace Recouvrement\AmiableBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MarketeurController extends Controller
{
    public function acceuilAction()
    {
        return $this->render('@RecouvrementAmiable/Marketeur/AcceuilMarketeur.html.twig');
    }
    public function ajouterCltProsAction()
    {
        return $this->render('@RecouvrementAmiable/Marketeur/AjouterCltPros.html.twig');
    }
    public function consulterCltProsAction()
    {
        return $this->render('@RecouvrementAmiable/Marketeur/consulterCltPros.html.twig');
    }
}
