<?php 

class Core_Form_Validators_Digits extends Zend_Validate_Abstract{

     const NOT_DIGITS = 'NOT_DIGITS';
     const INVALID = 'INVALID';
    protected $_messageTemplates = array(
        self::NOT_DIGITS => "'%value%' هذا الحقل يقبل ارقام فقط",
        self::INVALID => "'%value%' هذا الحقل يقبل ارقام فقط"
    );
    public function isValid($value)
    {
        $this->_setValue($value);
        $Digits = new Zend_Validate_Digits();
        if (!$Digits->isValid($value)) {
            $this->_error(self::INVALID);
           
            return false;
        }
        
        return true;
    }
    
}

?>
