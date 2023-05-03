<?php  
class Form_Testimonials extends Form_SuperForm {
    public function init() {
    $this->Text('title', 'Name', true , null ,"col-md-7" , "" , "required"  ); 
 
 
     $this->TextErea('data',  'Description',   false );
 
	$this->loadSubmit();   

 }

}









 