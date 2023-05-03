<?php 

class  Form_Elements_Uploadjq extends Zend_Form_Element_Xhtml{
   
    
    public function __construct($spec, $options = null)
    {
        $this->addPrefixPath(
            'Form_Decorator',
            'application/forms/Decorator/',
            'decorator'
        );
        parent::__construct($spec, $options);
    }
    public function setValue($value)
    {
        if(!$value)
        {
            $name = $this->getFullyQualifiedName();
            if($_POST['table_image'])
            {
                $value = serialize($_POST['table_image']);
                
            }
            $this->_value = $value;
        }
        else
        {
            $this->_value = $value;
        }

        return $this;
    }
    public function getValue()
    {
        $value =  $this->_value;
        $this->setValue($value);
        return parent::getValue();
    }
    public function loadDefaultDecorators()
    {
        if ($this->loadDefaultDecoratorsIsDisabled()) {
            return;
        }
        $decorators = $this->getDecorators();
        if (empty($decorators)) {
           
            $this->addDecorator('Uploadjq')
                 ->addDecorator('Errors')
                 ->addDecorator('Description',  array('tag' => 'div', 'class' => 'description')
                 )
                 ->addDecorator(array('row'=>'HtmlTag'),array('tag'=>'li')
                 );
                 
        }
    }
}
