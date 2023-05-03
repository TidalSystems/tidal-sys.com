<?php
 
class Admin_ContactsController extends CL_Curd_CurdContoller
{
    public function init()
    {
        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'contacts';
        $this->listValue = array('title'=>'Title' ,     );
        $this->formClass = new Form_Contacts();
        $this->view->typename = 'Contact Us';
    }
    public function indexAction() {
     $this->view->Custom = 'offer';
        parent::indexAction();
    }
    public function createAction() {
        parent::createAction();
    }
    public function editAction() {
        parent::editAction();

    }
    public function deleteAction() {
 
       $this->_UnDelete = array(82);
        parent::deleteAction();
    }

}

