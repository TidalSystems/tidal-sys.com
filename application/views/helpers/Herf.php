<?php
class Zend_View_Helper_Herf extends Zend_View_Helper_Abstract{

	public function Herf($url = null , $title)
        {
              echo '<a href="'.LANG_URL.$url.'">'.$title.'</a>';
	}
}