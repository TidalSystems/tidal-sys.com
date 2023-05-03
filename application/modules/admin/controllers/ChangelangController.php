<?php
class Admin_changelangController extends Zend_Controller_Action{

    public function init()
    {
         $type = $this->_request->getParam('type');
    }
    public function preDispatch()
    {
            //session and msg
            $this->session = new  Zend_Session_Namespace('Default');
    }
    public function doAction()
    {
        $this->_helper->viewRenderer->setNoRender();
        $this->_helper->layout->disableLayout();
                
        if($this->_request->getParam('lang'))
        {
            $this->session->lang = $this->_request->getParam('lang');
            
            $this->session->msgtext = 'تم تغير اللغه بنجاح';
            $this->session->msgtype = 'success';
            $this->_redirect($this->_request->getParam('lasturl'));
        }
        else
        {
            $this->session->msgtext = 'لقد حدث خطأ اثناء تغير اللغه برجاء المحاوله مره اخري';
            $this->session->msgtype = 'error';
            $this->_redirect($this->_request->getParam('lasturl'));
        }
       
    }


}