<?php

class Func_Lang  {
    public static function getLang()
    {
        $session = new  Zend_Session_Namespace('Default');
        $request = Zend_Controller_Front::getInstance()->getRequest();
        $frontController = Zend_Controller_Front::getInstance();
        $view = $frontController->getParam('bootstrap')->getResource('view');
        if($request->getModuleName() == 'admin')
        {
            return ($session->lang)? $session->lang:'ar';
        }
        else if($request->getModuleName() == 'default')
        {
           
            return ($view->lang)?$view->lang:'en';
        }
    }
}