<?php
class CL_Plugin_Style extends Zend_Controller_Plugin_Abstract
{
    public function dispatchLoopStartup(Zend_Controller_Request_Abstract $request)
    {

        $frontController = Zend_Controller_Front::getInstance();
        $view = $frontController->getParam('bootstrap')->getResource('view');
        
        if($request->getModuleName() == 'admin')
        {
            $session = new  Zend_Session_Namespace('Default');
            $themes = 'admin';
            $auth = Zend_Auth::getInstance();
            if($auth->hasIdentity())
            {
                $identity = $auth->getIdentity();
                $role = strtolower($identity->role);

            }
            else
            {
            	$role = 1;
            }

            if ($role != 6)
            {
                
                $layout = 'login';
	$session->lang ='en';
            }
            else
            {
                $layout = 'layout';
            }
            $options = array(
              'layout'     => $layout,
              'layoutPath' => PUBLIC_PATH.'/themes/'.$themes.'/',
              'contentKey' => 'content');
            $layout = new Zend_Layout($options);
            $layout = Zend_Layout::startMvc($options);
            $view->themeUrl = $view->baseUrl().'/themes/admin/';
			$session->lang = ($session->lang)? $session->lang:'en';
            $view->lang = $session->lang;
                define('LANG',$view->lang);
        }
        else 
        {
                $langMy = ($request->getParam('language'))? $request->getParam('language'):'en';

$langMyar = 'en';
                $model = new Model_Defaulseo();
                $modelfooter = new Model_Footer();
                $modelMessages = new Model_Messages();
                $modelPage404 = new Model_Page404();
                $key = $model->optionselect('siteConf', $langMy);
                $key2 = $model->optionselect('siteConf2', $langMy);
                $key3 = $modelfooter->optionselect('siteConffooter', $langMy);
 $key3ar = $modelfooter->optionselect('siteConffooter', $langMyar);
                $key8 = $modelMessages->optionselect('siteConfMessages', $langMy);
                $key7 = $modelPage404->optionselect('siteConf2', $langMy);
 
$key4 = $model->optionselect('siteConf4', $langMy);

                $offer = $model->optionselect('offerConf', $langMy);
                $theme =  isset($key['theme'])?$key['theme']:'';
                if (!$theme)
                {
                     $theme = $langMy;
                }
				$themes =  $theme;
				$options = array(
					  'layout'     => 'layout',
					  'layoutPath' => PUBLIC_PATH.'/themes/'.$themes.'/',
					  'contentKey' => 'content' );
                if(isset($key['siteonof']) && $key['siteonof'] == 1)
                {
                    $options ='';
                    $options = array(
					  'layout'     => 'siteoff',
					  'layoutPath' => PUBLIC_PATH.'/themes/'.$themes.'/',
					  'contentKey' => 'content' );
                }
                $layout = new Zend_Layout($options);
                $layout = Zend_Layout::startMvc($options);
                
                $path = PUBLIC_PATH.'/themes/'.$theme;

                $view->setBasePath($path);
                $view->setScriptPath($path);
                $view->siteData = $key;
 $view->siteDataSEO = $key2;
$view->siteDatafooetr = $key3;
      $view->siteDatafooetrar = $key3ar;
$view->siteData4 = $key4;
$view->Page404 = $key7; 
$view->Messages = $key8; 
                $view->offerData = $offer;
                $router = $frontController->getRouter();
                $view->lang = ($request->getParam('language'))? $request->getParam('language'):'en';
 if($view->lang == 'ar'){ 
$view->lang = 'en';
         define('THEME_DIR',$view->baseUrl().'/themes/ar/');
}
elseif($view->lang == 'fr'){ 
$view->lang = 'en';
         define('THEME_DIR',$view->baseUrl().'/themes/fr/');
}
else{
  define('THEME_DIR',$view->baseUrl().'/themes/'.$view->lang.'/');
}


                
                define('LANG',$view->lang);
                define('LANG_URL', $view->baseUrl().'/'.($view->lang!='en'?$view->lang.'/': ''));
                define('LANG_URL2', $view->baseUrl().'/'.($view->lang!='wwww'?$view->lang : ''));
                define('LANG_DIR', ($view->lang == 'ar')?'ltr':'ltr');
              
            }
            define('APP_BASEURL', $view->baseUrl());
            return $view;
    }
}
