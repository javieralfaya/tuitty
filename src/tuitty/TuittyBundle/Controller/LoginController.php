<?php

namespace tuitty\TuittyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    public function loginAction(Request $request)
    {
        return $this->render('TuittyBundle:Login:login.html.twig');
    }
}
