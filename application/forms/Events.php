<?php  class Form_Events extends Form_SuperForm {



 

  public function init() {



  $this->Text('title', 'Title ', false,  null ,"col-md-12" , "" , "required"  ); 
 
  $this->TextErea('data', 'Description ', '$rows = 40' , $id='elm4', false );

  
  $this->text('Thumb', 'Photo (500*500)' , false);

 

    $this->Text('pagurl', 'Page Url ',false , null , "col-md-9");

 

        $this->loadSubmit();















    }







}