 <?php



class RequestController extends Zend_Controller_Action {

	

	public function indexAction()

	{

		$this->_forward('v');

	}

	

    public function vAction()

    {


        $form = new Form_Request();

        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'requests';

        $model = $this->dbmodelClass;


        if($this->_request->isPost() && $form->isValid($_POST)) {   

          $dataForm = $form->getValues(); 

           $result22 = $model->InsertRow($dataForm);
           $SendMail = new Func_SendMail();

           $model = new Model_Option();

           $SiteCon = $model->optionselect('siteConf' , 'en');

           $emailCon = $model->optionselect('mailConf');

           $to = $emailCon['email'];

           $title = 'Request Quotation';

           $dataForm = $form->getValues();

           $message = $this->view->partial(

                        'templates/contactrequest.html',

                        $dataForm

                        );

           $result = $SendMail->SendMail($to, $title, $message);

            if($result)  {

               $this->view->messageVi = 'We have received your Request, Thank you for choosing Mainly Europe Vacations';
$form->reset();


            } }

        else if($this->_request->isPost() && !$form->isValid($_POST))   

        {

            $this->view->messageVi = 'Error All Fildes is Required';

        }

        $this->view->form = $form;


    	 

    }

   

}



