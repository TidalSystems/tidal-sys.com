<?php

class Form_Request extends Form_SuperForm {

    public function init() {



 

 

$this->Text('name', '', false); 
$this->Text('phone', '', false); 
$this->Text('email', '', false); 
$this->Text('country', '', false); 
$this->Text('message', '', false); 

 

	 $this->loadSubmit();



    }







}



