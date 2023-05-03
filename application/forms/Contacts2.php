<?php 
 
class Form_Contacts2 extends Form_SuperForm {

    public function init() {
        
        
      
     $this->Text('title1', 'Title: ', true);
    
     $this->TextErea('data1', 'Decription: ', false);
    $this->TextErea('data2', 'Googel Map','$rows = 40' , $id = 'elm22', false );


       
   $this->upload('image', 'jpg,jpeg,png,gif ', 'Header Image');   
							
							$this->loadSubmit();   
 }
}




 