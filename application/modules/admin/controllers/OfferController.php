<?php
class Admin_OfferController extends CL_Curd_CurdContoller

{

    public function init()

    {

        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'offer';

        $this->listValue = array('data'=>'Title' ,   'img:image'=>'Photo' ,        'displayorder'=>'Display Order');

        $this->formClass = new Form_Offer();

        $this->view->typename = 'Home Page Slider';

    }

    public function indexAction() {

     $this->view->Custom = 'offer';

        parent::indexAction();

    }

    public function createAction() {

        parent::createAction();

    }

    public function editAction() {

        parent::editAction();



    }

    public function deleteAction() {

 $this->_UnDelete = array(73);

        parent::deleteAction();

    }



}





 