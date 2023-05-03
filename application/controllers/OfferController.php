<?php



class OfferController extends Zend_Controller_Action {

	

	public function indexAction()

	{

		$this->_forward('v');

	}

	

    public function vAction()

    {

    	 
$form = new Form_Contact();



        if($this->_request->isPost() && $form->isValid($_POST)) {    



           



           $SendMail = new Func_SendMail();



           $model = new Model_Option();



           $SiteCon = $model->optionselect('siteConf' , 'en');



           $emailCon = $model->optionselect('mailConf');



           



           $to = $emailCon['email'];



           $title = 'Email From-'.$SiteCon['homepage'];



           $dataForm = $form->getValues();



           $message = $this->view->partial(



                        'templates/contactUs.html',



                        $dataForm



                        );



           $result = $SendMail->SendMail($to, $title, $message);



            if($result) 



            {



               $this->view->messageVi = 'Send Done ';



            }



        }



        else if($this->_request->isPost() && !$form->isValid($_POST))   



        {



          



            $this->view->messageVi = 'Error All Fildes is Required';



        }



       



        $this->view->form = $form;



    }



}



