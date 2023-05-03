<?php
 
class Admin_Services2Controller extends CL_Curd_CurdContoller
{
    public function init()
    {
        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'services2';
        $this->listValue = array(    'img:image'=>'Image'   );
        $this->formClass = new Form_Services2();
        $this->view->typename = 'Services  Image';
    }
    public function indexAction() {
            $this->view->Custom = 'offer';
        parent::indexAction();
    }
    public function createAction() {
        parent::createAction();
    }
    public function editAction() {
        parent::editAction();

    }
    public function deleteAction() {
 $this->_UnDelete = array(76);
 
        parent::deleteAction();
    }

}

