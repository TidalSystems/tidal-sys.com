<?php 

class Admin_Homefooter2Controller extends CL_Curd_CurdContoller
{
    public function init()
    {
        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'homefooter2';
        $this->listValue = array('displayorder'=>'Display Order'  );
        $this->formClass = new Form_Homefooter();
        $this->view->typename = ' Services  ';
    }
    public function indexAction() {
         
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

