<?phpclass Zend_View_Helper_FlashMessenger extends Zend_View_Helper_Abstract{    public function FlashMessenger()     {        $flashMsgHelper = Zend_Controller_Action_HelperBroker::getStaticHelper('FlashMessenger');        $this->view->assign('messages', $flashMsgHelper->getMessages());         return $patrial = $this->view->render('_messages.phtml');    }}