<?php

namespace tuitty\TuittyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LoginValidatorController extends Controller
{    
    public function validateAction(Request $request)
    {
        return $this->redirect($this->generateUrl('index'));
    }
}
