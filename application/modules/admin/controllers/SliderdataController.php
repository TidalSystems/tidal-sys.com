<?php
 
class Admin_SliderdataController extends CL_Curd_CurdContoller
{
    public function init()
    {
        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'sliderdata';
        $this->listValue = array('titel'=>'Titel'  );
        $this->formClass = new Form_Sliderdata();
           $this->view->typename = 'Text Under Slider';

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

