<?php  class Admin_LocationsController extends CL_Curd_CurdContoller

{

    public function init()

    {

        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'Locations';
        $this->listValue = array('title2'=>'Title' ,   'displayorder'=>'Order'   );
        $this->formClass = new Form_Locations();
        $this->view->typename = 'Locations';
        $this->view->typename2 = 'Locations';

    }

    public function indexAction() {

            $this->view->Custom = 'Locations';

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



