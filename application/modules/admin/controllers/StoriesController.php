<?php

 

class Admin_StoriesController extends CL_Curd_CurdContoller

{

    public function init()

    {

        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'stories';

        $this->listValue = array('title'=>'Title' ,    'displayorder'=>'Display Order'  );

        $this->formClass = new Form_Stories();

        $this->view->typename = 'Travel Stories';

    }

    public function indexAction() {

     $this->view->Custom = 'commentsd';

        parent::indexAction();

    }

    public function createAction() {

        parent::createAction();

    }

    public function edit3Action() {

        parent::edit3Action();



    }

    public function deleteAction() {

 

      

        parent::deleteAction();

    }



}



