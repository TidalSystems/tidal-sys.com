<?php
/*
This PHP class is free software: you can redistribute it and/or modify
the code under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version. 

However, the license header, copyright and author credits 
must not be modified in any form and always be displayed.

This class is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

@author geoPlugin (gp_support@geoplugin.com)
@copyright Copyright geoPlugin (gp_support@geoplugin.com)
$version 1.2


This PHP class uses the PHP Webservice of http://www.geoplugin.com/ to geolocate IP addresses

Geographical location of the IP address (visitor) and locate currency (symbol, code and exchange rate) are returned.

See http://www.geoplugin.com/webservices/php for more specific details of this free service

*/

class geoPlugin {
	
	//the geoPlugin server
	var $host = 'http://www.geoplugin.net/php.gp?ip={IP}&base_currency={CURRENCY}&lang={LANG}';
		
	//the default base currency
	var $currency = 'USD';
	
	//the default language
	var $lang = 'en';
/*
supported languages:
de
en
es
fr
ja
pt-BR
ru
zh-CN
*/

	//initiate the geoPlugin vars
	var $ip = null;
	var $city = null;
	var $region = null;
	var $regionCode = null;
	var $regionName = null;
	var $dmaCode = null;
	var $countryCode = null;
	var $countryName = null;
	var $inEU = null;
	var $euVATrate = false;
	var $continentCode = null;
	var $continentName = null;
	var $latitude = null;
	var $longitude = null;
	var $locationAccuracyRadius = null;
	var $timezone = null;
	var $currencyCode = null;
	var $currencySymbol = null;
	var $currencyConverter = null;
	
	function __construct() {

	}
	
	function locate($ip = null) {
		
		global $_SERVER;
		
		if ( is_null( $ip ) ) {
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		
		$host = str_replace( '{IP}', $ip, $this->host );
		$host = str_replace( '{CURRENCY}', $this->currency, $host );
		$host = str_replace( '{LANG}', $this->lang, $host );
		
		$data = array();
		
		$response = $this->fetch($host);
		
		$data = unserialize($response);
		
		//set the geoPlugin vars
		$this->ip = $ip;
		$this->city = $data['geoplugin_city'];
		$this->region = $data['geoplugin_region'];
		$this->regionCode = $data['geoplugin_regionCode'];
		$this->regionName = $data['geoplugin_regionName'];
		$this->dmaCode = $data['geoplugin_dmaCode'];
		$this->countryCode = $data['geoplugin_countryCode'];
		$this->countryName = $data['geoplugin_countryName'];
		$this->inEU = $data['geoplugin_inEU'];
 
		$this->continentCode = $data['geoplugin_continentCode'];
		$this->continentName = $data['geoplugin_continentName'];
		$this->latitude = $data['geoplugin_latitude'];
		$this->longitude = $data['geoplugin_longitude'];
		$this->locationAccuracyRadius = $data['geoplugin_locationAccuracyRadius'];
		$this->timezone = $data['geoplugin_timezone'];
		$this->currencyCode = $data['geoplugin_currencyCode'];
		$this->currencySymbol = $data['geoplugin_currencySymbol'];
		$this->currencyConverter = $data['geoplugin_currencyConverter'];
		
	}
	
	function fetch($host) {

		if ( function_exists('curl_init') ) {
						
			//use cURL to fetch data
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $host);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_USERAGENT, 'geoPlugin PHP Class v1.1');
			$response = curl_exec($ch);
			curl_close ($ch);
			
		} else if ( ini_get('allow_url_fopen') ) {
			
			//fall back to fopen()
			$response = file_get_contents($host, 'r');
			
		} else {

			trigger_error ('geoPlugin class Error: Cannot retrieve data. Either compile PHP with cURL support or enable allow_url_fopen in php.ini ', E_USER_ERROR);
			return;
		
		}
		
		return $response;
	}
	
	function convert($amount, $float=2, $symbol=true) {
		
		//easily convert amounts to geolocated currency.
		if ( !is_numeric($this->currencyConverter) || $this->currencyConverter == 0 ) {
			trigger_error('geoPlugin class Notice: currencyConverter has no value.', E_USER_NOTICE);
			return $amount;
		}
		if ( !is_numeric($amount) ) {
			trigger_error ('geoPlugin class Warning: The amount passed to geoPlugin::convert is not numeric.', E_USER_WARNING);
			return $amount;
		}
		if ( $symbol === true ) {
			return $this->currencySymbol . round( ($amount * $this->currencyConverter), $float );
		} else {
			return round( ($amount * $this->currencyConverter), $float );
		}
	}
	
	function nearby($radius=10, $limit=null) {

		if ( !is_numeric($this->latitude) || !is_numeric($this->longitude) ) {
			trigger_error ('geoPlugin class Warning: Incorrect latitude or longitude values.', E_USER_NOTICE);
			return array( array() );
		}
		
		$host = "http://www.geoplugin.net/extras/nearby.gp?lat=" . $this->latitude . "&long=" . $this->longitude . "&radius={$radius}";
		
		if ( is_numeric($limit) )
			$host .= "&limit={$limit}";
			
		return unserialize( $this->fetch($host) );

	}

	
}

 
class Admin_IndexController extends Zend_Controller_Action {


    public function init() {
        
    }


    public function indexAction() {
 
        
    }


    public function testAction() {
        
    }


    public function adminAction() {
        $this->view->typename = 'Administrator';
        $userForm = new Form_Admin();
        $userModel = new Model_admin();
        $userForm->getElement('password')->setRequired(false);


        $password = clone $userForm->getElement('password');
        $password->addValidator(new CL_Validate_IdenticalField('password', 'Password'))
                ->setLabel('Re-enter Password :- ')
                ->setName('password_again');
        $userForm->removeElement('submit');
        $userForm->loadSubmit();
        $userForm->addElement($password);
        $id = 1;
        $currentUser = $userModel->find($id)->current();
        if ($currentUser) {
            $userResult = $currentUser->toArray();
        } if ($this->getRequest()->isPost() && $userForm->isValid($_POST)) {
            $userModel->edit($id, $userForm->getValues(), $imagemedia);
            $userForm->reset();
            $this->_helper->flashMessenger->addMessage('success')->addMessage('Save Done');
            $this->_redirect('admin/index/admin');
        } elseif ($this->getRequest()->isPost() && !$userForm->isValid($_POST)) {
            
        } if ($currentUser) {
            $userForm->populate($userResult);
        } else {
            
        } $this->view->form = $userForm;
    }


 


   public function loginAction() {
 
$geoplugin = new geoPlugin();
$geoplugin->locate();
 
$this->view->ip = $geoplugin->ip ;
$this->view->region = $geoplugin->countryName ;
$this->view->city = $geoplugin->city ;

 
 

 $model2 = new Model_Messages();
           $SiteCon3 = $model2->optionselect('siteConfMessage' , 'en');

 
    $location =$SiteCon3['location'] ;
    $inactive =$SiteCon3['inactive'] ;
    $notexisting =$SiteCon3['notexisting'] ;
    $passwordwrong =$SiteCon3['passwordwrong'] ;
     $close =$SiteCon3['close'] ;
$ip = $geoplugin->ip ; 
 
       $userForm = new Form_Admin();
 
        if ($this->_request->isPost() && $userForm->isValid($_POST)) {

            $data = $userForm->getValues();

            $db = Zend_Db_Table::getDefaultAdapter();

            $authAdapter = new Zend_Auth_Adapter_DbTable($db, 'users', 'username', 'password' , 'inactive');

            $authAdapter->setIdentity($data['username']);

            $authAdapter->setCredential(($data['password']));

            $result = $authAdapter->authenticate();

            if ($result->isValid()) {
                $auth = Zend_Auth::getInstance();
                $storage = $auth->getStorage();
                $storage->write($authAdapter->getResultRowObject(array('id', 'username', 'role' , 'inactive' )));
                $userInfo = Zend_Auth::getInstance()->getStorage()->read();


if($userInfo->username != 'ebb' ) {

           if($userInfo->inactive == '1'  ){
           $authAdapter = Zend_Auth::getInstance();
           $authAdapter->clearIdentity();
           $this->_helper->flashMessenger->addMessage('error')->addMessage($inactive );
           $this->_redirect('admin/index');
            }

          elseif($userInfo->inactive == '0' ){
                             
                 $this->_redirect('admin/index');
              }

          
}

   

 elseif($userInfo->username == 'ebb' ) {
 
        $this->_redirect('admin/index');
 }

 } else {
        $this->dbmodelClass22 = new Model_PlusData();
        $this->dbmodelClass22->_name = 'users';
        $model22 = $this->dbmodelClass22;
        $allusers =  array();
        $toppages = $model22->selectForArray(array(  ), array('displayorder' => 'ASC') ); foreach($toppages as $toppage){
        $allusers [] = $toppage->username;  }

if(in_array($data['username'], $allusers )  ){
$this->_helper->flashMessenger->addMessage('error')->addMessage( $passwordwrong );
 $this->_redirect('admin/index/login');
}
else{
                $this->_helper->flashMessenger->addMessage('error')->addMessage( $notexisting );
                $this->_redirect('admin/index/login');
}
            }

        } $this->view->form = $userForm;

    }







 




    public function logoutAction() {
        $authAdapter = Zend_Auth::getInstance();
        $authAdapter->clearIdentity();
        $this->_redirect('admin/index/login');
    }


    public function reportAction() {
        $modelLevel = new Model_Levels();
        $this->view->reportData = $modelLevel->allInOne();
    }


    public function userReportAction() {
        $level = $this->_request->getParam('l');
        $type = $this->_request->getParam('t');
    }


}
