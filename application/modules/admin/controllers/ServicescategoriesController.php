<?php

class Admin_ServicescategoriesController extends CL_Curd_CurdContoller

{

   public function init()



    {



        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'servicescategories';

        $this->listValue = array('title'=>'Title'  ,'displayorder'=>'Order' );

        $this->formClass = new Form_Servicescategories();

        $this->view->typename = 'Solutions';

        $this->view->typename2 = 'Servicescategories';



    }





    public function indexAction() {

      $this->view->Custom = 'Servicescategories';

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















