<?php 
 
class Form_MaillistCategory extends Form_SuperForm {

    public function init() {
        $name = $this->createElement('text', 'name');
        $name->setRequired('true');
        $name->addErrorMessage('الحقل اجباري');
        $name->setAttrib('class', 'textinput');
        $name->setLabel('الإسم :- ');
        $this->addElement($name);
        $this->loadSubmit();
    }

}