<?php

namespace Recouvrement\UserBundle\Controller;

use Recouvrement\UserBundle\Entity\User;
use Recouvrement\UserBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    public function acceuilAction()
    {
        return $this->render('RecouvrementUserBundle:Admin:acceuil.html.twig');
    }
    public function consulterAction()
    {
        return $this->render('RecouvrementUserBundle:Admin:consulterUser.html.twig');
    }
    public function ajouterAction(Request $request)
    {
        $user = new User();

        $form=$this->createForm(UserType::class ,$user);
        $form->handleRequest($request);

            if($form->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                return $this->redirect($this->generateUrl("recouvrement_user_admin_ajouter"));
            }
//        }
//        return $this->render('GrcUserBundle:Admin:AjoutManager.html.twig', array('form'=>$form->createView()));
        return $this->render('RecouvrementUserBundle:Admin:ajouterUser.html.twig', array('form'=>$form->createView()));
    }
    public function showAction()
    {
        return $this->render('RecouvrementUserBundle:Admin:show.html.twig');
    }


}
