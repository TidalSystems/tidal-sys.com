<?php
class Admin_AboutusController extends CL_Curd_CurdContoller
{
   public function init()

    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'AboutusPage';
        $this->listValue = array('title'=>'Title'    ,  'displayorder'=>'Display Order'   );
        $this->formClass = new Form_Landingpage();
        $this->view->typename = 'About Us';
        $this->view->typename2 = 'Aboutus';

    }


    public function indexAction() {
      $this->view->Custom = 'Aboutus';
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







