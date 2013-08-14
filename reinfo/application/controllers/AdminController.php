<?php

class AdminController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function adminAction()
    {
       Zend_Layout::getMvcInstance()->setLayout('admin-layout');
    }


}

