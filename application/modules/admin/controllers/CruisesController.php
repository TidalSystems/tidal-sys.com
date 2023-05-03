<?php
 
class Admin_CruisesController extends CL_Curd_CurdContoller
{
    public function init()
    {
        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'cruise';
        $this->listValue = array('Name'=>'Name' ,   'displayorder'=>'Display Order' , 'countryid'=>'Country' );
        $this->formClass = new Form_Cruises();
        $this->view->typename = 'Cruises';
    }
    public function indexAction() {
     $this->view->Custom = 'Cruises';
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

