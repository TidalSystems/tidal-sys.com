<?php  
class Form_Sizes extends Form_SuperForm {
     public function init() {
   
     $this->Text('title', 'Size', false,  null ,"col-md-4" , "" , "required"  ); 
  
 
        $this->loadSubmit();







    }



}