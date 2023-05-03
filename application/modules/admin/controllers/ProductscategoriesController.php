<?php
class Admin_ProductscategoriesController extends CL_Curd_CurdContoller
{
   public function init()

    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'ProductsCategories';
        $this->listValue = array('title'=>'Title' ,   'displayorder'=>'Order' );
        $this->formClass = new Form_Productscategories();
        $this->view->typename = 'Products Categories';
        $this->view->typename2 = 'Productscategories';

    }


    public function indexAction() {
      $this->view->Custom = 'Productscategories';
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







