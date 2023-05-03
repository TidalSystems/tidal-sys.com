<?php 

 

class IndexController extends Zend_Controller_Action {

    

    public function indexAction() {

	
     $this->view->pagetype = 'Home';
     $from = new Form_Request();
 
			 

           $modelcscs = new Model_Defaulseo();

           $emailCon = $modelcscs->optionselect('siteConf2' ,  'en');

           $to = $emailCon['email'];
 
      if (isset($_POST['save7']) &&  $from->isValid($_POST)   ) {
            $data = $from->getValues();
   $SendMail = new Func_SendMail();

           $message = $this->view->partial(
                       'templates/request.html',
                        $data  );


$result = $SendMail->SendMail($to ,"Request For Contact", $message , "Request For Contact" );
        $this->view->messageVi = "Thanks for Request ";

}

     $this->view->from = $from;

 






    }



 





 

  public function searchAction()



    {



        $model = new Model_PlusData();



        $model->_name = 'pages_blocks';



        $key = $this->_request->getParam('search');



        if($key)



        {



            $this->view->Data = $model->selectForSearch($key);



        }



    }







}



