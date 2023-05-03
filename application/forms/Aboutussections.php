<?php 

class Form_Aboutussections extends Form_SuperForm {
 
    public function init() {

  
      $this->Text('style', '', false  , null , "col-md-7" , "display:none");        
       $this->Text('title', 'Title', false,  null ,"col-md-12" , "" , "required"  ); 
      $this->Text('subtitle', 'Sub Title', false  , null , "col-md-12" );  
     
 
 	$this->TextErea('description', 'Description', '$rows = 40' , $id='elm2', false );
 
    $this->text('Thumb', 'Thumb Photo' , false);
  


        $this->loadSubmit();



        



      



    }







}