<?php
namespace tuitty\TuittyBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use tuitty\TuittyBundle\Form\Type\RegistrationType;
use tuitty\TuittyBundle\Form\Model\Registration;

class AccountController extends Controller
{
    public function registerAction()
    {
        $form = $this->createForm(new RegistrationType(), new Registration());
        return $this->render('TuittyBundle:Account:register.html.twig', array('form' => $form->createView(), 'acction' => './account/validate'));
    }
    
    public function new_userAction()
    {
        return $this->render('TuittyBundle:Account:new_user.html.twig', array('acction' => './validate'));
    }
}