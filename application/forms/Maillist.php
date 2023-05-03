<?php 

class Form_Maillist extends Form_SuperForm {



    public function init() {


        $name = $this->createElement('text', 'name');
        $name->setRequired('true');
        $name->addErrorMessage('');
        $name->setAttrib('class', 'textinput');
        $name->setLabel('Email');
        $this->addElement($name);	 

        $this->loadSubmit();

    }

}