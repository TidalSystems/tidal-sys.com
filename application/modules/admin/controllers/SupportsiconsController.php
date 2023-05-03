<?php
 
class Admin_SupportsiconsController extends CL_Curd_CurdContoller
{
    public function init()
    {
        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'Supportsicons';
        $this->listValue = array('title'=>'Title' ,     'displayorder'=>'Display Order'  ,   'img:image'=>'Image'   );
        $this->formClass = new Form_Supportsicons();
        $this->view->typename = 'Supports Icons';
    }
    public function indexAction() {
     $this->view->Custom = 'Supportsicons';
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


 