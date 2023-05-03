<?php
class Admin_PagesController extends CL_Curd_CurdContoller
{
   public function init()
    {
        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'Pages';
        $this->listValue = array('title'=>'Title'    ,  'id'=>'Display Order'   );
        $this->formClass = new Form_Pages();
        $this->view->typename = 'Pages';
        $this->view->typename2 = 'Pages';
    }

      public function indexAction() {
      $this->view->Custom = 'Pages';
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







