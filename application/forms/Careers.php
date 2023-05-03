<?php 

class Form_Careers extends Form_SuperForm {


    public function init() {


 
   
  $this->Text('title', 'Title En', false,  null ,"col-md-12" , "" , "required"  ); 
 
  	  $this->TextErea('Data', 'Description', '$rows = 40' , $id='elm2', false );
 

        $this->loadSubmit();

    }

}
