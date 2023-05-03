<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap

{


 


	protected function _initView()

	{

            $view = new Zend_View();

			$view->doctype('XHTML1_STRICT');

			$view->headTitle();

			// Add it to the ViewRenderer

			$viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper(

			'ViewRenderer'

			);

			$viewRenderer->setView($view);






			return $view;

	}




protected function _initRouter() {

     $front = Zend_Controller_Front::getInstance ();

    




     $routers = $front->getRouter ();

     




 $router = $front->getRouter ();

     $router->addRoute(

                       'location',

                        new Zend_Controller_Router_Route(

                        '/all/location', 

                         array(

                                 

                               'controller' => 'location', 

                                'action' => 'v'

                                

                             )

                       )

                       );


$routers->addRoute(

                       'testimonials',

                        new Zend_Controller_Router_Route(

                        'add/testimonials', 

                        array(

                               

                              'controller' => 'testimonials', 

                              'action' => 'v',

                               

                              )

                        )

                       );




$routers->addRoute(

                       'errorpage',

                        new Zend_Controller_Router_Route(

                        '/error/page404/', 

                        array(
                              'controller' => 'errorpage', 

                              'action' => 'index',

                              )

                        )

                       );


 
     $router->addRoute(
                       'send',
                        new Zend_Controller_Router_Route(
                        '/send/index', 

                         array(
                               'controller' => 'send', 
                               'action' => 'v',
                             )

                       )

                       );




$routers->addRoute(

                       'country',

                        new Zend_Controller_Router_Route(

                        '/europe-vacations/:permalink2777', 

                        array(

                               

                              'controller' => 'country', 

                              'action' => 'v',

                               

                              )

                        )

                       );








$routers->addRoute(

                       'blog',

                        new Zend_Controller_Router_Route(

                        '/blogs/:permalinblog', 

                        array(

                               

                              'controller' => 'blog', 

                              'action' => 'v',

                               

                              )

                        )

                       );














$routers->addRoute(

                       'city',

                        new Zend_Controller_Router_Route(

                        '/city/:permcity', 

                        array(

                               

                              'controller' => 'city', 

                              'action' => 'v',

                               

                              )

                        )

                       );








$routers->addRoute(

                       'explore',

                        new Zend_Controller_Router_Route(

                        '/explore/:permalink27778877', 

                        array(

                               

                              'controller' => 'explore', 

                              'action' => 'v',

                               

                              )

                        )

                       );








$routers->addRoute(

                       'magazine',

                        new Zend_Controller_Router_Route(

                        '/Magazine/:permalinmagazine', 

                        array(

                               

                              'controller' => 'magazine', 

                              'action' => 'v',

                               

                              )

                        )

                       );




$routers->addRoute(

                       'Blog',

                        new Zend_Controller_Router_Route(

                        '/Blog/:permalinblog', 

                        array(

                               

                              'controller' => 'Blog', 

                              'action' => 'v',

                               

                              )

                        )

                       );





$routers->addRoute(
                       'client',
                        new Zend_Controller_Router_Route(
                        '/client/:permcat999c', 

                        array(
                              'controller' => 'client', 

                              'action' => 'v',
                              )
                        )

                       );


$routers->addRoute(
                       'solution',
                        new Zend_Controller_Router_Route(
                        '/solution/:permcat999', 

                        array(
                              'controller' => 'solution', 

                              'action' => 'v',
                              )
                        )

                       );



    




$routers->addRoute(

                       'blogmonthly',

                        new Zend_Controller_Router_Route(

                        '/Blogs/month/', 

                        array(
                              'controller' => 'blogmonthly', 

                              'action' => 'v',

                              )

                        )

                       );





$routers->addRoute(

                       'traveltips',

                        new Zend_Controller_Router_Route(

                        '/Travel-Tips/:permalinarticel2ddtt', 

                        array(
                              'controller' => 'traveltips', 

                              'action' => 'v',

                              )

                        )

                       );




$routers->addRoute(

                       'Lp',

                        new Zend_Controller_Router_Route(

                        '/landingpage/:permalinarticelang', 

                        array(
                              'controller' => 'Lp', 

                              'action' => 'v',

                              )

                        )

                       );


$routers->addRoute(

                       'article',

                        new Zend_Controller_Router_Route(

                        '/article/:permalinarticeevent', 

                        array(
                              'controller' => 'article', 

                              'action' => 'v',

                              )

                        )

                       );





$routers->addRoute(

                       'news',

                        new Zend_Controller_Router_Route(

                        '/news/:permalinarticenews', 

                        array(
                              'controller' => 'news', 

                              'action' => 'v',

                              )

                        )

                       );


$routers->addRoute(

                       'newsletters',

                        new Zend_Controller_Router_Route(

                        '/newsroom/news-letters', 

                        array(
                              'controller' => 'newsletters', 

                              'action' => 'v',

                              )

                        )

                       );


$routers->addRoute(

                       'xml',

                        new Zend_Controller_Router_Route(

                        '/xml/api/', 

                        array(
                              'controller' => 'xml', 

                              'action' => 'index',

                              )

                        )

                       );

$routers->addRoute(

                       'mediacoverage',

                        new Zend_Controller_Router_Route(

                        '/newsroom/media_coverage', 

                        array(
                              'controller' => 'mediacoverage', 

                              'action' => 'v',

                              )

                        )

                       );




$routers->addRoute(

                       'infographics',

                        new Zend_Controller_Router_Route(

                        '/newsroom/infographics', 

                        array(
                              'controller' => 'infographics', 

                              'action' => 'v',

                              )

                        )

                       );




$routers->addRoute(

                       'agent',

                        new Zend_Controller_Router_Route(

                        '/agent', 

                        array(
                              'controller' => 'agent', 

                              'action' => 'v',

                              )

                        )

                       );





$routers->addRoute(

                       'videos',

                        new Zend_Controller_Router_Route(

                        '/newsroom/videos', 

                        array(
                              'controller' => 'videos', 

                              'action' => 'v',

                              )

                        )

                       );




$routers->addRoute(

                       'pressreleases',

                        new Zend_Controller_Router_Route(

                        '/newsroom/press-releases', 

                        array(
                              'controller' => 'pressreleases', 
                              'action' => 'v',

                              )

                        )

                       );


$routers->addRoute(

                       'pressreleasesinternal',

                        new Zend_Controller_Router_Route(

                        '/newsroom/press-releases/:permalinarticel2press', 

                        array(
                              'controller' => 'pressreleasesinternal', 

                              'action' => 'v',

                              )

                        )

                       );





$routers->addRoute(

                       'items2',

                        new Zend_Controller_Router_Route(

                        '/hotels/:permalink277', 

                        array(

                               

                              'controller' => 'item2', 

                              'action' => 'v',

                               

                              )

                        )

                       );



  
$routers->addRoute(

                       'items3',

                        new Zend_Controller_Router_Route(

                        '/excursions/:permalink27788', 

                        array(

                               

                              'controller' => 'item3', 

                              'action' => 'v',

                               

                              )

                        )

                       );





$routers->addRoute(

                       'items5',

                        new Zend_Controller_Router_Route(

                        '/transfer/:permalink27788ff', 

                        array(

                               

                              'controller' => 'item5', 

                              'action' => 'v',

                               

                              )

                        )

                       );




$routers->addRoute(

                       'deposit',

                        new Zend_Controller_Router_Route(

                        '/deposit/:permalink778877', 

                        array(

                               

                              'controller' => 'deposit', 

                              'action' => 'v',

                               

                              )

                        )

                       );

$routers->addRoute(

                       'items',

                        new Zend_Controller_Router_Route(

                        '/vacations/:permalink2', 

                        array(

                               

                              'controller' => 'item', 

                              'action' => 'v',

                               

                              )

                        )

                       );




 $routers->addRoute(

                       'restaurants',

                        new Zend_Controller_Router_Route(

                        '/restaurant/:permalink88p4', 

                        array(

                               

                              'controller' => 'restaurants', 

                              'action' => 'v',

                               
                              )

                        )

                              );






 $routers->addRoute(

                       'destinations',

                        new Zend_Controller_Router_Route(

                        '/Destinations/:permalink88p4d42', 

                        array(

                               

                              'controller' => 'destinations', 

                              'action' => 'v',

                               

                              )

                        )

                       );
					   

					   

 $routers->addRoute(

                       'package',

                        new Zend_Controller_Router_Route(

                        '/Destinations/:permalinkpackage2/:permalinkpackage3', 

                        array(

                               

                              'controller' => 'package', 

                              'action' => 'v',

                               

                              )

                        )

                       );


				   
  

  


 $routers->addRoute(

                       'villa',

                        new Zend_Controller_Router_Route(

                        '/Villa-Rentals/:permalinkpackage1v/:permalinkpackage2v', 

                        array(

                               

                              'controller' => 'villa', 

                              'action' => 'v',

                               

                              )

                        )

                       );
					   

					   $routers->addRoute(

                       'page',

                        new Zend_Controller_Router_Route(

                        ':permalink88', 
                        array(
                              'controller' => 'page', 

                              'action' => 'v',
                               

                              )

                        )

                       );








                     }




	protected function _initAutoload()

	{

		// Add autoloader empty namespace

		$autoLoader = Zend_Loader_Autoloader::getInstance();

		$autoLoader->registerNamespace('CL_');

		$resourceLoader = new Zend_Loader_Autoloader_Resource(array(

		'basePath' => APPLICATION_PATH,

		'namespace' => '',

		'resourceTypes' => array(

		'form' => array(

		'path' => 'forms/',

		'namespace' => 'Form_',

		),

		'model' => array(

		'path' => 'models/',

		'namespace' => 'Model_'

		),

                'func' => array(

                'path' => 'function/',

                'namespace' => 'Func_'

                ),

		),

		));




                return $autoLoader;

	}

    

         protected function _initurl()

	{

			// Initialize view

			$view = new Zend_View();

			$this->view->url = 'localhost';

            

                $this->view->urllink = 'https://'.$_SERVER["HTTP_HOST"].'';




                       $check = strpos($this->view->urllink,$this->view->url);

/*

               if($check == FALSE)

               {

                    die('Accses Not Allow');

               }

*/




                return $view;

	}






   protected function _initZFDebug()

    {

      

    $fgigi = 0;

        if($fgigi) {




                $autoloader = Zend_Loader_Autoloader::getInstance();

                $autoloader->registerNamespace('ZFDebug');




                $options = array(

                    'plugins' => array('Variables',

                                       'File' => array('base_path' => '/path/to/project'),

                                       'Memory',

                                       'Time',

                                       'Registry',

                                       /*'Cache' => array('backend' => $cache->getBackend()),*/

                                       'Exception')

                );




                # Instantiate the database adapter and setup the plugin.

                # Alternatively just add the plugin like above and rely on the autodiscovery feature.

                if ($this->hasPluginResource('db')) {

                    $this->bootstrap('db');

                    $db = $this->getPluginResource('db')->getDbAdapter();

                    $options['plugins']['Database']['adapter'] = $db;

                }




                # Setup the cache plugin

                /*

                if ($this->hasPluginResource('cache')) {

                    $this->bootstrap('cache');

                    $cache = $this->getPluginResource('cache')->getDbAdapter();

                    $options['plugins']['Cache']['backend'] = $cache->getBackend();

                }

            */

                $debug = new ZFDebug_Controller_Plugin_Debug($options);




                $this->bootstrap('frontController');

                $frontController = $this->getResource('frontController');

                $frontController->registerPlugin($debug);

        }

    }




	

}













 




