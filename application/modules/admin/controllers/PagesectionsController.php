<?php
class Admin_PageSectionsController extends CL_Curd_CurdContoller
{
   public function init()

    {
        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'PageSections';
        $this->listValue = array('title'=>'Title'    ,  'displayorder'=>'Display Order'   );
        $this->formClass = new Form_Pagesections();
        $this->view->typename = 'Page Sections';
        $this->view->typename2 = 'PageSections';
    }
    public function indexAction() {
      $this->view->Custom = 'PageSections';
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
