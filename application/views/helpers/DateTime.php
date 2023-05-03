<?php
class Zend_View_Helper_DateTime extends Zend_View_Helper_Abstract{

	public function DateTime($value , $format = null)
        {
            echo date("d-m-Y" , $value);
		
	}
}