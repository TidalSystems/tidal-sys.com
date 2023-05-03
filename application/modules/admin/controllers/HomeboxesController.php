<?php
class Admin_HomeboxesController extends CL_Curd_CurdContoller
{
   public function init()
    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'Homeboxes';
        $this->listValue = array('title'=>'Title' , 'displayorder'=>'Order');
        $this->formClass = new Form_Homeboxes();
        $this->view->typename = 'Home Boxes';
        $this->view->typename2 = 'Homeboxes';
    }

    public function indexAction() {
      $this->view->Custom = 'Home Boxes';
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







