<?php
class Form_Requestcareer extends Form_SuperForm {
    public function init() {

 

 $this->Text('email', '  Email', false); 
 $this->Text('created_on', 'Date', false); 

 $this->Text('JOB', '  Job Title', false); 

 $this->Text('FIRSTNAME', '  First Name', false); 
 $this->Text('LASTNAME', 'Last Name', false); 
 $this->Text('cv', '  C.V', false); 
  
	 $this->loadSubmit();

    }



}

