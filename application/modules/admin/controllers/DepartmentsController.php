<?php

class Admin_DepartmentsController extends CL_Curd_CurdContoller

{

    public function init()

    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'Departments';
        $this->listValue = array('title'=>'Department'  ,   'displayorder'=>'Display Order'  );
        $this->formClass = new Form_Departments();
        $this->view->typename = 'Departments';
        $this->view->typename2 = 'Departments';

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



