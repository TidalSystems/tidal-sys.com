<?php
class Admin_TermsconditionsController extends CL_Curd_CurdContoller
{
   public function init()

    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'Termsconditions';
        $this->listValue = array('title'=>'Title'    ,  'displayorder'=>'Display Order'   );
        $this->formClass = new Form_Termsconditions();
        $this->view->typename = 'Terms & Conditions';
        $this->view->typename2 = 'Termsconditions';

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







