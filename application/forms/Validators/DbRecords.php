<?php 

class Core_Form_Validators_DbRecords extends Zend_Validate_Abstract{
    
     
     const INVALID = 'ERROR_RECORD_USERNAME';
     
     public $dbTableName ;
     public $field;
     public $execlode;
     
     protected $_messageTemplates = array();

     public function __construct($opt = null) {
         $this->_messageTemplates = array(
             self::INVALID => "'%value%' $opt"
         );
     }

    public function isValid($value)
    {
        
        $this->_setValue($value);
        $ValidUserName = new Zend_Validate_Db_NoRecordExists(array('table' => $this->dbTableName, 'field' => $this->field , 'value' => $this->execlode));
        if (!$ValidUserName->isValid($value)) {
            
             $this->_error(self::INVALID);

            return false;
        }
        
        return true;
    }
    
}

?>
