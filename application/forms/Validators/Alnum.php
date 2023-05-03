<?php 

class Core_Form_Validators_Alnum extends Zend_Validate_Abstract{

     const NOT_ALNUM = 'NOT_ALNUM';
     const INVALID = 'INVALID';
     public $WhiteSpace;
    protected $_messageTemplates = array(
        self::NOT_ALNUM => "لقد ادخلت حروف او علامات غير مسموح بها",
        self::INVALID => "لقد ادخلت حروف او علامات غير مسموح بها"
    );
    public function isValid($value)
    {
        $this->_setValue($value);
        $alNum = new Zend_Validate_Alnum(array('allowWhiteSpace' => $this->WhiteSpace));
        if (!$alNum->isValid($value)) {
            $this->_error(self::INVALID);
           
            return false;
        }
        
        return true;
    }
    
}

?>
