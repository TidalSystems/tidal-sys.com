<?php
class Admin_InfographicsController extends CL_Curd_CurdContoller

{

    public function init()

    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'infographics';
        $this->listValue = array('title'=>'Title' ,  'displayorder'=>'Display Order'  );

        $this->formClass = new Form_Infographics();
        $this->view->typename = 'Infographics';
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



