<?php  

class Form_EmailConf extends Form_SuperForm

{

    public function init()

    {

        $email = $this->createElement('text', 'email');

        $email->setRequired('true');

        $email->addValidator(new Zend_Validate_EmailAddress());

        $email->addFilters(array(new Zend_Filter_StringTrim(), new Zend_Filter_StringToLower()));

        $email->addErrorMessage('Filed Required');

        $email->setAttrib('class', 'form-group col-md-6');

        $email->setLabel('Admin Email');

        $this->addElement($email);

        $this->loadSubmit();

    }



}