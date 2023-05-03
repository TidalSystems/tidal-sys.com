<?php
class Admin_HomesliderController extends CL_Curd_CurdContoller
{
   public function init()

    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'home-slider';
        $this->listValue = array('daraEn'=>'Title' , 'displayorder' => 'Order');
        $this->formClass = new Form_Homeslider();
        $this->view->typename = 'Home Slider';
        $this->view->typename2 = 'Homeslider';

    }


    public function indexAction() {
      $this->view->Custom = 'Home Slider';
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







