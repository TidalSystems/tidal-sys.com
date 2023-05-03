<?php
class Admin_MealscategoriesController extends CL_Curd_CurdContoller
{
   public function init()

    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'MealsCategories';
        $this->listValue = array('title'=>'Title En' , 'titleAr'=>'Title Ar' );
        $this->formClass = new Form_Mealscategories();
        $this->view->typename = 'Meals Categories';
        $this->view->typename2 = 'Mealscategories';

    }


    public function indexAction() {
      $this->view->Custom = 'Mealscategories';
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







