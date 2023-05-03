<?php
class Admin_ContactusController extends CL_Curd_CurdContoller
{
   public function init()

    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'Contactus';
        $this->listValue = array('title'=>'Title'      );
        $this->formClass = new Form_Contactus();
        $this->view->typename = 'Contact Us';
        $this->view->typename2 = 'Contactus';

    }


    public function indexAction() {
      $this->view->Custom = 'Contactus';
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







