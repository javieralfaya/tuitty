<?php

namespace tuitty\TuittyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use tuitty\TuittyBundle\Document\User;
use tuitty\TuittyBundle\Document\photos;

class AccountValidatorController extends Controller
{
    
    public function validateAction(Request $request)
    {
        try{
            //if($_POST != null){
                //*******************************************
                // CREAMOS EL USUARIO A PARTIR DEL FORMULARIO
                //*******************************************
                //$user = new User();
//                $user->setName($request->get('name'));
//                $user->setSurname($_POST['surname']);
//                $user->setEmail($_POST['email']);
//                $user->setPassword($_POST['password']);
//                $user->setBirthDate($_POST['birthDate']);
//                $user->setRegistrationDate($_POST['registrationDate']);
//                $user->setSex($_POST['sex']);
                
//                $user->setName('Jorge');
//                $user->setSurname('Jimenez');
//                $user->setEmail('jorge.lioker@gmail.com');
//                $user->setPassword('manolito');
//                $user->setBirthDate('12-09-1981');
//                $user->setRegistrationDate('2014-03-03');
//                $user->setSex('Male');
//                $user->setActive(true);
                
//                $user2 = new User();
//                $user2->setName('Elena');
//                $user2->setSurname('Rodriguez');
//                $user2->setEmail('elena.rodriguez@hotmail.com');
//                $user2->setPassword('manolito');
//                $user2->setBirthDate('15-04-1981');
//                $user2->setRegistrationDate('2014-03-04');
//                $user2->setSex('Male');
//                $user2->setActive(true);

                //*****************************
                // INSERTAR EN LA BASE DE DATOS
                //*****************************
//                $dm = $this->get('doctrine_mongodb')->getManager();
//                $dm->persist($user,false);
//                $dm->persist($user2,false);                
//                $dm->flush();

                //****************
                // LOS HAGO AMIGOS
                //****************
//                
//                for ($i=0;$i<10000;$i++){
//                    $friend = new Friend();
//                    $friend->setFriendId($user2->getId());
//                    $friend->setActive(true);
//                    $user->setFriend($i, $friend);
//                    //$dm->flush();             
//                }
//                $dm->flush();
         
                //******************************
                // HAGO UN COMENTARIO A CADA UNO
                //******************************
//                $comment = new Comment();
//                $comment->setUserId($user->getId());
//                $comment->setRegistrationDate('2014-03-04');
//                $comment->setContent('Hola carabola');
//                $comment->setActive(true);
//                
//                $comment2 = new Comment();
//                $comment2->setUserId($user2->getId());
//                $comment2->setRegistrationDate('2014-03-04');
//                $comment2->setContent('Hola caracaracola');
//                $comment2->setActive(true);
//                
//                $dm->persist($comment,false);
//                $dm->persist($comment2,false);
//                $dm->flush();
                
                try{
                    $user = new User();
                    $user->setName('Jorge');
                    $user->setSurname('Jimenez');
                    $user->setEmail('jorge.lioker@gmail.com');
                    $user->setPassword('manolito');
                    $user->setBirthDate('12-09-1981');
                    $user->setStartDate('2014-03-03');
                    $user->setSex('Male');
                    $user->setActive(true);
                    
                    $photo = new photos();
                    $photo->setPhotoFile("c:\cert\ipconfig.txt");
                    $user->setPhoto(1, $photo);
                    
                    $dm = $this->get('doctrine_mongodb')->getManager();
                    $dm->persist($user,false);
                    $dm->flush();

                    //****************************
                    // GUARDA EL USUARIO EN SESIÓN
                    //****************************
                    //$session = $request->getSession();
                    //$session->set('user', $user);

                    //**********************************
                    // REDIRECCIÓN A LA PÁGINA PRINCIPAL
                    //**********************************
                    return $this->redirect($this->generateUrl('index'));
                }
                catch(Exception $ex){
                    return $this->render('TuittyBundle:Account:new_user.html.twig', array('acction' => './account/validate', 'error' => 'Datos no válidos'));
                }
            //}
        }
        catch(Exception $ex){
            return $this->render('TuittyBundle:Account:new_user.html.twig', array('acction' => './account/validate', 'error' => 'Datos no válidos'));
        }
    }
}
