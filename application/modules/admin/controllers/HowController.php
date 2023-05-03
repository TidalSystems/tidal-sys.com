<?php
 
class Admin_HowController extends CL_Curd_CurdContoller
{
    public function init()
    {
        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'how';
        $this->listValue = array('title'=>'Title' ,    'displayorder'=>'Display Order ' ,  );
        $this->formClass = new Form_Contacts();
        $this->view->typename = 'HOW WE DO IT ? ';
    }
    public function indexAction() {
     $this->view->Custom = 'pages';
        parent::indexAction();
    }
    public function createAction() {
        parent::createAction();
    }
    public function editAction() {
        parent::editAction();

    }
    public function deleteAction() {
 
  
        parent::deleteAction();
    }

}

