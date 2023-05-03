<?php
class Admin_StandController extends CL_Curd_CurdContoller

{

    public function init()

    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'stand';
        $this->listValue = array('title'=>'Title' , 'displayorder'=>'Display Order '   );
        $this->formClass = new Form_Stand();
        $this->view->typename = 'Stands';

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
  


