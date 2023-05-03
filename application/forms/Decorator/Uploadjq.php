<?php 
class Form_Decorator_Uploadjq extends Zend_Form_Decorator_Abstract{
    
    
    public function render($content)
    {
        $element = $this->getElement();
        $view = $element->getView();
        $elme['view'] = $view;
        $elme['id'] = $element->getId();
        $elme['name']  = $element->getFullyQualifiedName();
        $elme['label'] = $element->getLabel();
        $elme['attrib'] = $element->getAttribs();
        $elme['value'] = $element->getValue();
        $view->setScriptPath(APPLICATION_PATH.'/forms/Decorator/');
        return $view->partial('uploadquene.html' , $elme);
    }
}

?>
