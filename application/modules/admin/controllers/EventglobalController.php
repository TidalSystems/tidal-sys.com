<?php

class Admin_EventglobalController extends CL_Curd_CurdContoller

{
    public function init()



    {



        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'event-global';

        $this->listValue = array( 'displayorder'=>'displayorder'    );
        $this->formClass = new Form_Eventglobal();

        $this->view->typename = 'Events Global';



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







