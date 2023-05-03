<?php  
class Form_Homeboxes extends Form_SuperForm {
     public function init() {
   
     $this->Text('title', 'Title', false,  null ,"col-md-12" , "" , "required"  ); 
     $this->Text('photo', 'Photo', false   ); 
       $this->TextErea('Description', 'Description', '$rows = 40' , $id='elm4', false );
        $this->loadSubmit();







    }



}