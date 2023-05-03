<?php  
class Admin_MealsController extends CL_Curd_CurdContoller

{

    public function init()

    {

        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'Meals';

        $this->listValue = array('title'=>'title En' , 'titleAr'=>'Title Ar' , 'Thumb' => 'Photo' ,    'displayorder'=>'Display Order' , );
        $this->formClass = new Form_Meals();
        $this->view->typename2 = 'Meals';
        $this->view->typename = 'Meals';

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



