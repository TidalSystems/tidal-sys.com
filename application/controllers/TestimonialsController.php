<?php
class TestimonialsController extends CL_Curd_BaseContoller {
	
	public function indexAction()
	{
		$this->_forward('v');
	}
	
    public function vAction()
    {
 
 $model = new Model_PlusData();
        $model->_name  = 'Pages';
        $where = array();
            $where['id'] = '4';
        

        $data = $model->selectForArray($where);
        $this->view->Page = $data;
  
 
 
 
 $subjectemail = $data[0]->subjectemail;
 $confiramtion = $data[0]->confirmation;
$ccemails = $data[0]->emailid;
 

        $form = new Form_Testimonials();
        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'Testimonials';
        $model = $this->dbmodelClass;
        if($this->_request->isPost() && $form->isValid($_POST)) {   
          
           $dataForm = $form->getValues();
           $dataimage =$form->getValue("image"); 
          $result = $model->InsertRow($dataForm);
 $SendMail = new Func_SendMail();
  
           $message = $this->view->partial(
                       'templates/testimonial.html',
                        $dataForm  );
 
 $images = explode('||',trim($ccemails,'|'));
            foreach($images as $index=>$photo){
if(trim($ccemails)){
 $model = new Model_PlusData();  $model->_name  = 'users';$toppages2 = $model->selectForArray(array('id' => $photo), array( ) , 1 );
 foreach($toppages2 as $emailname){
$result = $SendMail->SendMail($emailname->email , $subjectemail, $message , $subjectemail );
}

}
}

         $this->view->messageVi = $confiramtion;
        }
       
        $this->view->form = $form;
    }
    	 
    }
   
 
