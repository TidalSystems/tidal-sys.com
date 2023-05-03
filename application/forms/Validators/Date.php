<?php 

class Core_Form_Validators_Date extends Zend_Validate_Abstract{
    
     
     const FALSEFORMAT = 'FALSEFORMAT';
     const INVALID_DATE = 'INVALID_DATE';
     const INVALID = 'INVALID';
     public $Formate = 'dd-mm-YYYY';
    protected $_messageTemplates = array(
        self::FALSEFORMAT => "'%value%' صيغه التاريخ غير صحيح",
        self::INVALID_DATE => "'%value%' صيغه التاريخ غير صحيح",
        self::INVALID => "'%value%' صيغه التاريخ غير صحيح"
    );
    public function isValid($value)
    {
        $this->_setValue($value);
        $date = new Zend_Validate_Date(array('format' => $this->Formate));
        if (!$date->isValid($value)) {
            $this->_error(self::INVALID);
           
            return false;
        }
        
        return true;
    }
    
}

?>
