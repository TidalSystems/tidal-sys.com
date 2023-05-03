<?php

class PageController extends Zend_Controller_Action {

    public function init() {
        
    }
    public function vAction()
    {
        //DataReplace
        $id = intval($this->_request->getParam('i' , 1));
        $idl = intval($this->_request->getParam('v'));
      
        $model = new Model_PlusData();
        $model->_name  = 'pages';
        $where = array('id'=>$id);
        $data = $model->selectForArray($where);
        $this->view->Page = $data[0];
        
        $this->view->PageTitle = $data[0]->title;
        
        $modelBlock = new Model_PlusData();
        $modelBlock->_name  = 'pages_blocks';
        $whereBlock = array('pageid'=>$id);
        $limito = $idl;
        $this->view->limiV = $idl;
        $order = array('displayorder'=>'ASC');
        $dataBlock = $modelBlock->selectForArray($whereBlock , $order, $limito);
        $this->view->Blocks = $dataBlock;
        $this->view->id = $id;
        
        $this->view->placeholder('title')->set('');
        
        $form = new Form_Contact();
        if($this->_request->isPost() && $form->isValid($_POST)) {    
           
           $SendMail = new Func_SendMail();
           $model = new Model_Option();
           $SiteCon = $model->optionselect('siteConf' , 'ar');
           $emailCon = $model->optionselect('mailConf');
           
           $to = $emailCon['email'];
           $title = $SiteCon['homepage'];
           $dataForm = $form->getValues();
           $htmlMessage = $this->view->partial(
                        'templates/contactUs.html',
                        $dataForm
                        );
           $result = $SendMail->SendMail($to, $title, $htmlMessage,$SiteCon['homepage']);
            if($result) 
            {
               $this->view->messageVi = 'شكرا لتواصلك معنا';
            }
        }
       
        $this->view->form = $form;
    }
	
	 public function nAction()
    {
        //DataReplace
        $id = intval($this->_request->getParam('i' , 1));
      
        $model = new Model_PlusData();
		$model->_name  = 'data_stor';
		$where = array('type' => 'news1','id'=>$id);
        $data = $model->selectForArray($where);
        $this->view->Page = $data[0];
		
        $this->view->placeholder('title')->set('');
    }
    public function allAction()
    {
        $where = array('type' => 'news1');
                
        $model = new Model_PlusData();
        $model->_name = 'data_stor';
        $adapter = $model->selectForPager($where);
        $paginator = new Zend_Paginator($adapter);
        $paginator->setItemCountPerPage(12);
        $page = $this->_request->getParam('page', 1);
        $paginator->setCurrentPageNumber($page);
        $this->view->paginator = $paginator;
		
        $this->view->placeholder('title')->set('');
    }
	
}

