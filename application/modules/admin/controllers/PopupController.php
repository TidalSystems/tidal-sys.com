<?php
class Admin_PopupController extends CL_Curd_CurdContoller

{
    public function init()
    {
        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'Popup';
        $this->listValue = array('title' => 'Title' , 'expiredate' => 'Expire Date' ,'show_home'=>'',  'style' => 'Position');
        $this->formClass = new Form_Popup();
        $this->view->typename = 'Popup Messages';
        $this->view->typename2 = 'Popup';
   }
    public function indexAction() {
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







