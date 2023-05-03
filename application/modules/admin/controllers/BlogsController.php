<?php

class Admin_BlogsController extends CL_Curd_CurdContoller

{

    public function init()

    {

        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'Blogs';

        $this->listValue = array('title'=>'Title' ,  'thumb'=>'Thumb' , 'datepicker'=>'Date'  );

        $this->formClass = new Form_Blogs();

        $this->view->typename = 'Blogs';

		        $this->view->typename2 = 'Blogs';

    }

    public function indexAction() {

            $this->view->Custom = 'Blogs';

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



