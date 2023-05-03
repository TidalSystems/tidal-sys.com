<?php
class Admin_SupportcategoryController extends CL_Curd_CurdContoller
{
   public function init()
    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'SupportCategory';
        $this->listValue = array('title'=>'Title' , 'displayorder'=>'Order' );
        $this->formClass = new Form_Supportcategory();
        $this->view->typename = 'Support Category';
        $this->view->typename2 = 'SupportCategory';
    }

    public function indexAction() {
      $this->view->Custom = 'SupportCategory';
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







