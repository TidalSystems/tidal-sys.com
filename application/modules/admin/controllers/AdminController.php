<?php

class Admin_AdminController extends CL_Curd_CurdContoller

{

     public function init()

    {

        $this->dbmodelClass = new Model_Admin();

        $this->listValue = array('username'=>'User Name'  );

        $this->formClass = new Form_Admin();

        $this->view->typename = 'Password Cpanel';

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

    $this->_UnDelete = array(1);

        parent::deleteAction();

    }





   

}



