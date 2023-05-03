<?php
class Admin_MenuController extends CL_Curd_CurdContoller

{
    public function init()

    {

        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'Menu';

        $this->listValue = array(  'PageName'=>'Page'  , 'displayorder'=>'Order'  );
 
        $this->formClass = new Form_Menu();

        $this->view->typename = 'Menu';
        $this->view->typename2 = 'Menu';


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



