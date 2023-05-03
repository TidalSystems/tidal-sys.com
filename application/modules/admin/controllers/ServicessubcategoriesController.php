<?php
class Admin_ServicessubcategoriesController extends CL_Curd_CurdContoller
{
   public function init()

    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'servicessubcategories';
        $this->listValue = array('title'=>'Title'  , 'catID'=>'Category'  ,'displayorder'=>'Order' );
        $this->formClass = new Form_Servicessubcategories();
        $this->view->typename = 'Services Sub Categories';
        $this->view->typename2 = 'Servicessubcategories';

    }


    public function indexAction() {
      $this->view->Custom = 'Servicessubcategories';
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







