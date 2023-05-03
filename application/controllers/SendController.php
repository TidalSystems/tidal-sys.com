<?php
class SendController extends CL_Curd_BaseContoller {
       public function init() {
    }
	public function indexAction()
	{
       
   	$this->_forward('v');

            $form = new Form_Order();
          if($this->_request->isPost() && $form->isValid($_POST)) {    
           $SendMail = new Func_SendMail();
           $model = new Model_Option();
           $SiteCon = $model->optionselect('siteConf' , 'en');
           $emailCon = $model->optionselect('mailConf');
           
           $to = $emailCon['email'];
           $title = 'Order';
           $dataForm = $form->getValues();
           $message = $this->view->partial(
                        'templates/order.html',
                        $dataForm
                        );
           $result = $SendMail->SendMail($to, $title, $message);
            if($result) 
            {
  $this->view->messageVi = 'We have received your Tour, Thank you for choosing Your Tour ';
$form->reset();
            }
        }
        else if($this->_request->isPost() && !$form->isValid($_POST))   
        {
          
            $this->view->messageVi = 'Error All Fildes is Required';
        }
       
        $this->view->form = $form;
    }
     
 
    public function vAction()
    {

$id = 2 ;
  $model = new Model_PlusData();

        $model->_name  = 'emails';

        $where = array();
        if($id) $where['id'] =$id;
    

$data = $model->selectForArray($where);
$clientemailsubject  = $data[0]->clientemailsubject;
$clientemail = $data[0]->clientemail;
$adminemail = $data[0]->adminemail;
$emailsubject = $data[0]->emailsubject;
$ccemails = $data[0]->emailids;
 

           $form = new Form_Order();
           $model22 = new Model_Order1010();
           if($this->_request->isPost() && $form->isValid($_POST)) {    
           $SendMail = new Func_SendMail();
           
 
           $dataForm = $form->getValues();
           $res2 = $model22->InsertRow(array_filter($dataForm));

           $message = $this->view->partial(
                        'templates/order.html',
                        $dataForm
                        );

$clientemailss = $dataForm['email'];
$idx = $dataForm['representative'];

$modelx = new Model_PlusData();
       $modelx->_name  = 'users';
        $wherex = array();
        if($idx) $wherex['id'] =$idx;
    

$datax = $modelx->selectForArray($wherex);
$emailrepresentitve  = $datax[0]->email;


           $result = $SendMail->SendMail($emailrepresentitve, $emailsubject, $message , $emailsubject );

 $images = explode('||',trim($ccemails,'|'));
            foreach($images as $index=>$photo){
if(trim($ccemails)){
$result2 = $SendMail->SendMail($photo , $emailsubject, $message , $emailsubject );
}
}
 
 $result4 = $SendMail->SendMail($clientemailss, $clientemailsubject, $clientemail , $clientemailsubject );


            if($result) 
            {
  $this->view->messageVi = 'WE HAVE RECEIVED YOUR ORDER, WE WILL CONTACT YOU SOON.';
$form->reset();
            }
        }
        else if($this->_request->isPost() && !$form->isValid($_POST))   
        { 
          
            $this->view->messageVi = 'Error All Fildes is Required';
        }
       
        $this->view->form = $form;
        
    }
}

