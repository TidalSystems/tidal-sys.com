<?php
class Admin_PrivacypolicyController extends CL_Curd_CurdContoller
{
   public function init()

    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'Privacypolicy';
        $this->listValue = array('title'=>'Title'    ,  'displayorder'=>'Display Order'   );
        $this->formClass = new Form_Privacypolicy();
        $this->view->typename = 'Privacy Policy';
        $this->view->typename2 = 'Privacypolicy';

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







