<?php

 

class Admin_PressController extends CL_Curd_CurdContoller

{

    public function init()

    {

        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'press';

        $this->listValue = array('Title'=>'Title' ,  'MDate'=>'Date'   );

        $this->formClass = new Form_Press();

        $this->view->typename = 'Press Release';

    }

    public function indexAction() {

     $this->view->Custom = 'commentsd';

        parent::indexAction();

    }

    public function createAction() {

        parent::createAction();

    }

    public function edit3Action() {

        parent::edit3Action();



    }

    public function deleteAction() {

 

      

        parent::deleteAction();

    }



}



