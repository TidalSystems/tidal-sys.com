<?php
class Admin_LocationrestrictionController extends CL_Curd_CurdContoller

{


    public function init()

    {
        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'Location_Restriction';
        $this->listValue = array('title'=>'Name' ,'ip'=>'IP'   );
        $this->formClass = new Form_Locationrestriction();
        $this->view->typename = 'Location Restriction';
        $this->view->typename2 = 'LocationRestriction';


    }
    public function indexAction() {
     $this->view->Custom = 'Location Restriction';
     $this->view->Sort = 'no';
 
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



