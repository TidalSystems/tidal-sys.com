<?php 
 
class Form_Brochures extends Form_SuperForm {

    public function init() {
        
        
        
        $this->Text('Head	', 'Head Title	' , true  , null , "col-md-12");
        $this->Text('Name', 'Name', false  , null , "col-md-12");
 
        $this->TextErea('Description', 'Description', '$rows = 40' , $id='elm4', false );

         $this->Text('CoverPhoto', 'CoverPhoto' , false  , null , "col-md-11");
     $this->Text('DownloadUrl', 'Download Url' , false  , null , "col-md-11");
 $this->Text('PreviewUrl', 'Preview Url' , false  , null , "col-md-11");
 $this->Text('MaxQuantity', 'Max Quantity' , false  , null , "col-md-9");
          
  $this->Text('countryid', 'Brochure Countries' , false  , null , "col-md-12");

	     
  

  $Active = $this->createElement('checkbox','Active'); 
  $Active->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $Active->setLabel('Inactive');        
  $Active->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($Active); 

							
							$this->loadSubmit();   
 }
}




 