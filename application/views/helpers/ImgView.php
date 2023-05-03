<?php

class Zend_View_Helper_ImgView extends Zend_View_Helper_Abstract{



	public function ImgView($ImgUrl , $type = 'thumbnail' , $size = '')

        {

            if($type == 'thumbnail')

            {

                echo '<img src="'. APP_BASEURL.'/files/thumbnail/i/'.$ImgUrl .'" class="frame" >';

            }

            else if($type == 'full')

            {

                echo '<img src="'. APP_BASEURL.'/files/ful/i/'.$ImgUrl .'" class="frame" '.$size.'>';

            }

		

	}

}