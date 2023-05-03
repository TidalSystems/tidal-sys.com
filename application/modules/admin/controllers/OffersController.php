<?php
class Admin_OffersController extends CL_Curd_CurdContoller

{

    public function init()

    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'special_offers';
        $this->listValue = array('Title1'=>'Title ' ,   'displayorder'=>'Display Order' );
        $this->formClass = new Form_Offers();
        $this->view->typename = 'Home Page Content';
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



