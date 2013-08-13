<?php

class AuthController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function authAction()
    {
        Zend_Layout::getMvcInstance()->setLayout('login-layout');
    }

    public function loginAction()
    {
        // action body
    }

    public function logoutAction()
    {
        // action body
    }


}





