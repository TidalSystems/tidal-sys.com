<?php 
class Form_Jobs extends Form_SuperForm {
    public function init() {


        $this->Text('title', 'Title', true , null , "col-md-9");
	    $this->Text('Ref', 'Quote Reference	', false , null , "col-md-4");
		$this->TextErea ('Det', 'Description','$rows = 20' , $id = 'elm2', false ); 
		$this->TextErea ('Res', 'Responsibilities','$rows = 20' , $id = 'elm3', false ); 
		$this->TextErea ('Req', 'Requirements','$rows = 20' , $id = 'elm4', false ); 
		
		
  $inactive = $this->createElement('checkbox','Active'); 
  $inactive->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $inactive->setLabel('Inactive');        
  $inactive->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($inactive); 




       
 				

							$this->loadSubmit();   

 }

}









 