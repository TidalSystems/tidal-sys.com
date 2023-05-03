<?php
class Admin_CarssettingController extends CL_Curd_CurdContoller

{
    public function init()
    {
        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'carssetting';
        $this->listValue = array(    );
        $this->formClass = new Form_Carssetting();
        $this->view->typename = 'Cars Setting';



    }

    public function indexAction() {
        parent::indexAction();
    }



    public function createAction() {
        parent::createAction();
    }



    public function editboxsAction() {



        parent::editboxsAction();







    }



    public function deleteAction() {



 



         



        parent::deleteAction();



    }







}







