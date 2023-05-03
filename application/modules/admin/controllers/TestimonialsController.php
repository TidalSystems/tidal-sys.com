<?php

 

class Admin_TestimonialsController extends CL_Curd_CurdContoller

{

    public function init()

    {

        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'Testimonials';

        $this->listValue = array('title'=>'Title'    ,   'displayorder'=>'Order'  );

        $this->formClass = new Form_Testimonials();

        $this->view->typename = 'Testimonials';
        $this->view->typename2 = 'Testimonials';

    }

    public function indexAction() {

 

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



