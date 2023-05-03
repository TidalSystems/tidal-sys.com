<?php
class Admin_DiscountController extends CL_Curd_CurdContoller
{
    public function init()



    {



        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'discount';
        $this->listValue = array( 'name'=>'Internal Name' , 'title'=>'Website Title'  , 'discount'=>'Discount Amount' , 'datepicker'=>'Discount Expiration Date' ,  'date'=>'Creation Date/Time');
        $this->formClass = new Form_Discount();
       $this->view->typename = 'Discount';
    }
    public function indexAction() {
$this->view->Custom = 'Discounts';  
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







