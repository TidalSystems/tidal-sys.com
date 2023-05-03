<?php

class Zend_View_Helper_ImgView extends Zend_View_Helper_Abstract{



	public function ImgView($ImgUrl , $type = 'thumbnail')

        {

            if($type == 'thumbnail')

            {

                echo '<a href="#" class="highslide" onclick="return hs.expand(this)" >

                <img style="width:150px"  src="'. APP_BASEURL.'/MyUpload/'.$ImgUrl .'" class="frame" >

                </a>';

            }

            else if($type == 'full')

            {

                echo '<a href="#" class="highslide" onclick="return hs.expand(this)" >

                <img src="'. APP_BASEURL.'/MyUpload/'.$ImgUrl .'" class="frame" >

                </a>';

            }

		

	}

}