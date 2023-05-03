<?php 

class Form_Locations extends Form_SuperForm {


    public function init() {
 
    
     $this->Text('title2', 'Title', false , null , "col-md-12");   
  	$this->TextErea('Data', 'Description', '$rows = 40' , $id='elm-free', false );
 
        $this->loadSubmit();

    }

}
