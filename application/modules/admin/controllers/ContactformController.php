<?php
 
class Admin_ContactformController extends CL_Curd_CurdContoller
{
    public function init()
    {
        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'contactform';
        $this->listValue = array(  );
        $this->formClass = new Form_Contactform();
        $this->view->typename = 'Contact Form';
    }
    public function indexAction() {
     $this->view->Custom = 'contactform';
        parent::indexAction();
    }
    public function createAction() {
        parent::createAction();
    }
    public function editA7ction() {
        parent::edit7Action();

    }
    public function deleteAction() {
 $this->_UnDelete = array(73);
        parent::deleteAction();
    }

}

