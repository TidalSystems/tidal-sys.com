<?php


class Admin_AccountsettingsController extends CL_Curd_CurdContoller

 {
     public function init()
    {
              $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'users';
        $this->listValue = array('firstname'=>'First Name' , 'email'=>'Email'  , 'role'=>'Type' );
        $this->formClass = new Form_Accountsettings();
        $this->view->typename = 'Account Settings';
        $this->view->typename2 = 'Account Settings';
 
    }
    public function indexAction() {
        parent::indexAction();
    }
    public function createAction() {
        parent::createAction();
    }
    public function edituserAction() {
        parent::edituserAction();

    }
    public function deleteAction() {
    ;
        parent::deleteAction();
    }


   
}

