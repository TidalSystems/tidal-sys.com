<?php

class Admin_FontsController extends CL_Curd_CurdContoller
{
    public function init()

    {



        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'fonts';
        $this->listValue = array('title'=>'Title' , 'displayorder'=>'Display Order' );
        $this->formClass = new Form_Fonts();
        $this->view->typename = 'Fonts';



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

 

 

                          }}

  







