<?php 

class Core_Form_Validators_Email extends Zend_Validate_Abstract{
    

    const INVALID = 'INVALID';
    const INVALID_HOSTNAME = 'INVALID_HOSTNAME';
    const INVALID_FORMAT = 'INVALID_FORMAT';
    const INVALID_MX_RECORD = 'INVALID_MX_RECORD';
    const DOT_ATOM = 'DOT_ATOM';
    const INVALID_SEGMENT = 'INVALID_SEGMENT';
    const QUOTED_STRING = 'QUOTED_STRING';
    
    
    protected $_messageTemplates = array(
        self::INVALID => "'%value%' صيغه بريد خطأ",
        self::INVALID_HOSTNAME => "'%value%' صيغه بريد خطأ",
        self::INVALID_FORMAT => "'%value%' صيغه بريد خطأ",
        self::INVALID_MX_RECORD => "'%value%' صيغه بريد خطأ",
        self::DOT_ATOM => "'%value%' صيغه بريد خطأ",
        self::INVALID_SEGMENT => "'%value%'  صيغه بريد خطأ",
        self::QUOTED_STRING => "'%value%' صيغه بريد خطأ"
    );
    public function isValid($value)
    {
        $this->_setValue($value);
        $Email = new Zend_Validate_EmailAddress();
        if (!$Email->isValid($value)) {
            $this->_error(self::INVALID);
            return false;
        }
        return true;
    }
    
}

?>
