<?php
class Form_Requestcontact extends Form_SuperForm {
    public function init() {

 

 $this->Text('email2', '  Email', false); 
 $this->Text('created_on', 'Date', false); 
 
  $this->Text('utm_medium2', '  utm_medium', false); 
 $this->Text('utm_source2', '  utm_source', false); 
 $this->Text('utm_campaign2', '  utm_campaign', false); 

 $this->Text('FIRSTNAME2', '  First Name', false); 
 $this->Text('LASTNAME2', 'Last Name', false); 
 $this->Text('PRIMARY_PHONE2', '  Primary_Phone', false); 
 
 $this->Text('COMMENT2', 'Comment', false); 

	 $this->loadSubmit();

    }



}

