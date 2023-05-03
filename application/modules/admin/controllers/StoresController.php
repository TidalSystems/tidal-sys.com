<?php
class Admin_StoresController extends CL_Curd_CurdContoller

{

    public function init()

    {

        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'stores';

        $this->listValue = array('AgencyName'=>'Agency Name'   );

        $this->formClass = new Form_Stores();

        $this->view->typename = 'Stores';

    }

    public function indexAction() {

            $this->view->Custom = 'Stores';

        parent::indexAction();

    }

    public function createAction() {

        parent::createAction();

    }

    public function editAction() {

        parent::editAction();



    }

    public function deleteAction() {

  $this->_UnDelete = array(76);

 

        parent::deleteAction();

    }



}



