<?php
class Admin_LandingpagesectionsController extends CL_Curd_CurdContoller
{
   public function init()

    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'LandingPageSections';
        $this->listValue = array('title'=>'Title'    ,  'displayorder'=>'Display Order'   );
        $this->formClass = new Form_Landingpagesections();
        $this->view->typename = 'Landing Page Sections';
        $this->view->typename2 = 'LandingPageSections';
    }
    public function indexAction() {
      $this->view->Custom = 'LandingPageSections';
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
