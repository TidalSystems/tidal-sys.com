<?php
class Admin_FaqcategoryController extends CL_Curd_CurdContoller
{
   public function init()

    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'FaqCategory';
        $this->listValue = array( 'title'=>'Title' , 'displayorder'=>'Order');
        $this->formClass = new Form_Faqcategory();
        $this->view->typename = 'Faq Category';
        $this->view->typename2 = 'FaqCategory';

    }


    public function indexAction() {
      $this->view->Custom = 'FaqCategory';
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







