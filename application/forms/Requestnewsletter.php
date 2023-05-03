<?php
class Form_Requestnewsletter extends Form_SuperForm {
    public function init() {

 

 $this->Text('email2', '  Email', false); 
 
 $this->Text('FIRSTNAME2', '  First Name', false); 
 $this->Text('LASTNAME2', 'Last Name', false); 
 
	 $this->loadSubmit();

    }



}

