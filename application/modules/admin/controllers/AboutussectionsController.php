<?php
class Admin_AboutussectionsController extends CL_Curd_CurdContoller
{
   public function init()

    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'AboutusSections';
        $this->listValue = array('title'=>'Title'    ,  'displayorder'=>'Display Order'   );
        $this->formClass = new Form_Aboutussections();
        $this->view->typename = 'About Us Section';
        $this->view->typename2 = 'Aboutussections';
    }
    public function indexAction() {
      $this->view->Custom = 'Aboutussections';
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
