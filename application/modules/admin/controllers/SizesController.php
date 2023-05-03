<?php
class Admin_SizesController extends CL_Curd_CurdContoller
{
   public function init()
    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'Size';
        $this->listValue = array('title'=>'Sizes' , 'displayorder'=>'Order' );
        $this->formClass = new Form_Sizes();
        $this->view->typename = 'Sizes';
        $this->view->typename2 = 'Sizes';
    }

    public function indexAction() {
      $this->view->Custom = 'Sizes';
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







