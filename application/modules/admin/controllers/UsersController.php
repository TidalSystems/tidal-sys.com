<?php


class Admin_UsersController extends CL_Curd_CurdContoller

 {
     public function init()
    {
              $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'users';
        $this->listValue = array('firstname'=>'First Name' , 'email'=>'Email' );
        $this->formClass = new Form_Users();
        $this->view->typename = 'Users Account';
        $this->view->typename2 = 'Users/indexuser';
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

