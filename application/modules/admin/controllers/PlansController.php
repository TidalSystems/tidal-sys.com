<?php

class Admin_PlansController extends CL_Curd_CurdContoller

{
    public function init()



    {



        $this->dbmodelClass = new Model_PlusData();



        $this->dbmodelClass->_name = 'rates_plans';



        $this->listValue = array( 'countryid'=>'From' , 'Bronze'=>'Bronze' ,  'Silver'=>'Silver' ,   'Golden'=>'Golden'  );



        $this->formClass = new Form_Plans();



        $this->view->typename = 'Plans Names';



    }



    public function indexAction() {



     $this->view->Custom = 'Plans Names';

 

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
  





