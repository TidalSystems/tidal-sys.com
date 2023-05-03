<?php

 class Admin_HomepageController extends CL_Curd_CurdContoller
{
    public function init()
    {
        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'pages_blocks2';
        $this->listValue = array('title'=>'Title' , 'displayorder'=>'Display Order');
        $this->formClass = new Form_HomePage();
        $this->view->typename = 'Home Page Content';
    }
    public function indexAction() {
        $this->view->Custom = 'homepage';
        $this->selectOptions = array('pageid'=>0);
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

