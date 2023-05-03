<?php 
 
class Form_ContactOwner extends Form_SuperForm {

    public function init() {
        $email = $this->createElement('text', 'email');
        $email->setRequired('true');
        $email->addValidator(new Zend_Validate_EmailAddress());
        $email->addFilters(array(new Zend_Filter_StringTrim(), new Zend_Filter_StringToLower()));
        $email->addErrorMessage('الحقل اجباري');
        $email->setAttrib('class', 'textinput');
        $email->setLabel('البريد الإلكتروني :- ');
        $this->addElement($email);
		
        $name = $this->createElement('text', 'name');
        $name->setRequired('true');
        $name->addErrorMessage('الحقل اجباري');
        $name->setAttrib('class', 'textinput');
        $name->setLabel('الإسم :- ');
        $name->setRequired(TRUE);
        $this->addElement($name);
        
        $this->Text('phone', 'رقم الجوال', TRUE);
        $this->TextErea('message', 'الرساله',20,'', FALSE);
		
        $this->loadSubmit();
    }

}