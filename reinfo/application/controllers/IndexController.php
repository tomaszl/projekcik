<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
      $Glowna = new Application_Model_DbTable_Glowna();
      $this->view->glowna = $Glowna->fetchAll();
    }

    public function onasAction()
    {
        $Onas = new Application_Model_DbTable_Onas();
        $this->view->onas = $Onas->fetchAll();
        //onas
    }

    public function wdrozeniaAction()
    {
        // wdrozenia
    }

    public function blogAction()
    {
     // blog
        $Blog = new Application_Model_DbTable_Blog();
        $this->view->blog = $Blog->fetchAll();
    }

    public function postAction()
    {
   //     $Blog = new Application_Model_DbTable_Blog();
      //  $this->view->blog = $Blog->fetchAll();
        
    }

    public function ofertaAction()
    {
        // oferta
    }

    public function kontaktAction()
    {
        // kontakt
    }

    public function createformAction()
    {
     $this->view->form = new Application_Form_Blog();
    $url = $this->view->url(array('action' => 'create'));
    $this->view->form->setAction($url);
    }

    public function createAction()
    {
            if ($this->getRequest()->isPost()) {
        $form = new Application_Form_Blog();
        if ($form->isValid($this->getRequest()->getPost())) {
            $data = $form->getValues();
            $DbTable = new Application_Model_DbTable_Blog();
            $id = $DbTable->insert($data);
            return $this->_helper->redirector(
                'edit', 'index', null, array('id' => $id)
            );
        }
        $this->view->form = $form;
    } else {
        throw new Zend_Controller_Action_Exception('BĹÄdny adres!', 404);
    }
   
    }

    public function deleteAction()
    {
        // action body
    }

    public function editAction()
    {
        $id = $this->getRequest()->getParam('id');  
    $DbTable = new Application_Model_DbTable_Blog();  
    $obj = $DbTable->find($id)->current();  
    if (!$obj) {  
        throw new Zend_Controller_Action_Exception('Błędny adres!', 404);  
    }  
    $this->view->form = new Application_Form_Blog();  
    $this->view->form->populate($obj->toArray());  
    $url = $this->view->url(array('action' => 'update', 'id' => $id));  
    $this->view->form->setAction($url);  
    $this->view->object = $obj;  
    }

    public function updateAction()
    {
        // action body
    }

    public function showAction()
    {
          $id = $this->getRequest()->getParam('id');
    $DbTable = new Application_Model_DbTable_Blog();
    $obj = $DbTable->find($id)->current();
    if (!$obj) {
        throw new Zend_Controller_Action_Exception('BĹÄdny adres!', 404);
    }
    $this->view->object = $obj;
    }

    public function adminAction()
    {
        // action body
    }


}







    









