<?php



class Admin_QuotesController extends CL_Curd_CurdContoller

{

    public function init()

    {

        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'Quotes';

        $this->listValue = array('title'=>'Title' );

        $this->formClass = new Form_Quotes();

        $this->view->typename = 'Quotes';
        $this->view->typename2 = 'Quotes';
        $this->view->Sort = 'no';

    }

    public function indexAction() {

        $this->view->Custom = 'Quotes';
 

        parent::indexAction();

    }

    public function createblockAction() {

        parent::createblockAction();

    }

    public function editAction() {

        parent::editAction();



    }

    public function deleteAction() {

        parent::deleteAction();

    }

     
 
}



