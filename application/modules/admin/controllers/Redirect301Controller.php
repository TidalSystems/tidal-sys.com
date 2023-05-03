<?php
class Admin_Redirect301Controller extends CL_Curd_CurdContoller
{
   public function init()

    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'Redirect301';
        $this->listValue = array('title'=>'Old URL' , 'new'=>'New URL'  );
        $this->formClass = new Form_Redirect301();
        $this->view->typename = 'Redirect 301';
        $this->view->typename2 = 'Redirect301';

    }


    public function indexAction() {
      $this->view->Custom = 'Redirect301';
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







