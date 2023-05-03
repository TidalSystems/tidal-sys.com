<?php

 

class Admin_FaqController extends CL_Curd_CurdContoller

{

    public function init()

    {

        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'Faq';

        $this->listValue = array('title'=>'Question' ,     'displayorder'=>'Order');

        $this->formClass = new Form_Faq();

        $this->view->typename = 'FAQ';

        $this->view->typename2 = 'FAQ';


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



