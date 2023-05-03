<?php
class Admin_CareersController extends CL_Curd_CurdContoller
{
   public function init()

    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'Careers';
        $this->listValue = array('title'=>'Title'      );
        $this->formClass = new Form_Careers();
        $this->view->typename = 'Careers';
        $this->view->typename2 = 'Careers';

    }


    public function indexAction() {
      $this->view->Custom = 'Careers';
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







