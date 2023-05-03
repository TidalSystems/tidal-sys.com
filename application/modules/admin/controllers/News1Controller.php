<?php 

class Admin_News1Controller extends CL_Curd_CurdContoller {

    public function init() {
        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'data_stor';
        $this->listValue = array('title' => 'Titel');
        $this->formClass = new Form_News1();
        $this->view->typename = 'Latest News';
    }

    public function indexAction() {
        $this->selectOptions = array('type' => 'news1');
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