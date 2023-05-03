<?php 

 
class Form_Popup extends Form_SuperForm {

 
    public function init() {


 
   $this->TextErea ('data', 'Description','$rows = 20' , $id = 'elm2', false );
      $this->Text('title', 'Title', false , null ,"col-md-7" , "" );  ; 

      $this->Text('expiredate', 'Expiration date', false , null , ""); 


  $is_active2 = $this->createElement('checkbox','show_home'); 
  $is_active2->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $is_active2->setLabel('Active');        
  $is_active2->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($is_active2); 

 $this->Text('style', '', false , null ,"col-md-7" , "display:none" ); 
  
 $this->Text('pagesid', ' ', false , null ,"col-md-7" , "display:none " ); 
 $this->Text('landingid', ' ', false , null ,"col-md-7" , "display:none " ); 
   
   
	$this->loadSubmit(); 



}

}