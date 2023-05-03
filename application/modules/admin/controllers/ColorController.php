<?php
class Admin_ColorController extends CL_Curd_CurdContoller
{
   public function init()
    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'Color';
        $this->listValue = array('title'=>'Color' , 'displayorder'=>'Order' );
        $this->formClass = new Form_Color();
        $this->view->typename = 'Colors';
        $this->view->typename2 = 'Color';
    }

    public function indexAction() {
      $this->view->Custom = 'Color';
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







