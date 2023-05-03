<?php


class Admin_ThirdpartyController extends CL_Curd_CurdContoller

{
    public function init()
    {
        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'Third_Party';
        $this->listValue = array( 'title'=>'Name' ,'position22'=>'Position'  );

        $this->formClass = new Form_Thirdparty();

        $this->view->typename = 'Third Party Code';

        $this->view->typename2 = 'Thirdparty';


    }

    public function indexAction() {
   $this->view->Custom = '3rd Parties code';
    $this->view->Sort = 'no';
        parent::indexAction();
    }



    public function createAction() {



        parent::createAction();



    }



    public function editboxsAction() {



        parent::editboxsAction();







    }



    public function deleteAction() {



 



         



        parent::deleteAction();



    }







}







