<?php
namespace tuitty\TuittyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use tuitty\TuittyBundle\Document\User;

class TestController extends Controller
{
    public function testAcction()
    {
        $user = new User();
        $user->setName('jjj');
        $user->setSurname('jjjjj');
        $user->setEmail('a@a.com');
        $user->setPassword('adfadf');

        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($user);
        $dm->flush();
        
        return $this->render('TuittyBundle:Test:test.html.twig', array('acction' => $user->getId()));
    }
}