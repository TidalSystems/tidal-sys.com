<?php 

class Form_Tasks extends Form_SuperForm {
    public function init() {

 
   
 
 
    $this->Text('Title', 'Title' , false , null , "form-control col-md-6" , '');
	$this->Text('Details', 'Details' , false , null , "form-control col-md-6" , '');
 
     $this->Text('DateFrom', 'Date From' , false , null , "form-control col-md-6" , '');
     $this->Text('DateTo', 'Date To' , false , null , "form-control col-md-6" , '');
	
	
	
  
  
	$this->loadSubmit();   

 }

}























 