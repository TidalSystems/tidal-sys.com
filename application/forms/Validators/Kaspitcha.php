<?php 
class  Core_Form_Validates_Kaspitcha extends Zend_Validate_Abstract{
   
   public function isValid($value, $context = null)
    {
         require_once 'library/CL/securimage/securimage.php';
        
        $img = new Securimage();
        $valid = $img->check($_POST['code']);
        
        if($valid == TRUE)
        {
              return true;
        }
        elseif($valid == false)
        {
            $a = '<ul class="errors"><li>كود تحقق خطأ</li></div>';
             $this->_error($a);
             return false;
        }        
    }
}
