<?php 

class Core_Form_Validators_Number extends Zend_Validate_Abstract{

     const TOO_LONG = 'TOO_LONG';
     const TOO_SHORT = 'TOO_SHORT';
     const INVALID  = 'INVALID';

     public $max;
     public $min;

    protected $_messageTemplates = array(
        self::TOO_LONG => "عدد الحروف في هذا الحقل اكبر من 30 حرف",
        self::INVALID => "'%value%' هذا الحقل يقبل ارقام فقط",
        self::TOO_SHORT => "عدد الحروف قصير جدا اقل عدد حروف 6"
    );
    public function isValid($value)
    {
        $this->_setValue($value);
        $StringLength = new Zend_Validate_StringLength();
        $StringLength->setMax($this->max);
        $StringLength->setMin($this->min);
        if (!$StringLength->isValid($value)) {
            $this->_error(self::TOO_LONG);
            return false;
        }
        $Digits = new Zend_Validate_Digits();
        if (!$Digits->isValid($value)) {
            $this->_error(self::INVALID);
            return false;
        }
        
        return true;
    }
    
}

?>
