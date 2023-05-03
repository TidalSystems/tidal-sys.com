<?php
 
class Admin_ClientController extends CL_Curd_CurdContoller
{
    public function init()
    {
        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'client';
        $this->listValue = array('title'=>'Title' , 'displayorder'=>'Display Order' , 'img:table_image'=>'Image' );
        $this->formClass = new Form_Client();
        $this->view->typename = 'Client';
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

