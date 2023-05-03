<?php



class ContactusController extends Zend_Controller_Action {

	

	public function indexAction()

	{

		$this->_forward('v');

	}

	

    public function vAction()

    {
  
  $model = new Model_PlusData();

       $model->_name  = 'contactform';

        $where['id'] = '2';
$datamail = $model->selectForArray($where);

$email1 = $datamail[0]->email1;
$email2 = $datamail[0]->email2;
$subject = $datamail[0]->subject;
$subjectreplay = $datamail[0]->subjectreplay;
$data = $datamail[0]->data;
 
    	 
$form = new Form_Contact();




        if($this->_request->isPost() && $form->isValid($_POST)) {    



            

    		$IdData =$form->getValue("email");
           

           $SendMail = new Func_SendMail();
           $model = new Model_Option();       
           
           $title = $subject;
           $dataForm = $form->getValues();
           $message = $this->view->partial(
                        'templates/contactUs.html',

                        $dataForm );

           $result = $SendMail->SendMail($email1, $subject, $message);
           $result2 = $SendMail->SendMail($email2, $subject, $message);
          

            if($result)     {
               $this->view->messageVi = 'Send Done ';
 $result3 = $SendMail->SendMail($email2, $subjectreplay, $data);
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



