<?php 

class Core_Form_Validators_Digits extends Zend_Validate_Abstract{

     const TOO_LONG = 'TOO_LONG';
     const TOO_SHORT = 'TOO_SHORT';
    protected $_messageTemplates = array(
        self::TOO_LONG => "عدد الحروف في هذا الحقل اكبر من 30 حرف",
        self::TOO_SHORT => "عدد الحروف قصير جدا اقل عدد حروف 6"
    );
    public function isValid($value)
    {
        $this->_setValue($value);
        $StringLength = new Zend_Validate_StringLength();
        $StringLength->setMax(30);
        $StringLength->setMin(6);
        if (!$StringLength->isValid($value)) {
            $this->_error(self::TOO_LONG);
           
            return false;
        }
        
        return true;
    }
    
}

?>
