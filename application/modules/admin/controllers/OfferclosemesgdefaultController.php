<?php

class Admin_OfferclosemesgdefaultController extends CL_Curd_CurdContoller

{
    public function init()
    {
        $this->dbmodelClass = new Model_PlusData();



        $this->dbmodelClass->_name = 'offerclosemesgdefault';



        $this->listValue = array(    );



        $this->formClass = new Form_Offerclosemesgdefault();



        $this->view->typename = 'Default Message for End the Offer';



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







