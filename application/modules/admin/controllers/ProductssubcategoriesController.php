<?php
class Admin_ProductssubcategoriesController extends CL_Curd_CurdContoller
{
   public function init()

    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'ProductsSubCategories';
        $this->listValue = array('title'=>'Title'  , 'Catid'=>'Category' , 'displayorder'=>'Order' );
        $this->formClass = new Form_Productssubcategories();
        $this->view->typename = 'Products Sub Categories';
        $this->view->typename2 = 'Productssubcategories';

    }


    public function indexAction() {
      $this->view->Custom = 'Productssubcategories';
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







