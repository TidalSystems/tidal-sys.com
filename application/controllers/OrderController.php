<?php
class OrderController extends CL_Curd_BaseContoller {
       public function init() {
    }
	public function indexAction()
	{
       
   	$this->_forward('v');

            $form = new Form_Order();


         $modeInst = new Model_Order1010();
 
      if (isset($_POST['saverequest']) &&  $form->isValid($_POST)   ) {
        $data = $form->getValues();
       $res20binat = $modeInst->InsertRow(array_filter($data));
            
  
         $this->view->messageVi = "Thanks";
   session_destroy();
   $this->_redirect('/result/index');
  
}

 
       
        $this->view->form = $form;
    }
     
 
    public function vAction()
    {
        
    }
}

