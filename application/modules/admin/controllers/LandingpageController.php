<?php
class Admin_LandingpageController extends CL_Curd_CurdContoller
{
   public function init()
    {
        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'LandingPage';
        $this->listValue = array('title'=>'Title'    ,  'displayorder'=>'Display Order'   );
        $this->formClass = new Form_Landingpage();
        $this->view->typename = 'Landing Page';
        $this->view->typename2 = 'Landingpage';
    }

      public function indexAction() {
      $this->view->Custom = 'Landingpage';
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







