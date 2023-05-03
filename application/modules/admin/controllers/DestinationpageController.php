<?php

class Admin_DestinationpageController extends CL_Curd_CurdContoller
{
    public function init()
    {
        $this->dbmodelClass = new Model_PlusData();
       $this->dbmodelClass->_name = 'destinationPage';

        $this->listValue = array('name'=>'Title' , 'regionid'=>'Region'  , 'displayorder'=>'Display Order'    );
        $this->formClass = new Form_Destinationpage();

       $this->view->typename = 'Destination Page';

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







