<?php 
class Admin_OptionController extends Zend_Controller_Action
{
    public function init()
    {
      $this->view->typename = ' Site Option';

    }
    public function preDispatch()
    {
            $this->session = new  Zend_Session_Namespace('Default');
    }
    public function indexAction()
    {
        $form = new Form_Option();
        $model = new Model_Option();
        $confData = $model->optionselect('siteConf' ,$this->view->lang);
        if($this->getRequest()->isPost() && $form->isValid($_POST))
        {
            $formData = $form->getValues();
            $model-> updateoneop('siteConf' , $formData ,$this->view->lang);
            $this->_helper->flashMessenger
                        ->addMessage('success')
                        ->addMessage('Saved success ');
            $this->_redirect('admin/option/');
        }
        if($confData)
        {
            $form->populate($confData);
        }
        $this->view->form = $form ;
    }
    public function mailAction()
    {
         $this->view->typename = 'البريد الإلكتروني';
        $form = new Form_EmailConf();
        $model = new Model_Option();
        $confData = $model->optionselect('mailConf' );
        if($this->getRequest()->isPost() && $form->isValid($_POST))
        {
            $formData = $form->getValues();
            $model-> updateoneop('mailConf' , $formData );
            $this->_helper->flashMessenger
                        ->addMessage('success')
                        ->addMessage('تم حفظ البيانات');
            $this->_redirect('admin/option/mail');
        }
        if($confData)
        {
            $form->populate($confData);
        }
        $this->view->form = $form ;
    }
}