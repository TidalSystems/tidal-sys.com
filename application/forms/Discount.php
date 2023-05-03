<?php 

 
class Form_Discount extends Form_SuperForm {

 
    public function init() {


   $this->Text('name', 'Internal Name ' ,   false );
   $this->Text('title', 'Website Title' ,   true );
   $this->Text('type', 'Type ' ,   false );
   $this->Text('ids', 'IDS ' ,   false );

    $this->Text('discount', 'Discount Amount' ,   true );
  $this->Text('datepicker', 'Discount Expiration Date' ,   true );
 $this->Text('date', 'Date' ,   false );
  
  
$this->TextErea('notes',  'Discount Note',  '$rows = 40' , $id = 'elm5588', false );

	$this->loadSubmit(); 



}

}