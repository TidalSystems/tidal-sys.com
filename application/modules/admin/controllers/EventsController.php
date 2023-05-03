<?php
class Admin_EventsController extends CL_Curd_CurdContoller
{
   public function init()

    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'events';
        $this->listValue = array('title'=>'Title' , 'Thumb' => 'Photo' ,  'displayorder'=>'Display Order'  );
        $this->formClass = new Form_Events();
        $this->view->typename = 'Events';
        $this->view->typename2 = 'Events';

    }


    public function indexAction() {
      $this->view->Custom = 'Events';
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







