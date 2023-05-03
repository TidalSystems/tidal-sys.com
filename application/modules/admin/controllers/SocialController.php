<?php 
class Admin_SocialController extends CL_Curd_CurdContoller

{

    public function init()

    {

        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'social';

        $this->listValue = array('title'=>'Name' , 'displayorder'=>'Display Order');

        $this->formClass = new Form_Social();

        $this->view->typename = 'Social Icons';
      $this->view->typename2 = 'Social';

    }

    public function indexAction() {

$this->view->Custom = 'social';
 
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



