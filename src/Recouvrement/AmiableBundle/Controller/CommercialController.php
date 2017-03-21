<?php

namespace Recouvrement\AmiableBundle\Controller;


use Recouvrement\AmiableBundle\Entity\mytest;
use Recouvrement\AmiableBundle\Form\mytestType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CommercialController extends Controller
{
    public function acceuilCommercialAction()
    {
        return $this->render('@RecouvrementAmiable/Commercial/AcceuilCommercial.html.twig');
    }
    public function consulterCltProsCommercialAction()
    {
        return $this->render('@RecouvrementAmiable/Commercial/consulterCltProsCommercial.html.twig');
    }
    public function consulterClientCommercialAction()
    {
        return $this->render('@RecouvrementAmiable/Commercial/consulterClientCommercial.html.twig');
    }
    public function ajouterClientAction()
    {
        return $this->render('@RecouvrementAmiable/Commercial/ajouterClient.html.twig');
    }
    public function ajouterDebiteurAction()
    {
        return $this->render('@RecouvrementAmiable/Commercial/AjouterDebiteur.html.twig');
    }
    public function ajouterDocumentAction()
    {
        return $this->render('@RecouvrementAmiable/Commercial/ajouterDocument.html.twig');
    }
    public function testAction(Request $request)
    {

        $modele = new mytest();
        $form=$this->createForm(mytestType::class,$modele);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($modele);
            $em->flush();
            return new Response('yes');
        }
        return $this->render('@RecouvrementAmiable/Commercial/test.html.twig',
            array('form'=>$form->createView()));
    }
}
