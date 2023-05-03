<?php  

class Admin_CitiesController extends CL_Curd_CurdContoller



{



    public function init()



    {



        $this->dbmodelClass = new Model_PlusData();



        $this->dbmodelClass->_name = 'cities';



        $this->listValue = array('title'=>'title En' , 'titleAr'=>'Title Ar' ,    'displayorder'=>'Display Order' , );



        $this->formClass = new Form_Cities();

        $this->view->typename2 = 'Cities';

        $this->view->typename = 'Cities';



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







