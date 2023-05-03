<?php 
class Admin_Option3Controller extends Zend_Controller_Action
{
    public function init()
    {
      $this->view->typename = 'Notes & Delivery Time';

    }
    public function preDispatch()
    {
            $this->session = new  Zend_Session_Namespace('Default');
    }
    public function indexAction()
    {
        $form = new Form_Option3();
        $model = new Model_Option();
        $confData = $model->optionselect('siteConf3' ,$this->view->lang);
        if($this->getRequest()->isPost() && $form->isValid($_POST))
        {
            $formData = $form->getValues();
            $model-> updateoneop('siteConf3' , $formData ,$this->view->lang);
            $this->_helper->flashMessenger
                        ->addMessage('success')
                        ->addMessage('Save success');
            $this->_redirect('admin/option3/');
        }
        if($confData)
        {
            $form->populate($confData);
        }
        $this->view->form = $form ;
    }
    public function mailAction()
    {
         $this->view->typename = ' Admin Email';
        $form = new Form_EmailConf();
        $model = new Model_Option();
        $confData = $model->optionselect('mailConf' );
        if($this->getRequest()->isPost() && $form->isValid($_POST))
        {
            $formData = $form->getValues();
            $model-> updateoneop('mailConf' , $formData );
            $this->_helper->flashMessenger
                        ->addMessage('success')
                        ->addMessage('Save success');
            $this->_redirect('admin/option/mail');
        }
        if($confData)
        {
            $form->populate($confData);
        }
        $this->view->form = $form ;
    }




 
}