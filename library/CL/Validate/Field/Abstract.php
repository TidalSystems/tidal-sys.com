<?php 
abstract class CL_Validate_Field_Abstract extends Zend_Validate_Abstract
{
    const MISSING_FIELD_NAME = 'missingFieldName';
    const INVALID_FIELD_NAME = 'invalidFieldName';
    
    protected $_messageTemplates = array(
        self::MISSING_FIELD_NAME => 'DEVELOPMENT ERROR: Field name to match against was not provided.',
        self::INVALID_FIELD_NAME => 'DEVELOPMENT ERROR: The field "%fieldName%" was not provided to match against.',
    );
    
    /**
     * @var array
     */
    protected $_messageVariables = array(
        'fieldName'  => '_fieldName',
        'fieldTitle' => '_fieldTitle'
    );
    
    /**
     * Name of the field as it appear in the $context array.
     *
     * @var string
     */
    protected $_fieldName = null;
    
    /**
     * Title of the field to display in an error message.
     *
     * If evaluates to false then will be set to $this->_fieldName.
     *
     * @var string
     */
    protected $_fieldTitle = null;
    
    /**
     * Sets validator options
     *
     * @param  string $fieldName
     * @param  string $fieldTitle
     * @return void
     */
    public function __construct($fieldName, $fieldTitle = null)
    {
        $this->setFieldName($fieldName);
        $this->setFieldTitle($fieldTitle);
    }
    
    /**
     * Returns the field name.
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->_fieldName;
    }
    
    /**
     * Sets the field name.
     *
     * @param  string $fieldName
     * @return CL_Validate_Field_Abstract Provides a fluent interface
     */
    public function setFieldName($fieldName)
    {
        $this->_fieldName = $fieldName;
        
        return $this;
    }
    
    /**
     * Returns the field title.
     *
     * @return integer
     */
    public function getFieldTitle()
    {
        return $this->_fieldTitle;
    }
    
    /**
     * Sets the field title.
     *
     * @param  string:null $fieldTitle
     * @return CL_Validate_Field_Abstract Provides a fluent interface
     */
    public function setFieldTitle($fieldTitle = null)
    {
        $this->_fieldTitle = $fieldTitle ? $fieldTitle : $this->_fieldName;
        
        return $this;
    }
    
    public function getFieldValue($context)
    {
        $field = $this->getFieldName();
        
        if (empty($field)) {
            $this->_error(self::MISSING_FIELD_NAME);
            
            return null;
        } elseif (is_array($context)) {
            if (!isset($context[$field])) {
                $this->_error(self::INVALID_FIELD_NAME);
                return null;
            }
            
            return $context[$field];
        } elseif (is_string($context)) {
            return $context;
        }
        
        return null;
    }
}