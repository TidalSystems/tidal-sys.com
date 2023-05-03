<?php
 
class Admin_FeaturingController extends CL_Curd_CurdContoller
{
    public function init()
    {
        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'featuring';
        $this->listValue = array('title'=>'Title' ,     'displayorder'=>'Display Order'  ,   'img:image'=>'Image'   );
        $this->formClass = new Form_Featuring();
        $this->view->typename = 'Featuring';
    }
    public function indexAction() {
     $this->view->Custom = 'Featuring';
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


 