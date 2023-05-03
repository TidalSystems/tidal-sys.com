<?php
class Admin_MagazineController extends CL_Curd_CurdContoller
{
   public function init()
    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'Magazine';
        $this->listValue = array('title'=>'Title');
        $this->formClass = new Form_Magazine();
        $this->view->typename = 'Magazine';
        $this->view->typename2 = 'Magazine';
    }

    public function indexAction() {
      $this->view->Custom = 'Magazine';
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







