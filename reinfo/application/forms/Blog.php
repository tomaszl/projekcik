<?php

class Application_Form_Blog extends Zend_Form
{

    public function init()
    {
      $this->setMethod('post');
        $this->addElement('text', 'title', array('label' => 'Tytuł'));
        $this->addElement('submit', 'submit', array('label' => 'Zapisz'));
    }


}