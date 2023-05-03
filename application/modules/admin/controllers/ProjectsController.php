<?php

class Admin_ProjectsController extends CL_Curd_CurdContoller



{



    public function init()



    {



        $this->dbmodelClass = new Model_PlusData();



        $this->dbmodelClass->_name = 'projects';



        $this->listValue = array('Title'=>'Title' ,   'Thumb'=>'Photo' ,   'displayorder'=>'Display Order' );



        $this->formClass = new Form_Projects();

        $this->view->typename = 'Clients';

        $this->view->typename2 = 'Projects';



    }



    public function indexAction() {



        $this->view->Custom = 'Projects';



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







