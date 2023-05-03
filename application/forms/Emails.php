<?php 

 

class Form_Emails extends Form_SuperForm {



    public function init() {


        
        $this->Text('clientemailsubject', 'Client Email Subject' , true  , null , "col-md-6");  
 	     $this->TextErea('clientemail', 'Client Email Content', '$rows = 40' , $id='elm3', false ); 
  $this->Text('adminemail', 'Admin Email' , false  , null , "col-md-6");  
         $this->Text('emailids', 'Emails' , false  , null , "col-md-6");  
 $this->Text('emailsubject', 'Admin & CC  Email Subject' , true  , null , "col-md-6");  
 	   
   

		$this->loadSubmit();

    }



}

