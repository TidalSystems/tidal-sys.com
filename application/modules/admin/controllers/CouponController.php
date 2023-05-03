<?php

 

class Admin_CouponController extends CL_Curd_CurdContoller

{

    public function init()

    {

        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'coupon';

        $this->listValue = array('title'=>'Name'  ,   'displayorder'=>'Display Order' );

        $this->formClass = new Form_Coupon();

        $this->view->typename = 'Deals & Offers';

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



