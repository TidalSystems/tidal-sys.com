<?php
class Admin_ServicessectionsController extends CL_Curd_CurdContoller
{
   public function init()

    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'ServicesSections';
        $this->listValue = array('title'=>'Title'    ,  'displayorder'=>'Display Order'   );
        $this->formClass = new Form_Servicessections();
        $this->view->typename = 'Services Sections';
        $this->view->typename2 = 'ServicesSections';
    }
    public function indexAction() {
      $this->view->Custom = 'ServicesSections';
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
