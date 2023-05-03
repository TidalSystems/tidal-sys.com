 <?php



class HotelsreservationController extends Zend_Controller_Action {

	

	public function indexAction()

	{

		$this->_forward('v');

	}

	

    public function vAction()

    {


        $form = new Form_Hotelsreservation();

        if($this->_request->isPost() && $form->isValid($_POST)) {    


           $SendMail = new Func_SendMail();

           $model = new Model_Option();

           $SiteCon = $model->optionselect('siteConf' , 'en');

           $emailCon = $model->optionselect('mailConf');

           $to = $emailCon['email'];

           $title = 'Hotels Reservation';

           $dataForm = $form->getValues();

           $message = $this->view->partial(

                        'templates/contacthotel.html',

                        $dataForm

                        );

           $result = $SendMail->SendMail($to, $title, $message);

            if($result)  {

               $this->view->messageVi = 'We have received your Reservation, Thank you for choosing Your Tour';
$form->reset();


            } }

        else if($this->_request->isPost() && !$form->isValid($_POST))   

        {

            $this->view->messageVi = 'Error All Fildes is Required';

        }

        $this->view->form = $form;


    	 

    }

   

}



