<?php

class Admin_LogosController extends CL_Curd_CurdContoller



{

    public function init()



    {



        $this->dbmodelClass = new Model_PlusData();



        $this->dbmodelClass->_name = 'Logos';



        $this->listValue = array(  'img'=>'Logo'  , 'displayorder'=>'Display Order'  );

 

        $this->formClass = new Form_Logos();

        $this->view->typename = 'Footer Logos';

        $this->view->typename2 = 'Logos';



    }



    public function indexAction() {

 $this->view->Custom = 'Logos';

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







