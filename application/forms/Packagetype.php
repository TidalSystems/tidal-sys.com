<?php  class Form_Packagetype extends Form_SuperForm {   



 public function init() {     



    $this->Text('title', 'Title' , true  , null , "col-md-7");  
 
    $this->TextErea('title2',  'Type Description', '$rows = 40', $id='elm2', false );

 

  $active = $this->createElement('checkbox','active'); 
  $active->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $active->setLabel('Inactive');        
  $active->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($active); 



 $this->Text('pagurl', 'Page URL', false , null , "col-md-7"); 

 $this->loadSubmit();   

  }

  }