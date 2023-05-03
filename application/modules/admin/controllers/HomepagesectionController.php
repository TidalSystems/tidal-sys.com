<?php
class Admin_HomepagesectionController extends CL_Curd_CurdContoller
{
   public function init()

    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'home-page-section';
        $this->listValue = array();
        $this->formClass = new Form_Homepagesection();
        $this->view->typename = 'Home Page Section';
        $this->view->typename2 = 'Home Page Section';

    }


    public function indexAction() {
      $this->view->Custom = 'Home Page Section';
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










