<?php
class Admin_IpmessageController extends CL_Curd_CurdContoller

{
    public function init()

    {
        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'ipmessage';
        $this->listValue = array( 'message'=>'message' );
        $this->formClass = new Form_Ipmessage();
        $this->view->typename = 'Ipmessage';
    }
    public function indexAction() {
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



