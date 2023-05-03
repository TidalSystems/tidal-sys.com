<?php

 

class Admin_EmailsController extends CL_Curd_CurdContoller

{

    public function init()

    {

        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'emails';

        $this->listValue = array('title'=>'Title'   );

        $this->formClass = new Form_Emails();

       

          $this->view->typename = 'Emails Configuration';

    }

    public function indexAction() {
   $this->view->Sort = 'no';
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



