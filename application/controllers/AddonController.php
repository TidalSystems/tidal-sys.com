<?php



class AddonController extends Zend_Controller_Action {



    public function init() {

        

    }

    public function topmenuAction()

    {

        $model = new Model_PlusData();

        $model->_name = 'pages';

        $where = array();

        $order = array('displayorder'=>'asc');

        $limit = 5;

        $PagesData = $model->selectForArray($where, $order, $limit);

        $this->view->item = $PagesData;

        

        $model->_name = 'cat';

        $order = array('displayorder'=>'asc');

        $TirData = $model->selectForArray(null , $order);

        $this->view->cats = $TirData;

    }

    public function menupAction()

    {

        

    }

    public function sitemapAction()

    {

        $model = new Model_PlusData();

        $model->_name = 'pages';

        $where = array();

        $order = array('displayorder'=>'asc');

        $limit = 5;

        $PagesData = $model->selectForArray($where, $order, $limit);

        $this->view->item = $PagesData;

        

        $model->_name = 'cat';

        $order = array('displayorder'=>'asc');

        $TirData = $model->selectForArray(null , $order);

        $this->view->cats = $TirData;

    }

	public function maillistAction()

    {

    	$is_ajax=isset($_GET['is_ajax']);

        $form = new Form_Maillist();

        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'maillist';

        $model = $this->dbmodelClass;

        if ($this->getRequest()->isPost() && $form->isValid($_POST)) {

            $data = $form->getValues();
            $data['created_on'] = date('Y-m-d H:i:s');
            $authAdapter = $data['email'] ;
            $data22 ='sssssssss';
            $res = $model->InsertRow($data);
            $this->_redirect('mainlyeurope/Register?email=' . $data['name'] . ' ');

            if ($res) {

            	if($is_ajax)

            	{

            		echo json_encode(array('success'=>TRUE,'message'=>(constant('LANG')=='ar'?'<h3 style="color: #fff;margin-top: 7px;">Thanks </h3>':'<h3 style="color: #fff;margin-top: 7px;">Thanks </h3>')));

            		exit;

            	}

            	else 

            	{

	               $this->_helper->flashMessenger

	                        ->addMessage('success')

	                        ->addMessage(constant('LANG')=='ar'?'Thanks ':'Thanks ');

	                $this->_redirect($this->view->lang.'/index/index');

            	}

            } else {

            	if($is_ajax)

            	{

            		echo json_encode(array('success'=>FALSE,'error'=>(constant('LANG')=='en'?'All fields are required ':'All fields are required')));

            		exit;

            	}

            	else

            	{

	                $this->_helper->flashMessenger

	                        ->addMessage('error')

	                        ->addMessage(constant('LANG')=='en'?'All fields are required':'All fields are required');

	                $this->_redirect($this->view->lang.'/index/index');

            	}

            }

        } elseif ($this->getRequest()->isPost() && !$form->isValid($_POST)) {

        	if($is_ajax)

        	{

        		$error = array();

        		foreach($form->getElements() as $title => $element)

        		{

        			if($form->getErrors($title))

        				$error[$title] = $form->getMessages($title);

        		}

        		$data = array(

        				'success' => FALSE,

        				'error' => $error

        			);

        		echo json_encode(array('success'=>FALSE,'error'=>$error));

        		exit;

        	}

        	else

        	{

	            $this->_helper->flashMessenger

	                        ->addMessage('error')

	                        ->addMessage(constant('LANG')=='ar'?'All fields are required':'All fields are required');

	            $this->_redirect($this->view->lang.'/index/index');

        	}

        }

        elseif($is_ajax)

        	{

        		echo json_encode(array('success'=>FALSE,'error'=>(constant('LANG')=='ar'?'All fields are required':'All fields are required')));

        		exit;

        	}

        $this->view->form = $form;

    }





public function doAction()

    {

    	$error = '';

        $this->_helper->viewRenderer->setNoRender();

        $validMail = new Zend_Validate_EmailAddress();

        

        

        

        if(!$_POST['email'])

        {

            $error .= (constant('LANG')=='ar'?'املأ البريد الإلكتروني':'Email field is required.').'<br />';

        }

        elseif (!$validMail->isValid($_POST['email'])) {

            $error .= (constant('LANG')=='ar'?'البريد الإلكتروني غير سليم':'Invalid Email.').'<br />';

        }

        	

        

        $is_ajax=isset($_GET['is_ajax']);

        

        $id = $this->_request->getParam('i');

        if($id=='contact')

        {

        	if(!$_POST['service'])

        		$error .= (constant('LANG')=='ar'?'اختر الخدمة':'Service field is required.').'<br />';

        	

        	

        	if(!$_POST['full_name'])

        		$error .= (constant('LANG')=='ar'?'املأ الإسم':'Name field is required.').'<br />';

        	

        	

        	if(!$_POST['mobile'])

        		$error .= (constant('LANG')=='ar'?'املأ رقم الجوال':'Mobile field is required.').'<br />';

        }

        elseif($id=='apply')

        {

        	if(!$_POST['full_name'])

        		$error .= (constant('LANG')=='ar'?'املأ الإسم':'Name field is required.').'<br />';

        	

        	

        	if(!$_POST['message'])

        		$error .= (constant('LANG')=='ar'?'أدخل الرسالة':'Message field is required').'<br />';

        }

        

        

        if(!$error)

        {

           $SendMail = new Func_SendMail();

           $model = new Model_Option();

           $SiteCon = $model->optionselect('siteConf' , 'en');

           $emailCon = $model->optionselect('mailConf');

           

           $to = $emailCon['email'];

           $title = 'Email From-'.$SiteCon['homepage'].'-'.$_POST['paget'];

           

           $pageform = array(

            'def' =>'page',

            'apply' =>'apply',

            'contact' =>'contact',

            'register' =>'register'

            );

           

            if(array_key_exists($id , $pageform))

            {        

                $message =  $this->view->partial('template/mail/'.$pageform[$id].'.phtml' , $_POST);

            }

            else

            {

                $message =  $this->view->partial('template/mail/'.$pageform['def'].'.phtml' , $_POST);

            }

           

           $res = $SendMail->SendMail($to, $title, $message);

           if($res){

           		if($is_ajax)

            	{

            		echo json_encode(array('success'=>TRUE,'message'=>(constant('LANG')=='ar'?'تم الإرسال بنجاح':'We received your contact, and will reply soon.')));

            		exit;

            	}

           		else

           		{

	                $this->_helper->flashMessenger

	                        ->addMessage('success')

	                        ->addMessage(constant('LANG')=='ar'?'تم الإرسال بنجاح':'We received your contact, and will reply soon.');

	                $this->_redirect($_SERVER['HTTP_REFERER']);

           		}

           }

           elseif($is_ajax)

        	{

        		echo json_encode(array('success'=>FALSE,'error'=>$error));

        		exit;

        	}

           

        }

        else

        {

        	if($is_ajax)

        	{

        		echo json_encode(array('success'=>FALSE,'error'=>($error?$error:(constant('LANG')=='ar'?'جميع الحقول مطلوبة':'All fields are required'))));

        		exit;

        	}

        	else

        	{

            	$this->_helper->flashMessenger

                        ->addMessage('error')

                        ->addMessage(constant('LANG')=='ar'?'جميع الحقول مطلوبة':'All fields are required');

                $this->_redirect($_SERVER['HTTP_REFERER']);

        	}

        }

    }

   

}



