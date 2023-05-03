<?php 

class Form_Filter_Stripslashes implements Zend_Filter_Interface{
   
   public function filter($value){
         return stripslashes($value);
    }

    
}


