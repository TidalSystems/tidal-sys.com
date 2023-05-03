<?php 

class Form_Landingpagesections extends Form_SuperForm {
 
    public function init() {
          $this->Text('title', 'Title', true,  null ,"col-md-12" , "" , "required"  ); 
 $this->Text('titleAr', 'Title Ar', false,  null ,"col-md-12" , "" , ""  );     

  
 
 
  	  $this->TextErea('Data', 'Description', '$rows = 40' , $id='elm2', false );

     $this->TextErea('DataAr', 'Description Ar', '$rows = 40' , $id='elm4', false );
 
    $this->text('Thumb', 'Photo' , false);
  
$this->Text('landingid', '', false  , null , "col-md-7" , "display:none"); 
  
      $this->Text('style', '', false  , null , "col-md-7" , "display:none");        
 

        $this->loadSubmit();



        



      



    }







}