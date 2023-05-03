<?php  

class Admin_CountriesController extends CL_Curd_CurdContoller



{



    public function init()



    {



        $this->dbmodelClass = new Model_PlusData();



        $this->dbmodelClass->_name = 'countries';



        $this->listValue = array('title'=>'title En' , 'titleAr'=>'Title Ar' ,    'displayorder'=>'Display Order' , );



        $this->formClass = new Form_Countries();

        $this->view->typename2 = 'Countries';

        $this->view->typename = 'Countries';



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







