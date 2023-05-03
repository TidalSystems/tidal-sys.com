<?php

class Admin_ArticlesController extends CL_Curd_CurdContoller

{

    public function init()

    {

        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'articles';

        $this->listValue = array('title'=>'Title' ,  'thumb'=>'Thumb' , 'datepicker'=>'Date'  );

        $this->formClass = new Form_Articles();

        $this->view->typename = 'Articles';

		        $this->view->typename2 = 'Articles';

    }

    public function indexAction() {

            $this->view->Custom = 'Articles';

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



