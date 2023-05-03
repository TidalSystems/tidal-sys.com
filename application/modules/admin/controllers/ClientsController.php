<?php
class Admin_ClientsController extends CL_Curd_CurdContoller

{
    public function init()

    {
        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'Clients';
        $this->listValue = array( 'title' => 'Title' , 'displayorder' => 'Order');
        $this->formClass = new Form_Clients();
        $this->view->typename = 'Clients';
         $this->view->typename2 = 'Clients';  
    }
    public function indexAction() {
     $this->view->Custom = 'Clients';
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



