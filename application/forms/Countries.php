<?php  class Form_Countries extends Form_SuperForm {   

 public function init() {     

    
       $this->Text('title', 'Title En', true,  null ,"col-md-12" , "" , "required"  ); 
       $this->Text('titleAr', 'Title Ar', true,  null ,"col-md-12" , "" , "required"  ); 
   

 $this->loadSubmit();   
  }
  }