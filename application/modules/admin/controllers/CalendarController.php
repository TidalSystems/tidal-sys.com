<?php
  

class Admin_CalendarController extends Zend_Controller_Action {
    public function init() {
    }



    public function indexAction() {
 
        $form3 = new Form_Tasks();
        $this->dbmodelClass3 = new Model_PlusData();
        $this->dbmodelClass3->_name = 'Tasks';
        $model3 = $this->dbmodelClass3;
 
       $this->view->form3 = $form3;


 if (isset($_POST['savetask']) &&  $form3->isValid($_POST)   ) {
            $data30 = $form3->getValues();
 
 
 
            $res30 =  $model3->InsertRow(($data30));  
  $this->_helper->flashMessenger
                    ->addMessage('success')
                    ->addMessage('Save Done');
    $this->_redirect('admin/calendar');     
 

 }
   










}


 

}

