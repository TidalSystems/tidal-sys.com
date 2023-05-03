<?php 
class Admin_Option4Controller extends Zend_Controller_Action
{
    public function init()
    {
      $this->view->typename = 'Departures & Rates Text';

    }
    public function preDispatch()
    {
            $this->session = new  Zend_Session_Namespace('Default');
    }
    public function indexAction()
    {
        $form = new Form_Option4();
        $model = new Model_Option();
        $confData = $model->optionselect('siteConf4' ,$this->view->lang);
        if($this->getRequest()->isPost() && $form->isValid($_POST))
        {
            $formData = $form->getValues();
            $model-> updateoneop('siteConf4' , $formData ,$this->view->lang);
            $this->_helper->flashMessenger
                        ->addMessage('success')
                        ->addMessage('Save success');
            $this->_redirect('admin/option4/');
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