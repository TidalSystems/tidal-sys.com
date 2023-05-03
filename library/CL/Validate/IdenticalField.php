<?php 

class CL_Validate_IdenticalField extends CL_Validate_Field_Abstract
{
    const NOT_MATCH = 'notMatch';

    public function __construct($fieldName, $fieldTitle = null)
    {
        parent::__construct($fieldName, $fieldTitle);

        $this->_messageTemplates[self::NOT_MATCH] = 'Does not match %fieldTitle%.';
    }

    /**
     * Defined by Zend_Validate_Interface
     *
     * Returns true if and only if a field name has been set, the field name is available in the
     * context, and the value of that field name matches the provided value.
     *
     * @param string $value
     * @param array $context
     *
     * @return boolean
     */
    public function isValid($value, $context = null)
    {
        $this->_setValue($value);

        $fieldValue = $this->getFieldValue($context);

        if ($fieldValue != $value) {
            $this->_error(self::NOT_MATCH);
            return false;
        }

        return true;
    }
}