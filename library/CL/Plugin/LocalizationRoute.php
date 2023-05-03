<?php

 

class CL_Plugin_LocalizationRoute extends Zend_Controller_Plugin_Abstract

{

	public function routeStartup(Zend_Controller_Request_Abstract $request)

	{

		$currUri  = $request->getRequestUri();

		$currUri  = rtrim($currUri, '/');

		 $colang = 'en';

		

		/**

		 * We are in the front-end section

		 */

		if (strpos(strtolower($currUri) . '/', '/admin/') === false) {

			$paths    = explode('/', ltrim($request->getPathInfo(), '/'));

			$currLang = array_shift($paths);

		} 

		/**

		 * We are in the back-end section

		 */

		else {

			$paths    = explode('/', rtrim($request->getPathInfo(), '/'));

			$currLang = array_pop($paths);

		}

		

		/**

		 * Add language parameter.

		 * Set the request URI if there is language in URI

		 */



               $colang = 'ar,en,fr,ru';



		if (in_array($currLang, explode(',', (string) $colang))) {

			$request->setParam('language', $currLang);

			$path = implode('/', $paths);

			if ('' == $path) {

				$path = '/';

			}

			$request->setPathInfo($path);    

		}

	}

}

