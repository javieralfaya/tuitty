<?php

namespace tuitty\TuittyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    public function indexAction(Request $request)
    {
        //******************************
        // SI EL USTUARIO ESTÁ EN SESIÓN
        // *****************************
//        $session = $request->getSession();
//        $user = $session->get('user');
        
        //if(isset($user)){
//        if(true){
//            
//            //PRUEBA RECUPERACIÓN            
//            $cursor = $this->get('doctrine_mongodb')
//                ->getRepository('TuittyBundle:Comment')
//                ->findAll();
//
//            if (!$cursor) {
//                throw $this->createNotFoundException(
//                    'No product found for id manolito'
//                );
//            }
//            
//            $array = iterator_to_array($cursor);
//            var_dump($array);
//            
//            return $this->render('TuittyBundle:Index:index.html.twig', array('user' => $user));
//        }else{
//            return $this->redirect($this->generateUrl('login'));
//        }
        
        if(true){
        //******************************
        // SI EL USTUARIO ESTÁ EN SESIÓN
        // *****************************
        //$session = $request->getSession();
        //$user = $session->get('user');
            return $this->render('TuittyBundle:Index:index.html.twig');
        }else{
        //******************************
        // ELSE
        // *****************************
            return $this->redirect($this->generateUrl('login'));
        }
    }
}
