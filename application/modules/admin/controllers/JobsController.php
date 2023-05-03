<?php

 

class Admin_JobsController extends CL_Curd_CurdContoller

{

    public function init()

    {

        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'Jobs';
        $this->listValue = array('title'=>'Title' ,   'displayorder'=>'Order' , 'Active'=>'Active'   );
        $this->formClass = new Form_Jobs();
        $this->view->typename = 'Jobs';
        $this->view->typename2 = 'Jobs';

    }

    public function indexAction() {

            $this->view->Custom = 'Jobs';

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



