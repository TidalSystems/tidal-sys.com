<?php







class CL_Plugin_Acl extends Zend_Controller_Plugin_Abstract {







    public function preDispatch(Zend_Controller_Request_Abstract $request) {



        // set up acl



        $acl = new Zend_Acl();



        $controller = $request->getActionName();



        $action = $request->getActionName();



        if ($request->getModuleName() == 'admin') {







            $auth = Zend_Auth::getInstance();



            if ($auth->hasIdentity()) {



                $identity = $auth->getIdentity();



                $role = strtolower($identity->role);



            } else {



                $role = 1;



            }















            $acl->add(new Zend_Acl_Resource($controller, $action));







            $acl->addRole(new Zend_Acl_Role($role));















            if ($role == 6) {



                $acl->allow(6, null);



            }











            if ($role == 1) {



                $request->setModuleName('admin');



                $request->setControllerName('index');



                $request->setActionName('login');



            } elseif ($role != 6) {



                $request->setModuleName('admin');



                $request->setControllerName('index');



                $request->setActionName('logout');



            }



        } else if ($request->getModuleName() == 'default') {



            $auth = Zend_Auth::getInstance();



            if ($auth->hasIdentity()) {



                $identity = $auth->getIdentity();



                $role = strtolower($identity->role);



            } else {



                $role = 1;



            }







            $controller = $request->getControllerName();



            $action = $request->getActionName();











            $acl->add(new Zend_Acl_Resource('index'));



            $acl->add(new Zend_Acl_Resource('files'));



            $acl->add(new Zend_Acl_Resource('page'));

      $acl->add(new Zend_Acl_Resource('page4'));

      $acl->add(new Zend_Acl_Resource('dest_days'));





            $acl->add(new Zend_Acl_Resource('country'));

  $acl->add(new Zend_Acl_Resource('explore'));

$acl->add(new Zend_Acl_Resource('excursionscountry'));

$acl->add(new Zend_Acl_Resource('Blog'));

$acl->add(new Zend_Acl_Resource('client'));

 



$acl->add(new Zend_Acl_Resource('villa'));

$acl->add(new Zend_Acl_Resource('articlesdestinations'));

$acl->add(new Zend_Acl_Resource('result'));





            $acl->add(new Zend_Acl_Resource('error'));

            $acl->add(new Zend_Acl_Resource('product'));

            $acl->add(new Zend_Acl_Resource('requestgroup'));

            $acl->add(new Zend_Acl_Resource('location'));





            $acl->add(new Zend_Acl_Resource('user'));

            $acl->add(new Zend_Acl_Resource('restaurants'));



            $acl->add(new Zend_Acl_Resource('manage'));

         $acl->add(new Zend_Acl_Resource('event'));



            $acl->add(new Zend_Acl_Resource('region'));

            $acl->add(new Zend_Acl_Resource('solution'));

          $acl->add(new Zend_Acl_Resource('xml'));

         $acl->add(new Zend_Acl_Resource('api'));

            $acl->add(new Zend_Acl_Resource('addon'));

            $acl->add(new Zend_Acl_Resource('portal'));



            $acl->add(new Zend_Acl_Resource('category'));



  $acl->add(new Zend_Acl_Resource('send'));



            $acl->add(new Zend_Acl_Resource('clinet'));

   $acl->add(new Zend_Acl_Resource('errorpage'));

 $acl->add(new Zend_Acl_Resource('vacation'));

            $acl->add(new Zend_Acl_Resource('item2'));

            $acl->add(new Zend_Acl_Resource('city'));

            $acl->add(new Zend_Acl_Resource('gallery'));

     $acl->add(new Zend_Acl_Resource('item5'));

            $acl->add(new Zend_Acl_Resource('offer'));

            $acl->add(new Zend_Acl_Resource('deals'));

            $acl->add(new Zend_Acl_Resource('order'));

            $acl->add(new Zend_Acl_Resource('articles-destinations'));







            $acl->add(new Zend_Acl_Resource('request'));



            $acl->add(new Zend_Acl_Resource('destinations'));

            $acl->add(new Zend_Acl_Resource('package'));



            $acl->add(new Zend_Acl_Resource('search'));

            $acl->add(new Zend_Acl_Resource('request2'));

            $acl->add(new Zend_Acl_Resource('requestbydates'));





            $acl->add(new Zend_Acl_Resource('video'));

            $acl->add(new Zend_Acl_Resource('hotelsreservation'));

            $acl->add(new Zend_Acl_Resource('nilecruisereservation'));



            $acl->add(new Zend_Acl_Resource('itemvideo'));



            $acl->add(new Zend_Acl_Resource('cruise'));





            $acl->add(new Zend_Acl_Resource('hotels'));

            $acl->add(new Zend_Acl_Resource('catvideo'));



            $acl->add(new Zend_Acl_Resource('homefooter'));



            $acl->add(new Zend_Acl_Resource('footerimage'));



            $acl->add(new Zend_Acl_Resource('sliderdata'));

            $acl->add(new Zend_Acl_Resource('contactus'));



            $acl->add(new Zend_Acl_Resource('rightcontent'));

            $acl->add(new Zend_Acl_Resource('districts'));



            $acl->add(new Zend_Acl_Resource('coupon'));



           

          $acl->add(new Zend_Acl_Resource('landingpage'));

            $acl->add(new Zend_Acl_Resource('boxs'));

            $acl->add(new Zend_Acl_Resource('view'));



            $acl->add(new Zend_Acl_Resource('homefooter2'));



            $acl->add(new Zend_Acl_Resource('offers'));



            $acl->add(new Zend_Acl_Resource('upload'));

            $acl->add(new Zend_Acl_Resource('confirmation'));

            $acl->add(new Zend_Acl_Resource('agent'));





            $acl->add(new Zend_Acl_Resource('aboutus'));



            $acl->add(new Zend_Acl_Resource('checkout'));



            $acl->add(new Zend_Acl_Resource('SpawEditor'));



            $acl->add(new Zend_Acl_Resource('project'));



            $acl->addRole(new Zend_Acl_Role($role));



















            $acl->allow($role, 'index');



            $acl->allow($role, 'files');

            $acl->allow($role, 'location');

            $acl->allow($role, 'restaurants');



            $acl->allow($role, 'error');



            $acl->allow($role, 'addon');



            $acl->allow($role, 'offer');

            $acl->allow($role, 'view');

            $acl->allow($role, 'agent');





            $acl->allow($role, 'districts');



            $acl->allow($role, 'vacation');

     $acl->allow($role, 'send');

   $acl->allow($role, 'villa');

   $acl->allow($role, 'hotelsreservation');

   $acl->allow($role, 'nilecruisereservation');

   $acl->allow($role, 'errorpage');

   $acl->allow($role, 'event');

   $acl->allow($role, 'solution');

   $acl->allow($role, 'hotels');



            $acl->allow($role, 'result');



            $acl->allow($role, 'upload');

            $acl->allow($role, 'contactus');



            $acl->allow($role, 'SpawEditor');

            $acl->allow($role, 'articlesdestinations');



            $acl->allow($role, 'project');



            $acl->allow($role, 'xml');

            $acl->allow($role, 'api');



            $acl->allow($role, 'destinations');

            $acl->allow($role, 'package');



            $acl->allow($role, 'page');



            $acl->allow($role, 'page4');



            $acl->allow($role, 'user');

            $acl->allow($role, 'manage');



     $acl->allow($role, 'country');

 $acl->allow($role, 'excursionscountry');



 $acl->allow($role, 'Blog');



 $acl->allow($role, 'client');

  

 $acl->allow($role, 'explore');

 $acl->allow($role, 'product');

 $acl->allow($role, 'portal');



            $acl->allow($role, 'category');



            $acl->allow($role, 'clinet');

            $acl->allow($role, 'item2');

            $acl->allow($role, 'city');

            $acl->allow($role, 'gallery');

     $acl->allow($role, 'item5');

     $acl->allow($role, 'deals');

     $acl->allow($role, 'requestbydates');



            $acl->allow($role, 'itemvideo');



            $acl->allow($role, 'request');



            $acl->allow($role, 'search');



            $acl->allow($role, 'video');



            $acl->allow($role, 'aboutus');

            $acl->allow($role, 'confirmation');





            $acl->allow($role, 'checkout');



            $acl->allow($role, 'catvideo');



            $acl->allow($role, 'homefooter');



            $acl->allow($role, 'footerimage');



            $acl->allow($role, 'sliderdata');



            $acl->allow($role, 'rightcontent');



            $acl->allow($role, 'coupon');



            $acl->allow($role, 'boxs');

            $acl->allow($role, 'order');

            $acl->allow($role, 'articles-destinations');

            $acl->allow($role, 'cruise');





            $acl->allow($role, 'request2');

            $acl->allow($role, 'requestgroup');

            $acl->allow($role, 'dest_days');





            $acl->allow($role, 'homefooter2');



            $acl->allow($role, 'offers');



            if ($role == 2) {







                if (!defined('IS_LOGINED')) {



                    $auth = Zend_Auth::getInstance();



                    $loggedIn = (bool) $auth->hasIdentity();



                    define('IS_LOGINED', $loggedIn);



                }



            } else if ($role == 1) {



                



            }



            if (!$acl->isAllowed($role, $controller, $action)) {



                $request->setModuleName('default');



                $request->setControllerName('error');



                $request->setActionName('error');



            }







            if (!defined('IS_LOGINED')) {



                define('IS_LOGINED', false);



            }



        }



    }







}



