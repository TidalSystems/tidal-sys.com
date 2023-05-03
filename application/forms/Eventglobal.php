<?php 


class Form_Eventglobal extends Form_SuperForm {


    public function init() {


 
 $this->Text('thumb', 'Header', false); 
 $this->TextErea('emailteam', 'Email to CH Team	', '$rows = 40' , $id='elm3', false );

 $this->TextErea('inactivemessage', 'Inactive Message', '$rows = 40' , $id='elm2', false );
 	$this->Text('subjectemail', 'Subject Email' ,false , null , "col-md-9" ); 
 $this->Text('confirmation', 'Confirmation Message ',false , null , "col-md-9"); 
	$this->Text('emailid', 'BCC- Emails' ,false , null , "col-md-9"  , "display:none");
 
 

  
	$this->loadSubmit(); 



}

}