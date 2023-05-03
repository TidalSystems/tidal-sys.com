<?php 
class Form_Decorator_Questions extends Zend_Form_Decorator_Abstract{
    
    
    public function render($content)
    {
        $element['ele'] = $this->getElement();
        //$element['ele']->getAttrib($name)
        //$element['ele']->getValue()
        $view = new Zend_View();
        $element['view'] = $view;
        $view->setScriptPath(APPLICATION_PATH.'/forms/Decorator/');
        return $view->partial('Questions.phtml' , $element);
    }
}

?>
