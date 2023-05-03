<?php
class Admin_BlogscategoriesController extends CL_Curd_CurdContoller
{
   public function init()

    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'blogscategories';
        $this->listValue = array('title'=>'Title');
        $this->formClass = new Form_Blogscategories();
        $this->view->typename = 'Blogs Category';
        $this->view->typename2 = 'Blogscategories';

    }


    public function indexAction() {
      $this->view->Custom = 'Blogscategories';
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







