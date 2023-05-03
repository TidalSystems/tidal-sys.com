<?php
class Form_Contactus extends Form_SuperForm {
    public function init() {

 

       $this->Text('title', 'Title', false,  null ,"col-md-12" , "" , "required"  ); 
      $this->Text('subtitle', 'Sub Title', false  , null , "col-md-12" );  
 	$this->TextErea('description', 'Description', '$rows = 40' , $id='elm2', false );
      $this->Text('Thumb', 'Thumb Photo', false); 
      $this->Text('Header', 'Header Photo', false); 
 
 
  $this->Text('country', 'Country', false); 

  
   	$this->Text('subjectemail', 'Subject Email' ,false , null , "col-md-9" ); 
	$this->Text('emailid', 'CC- Emails' ,false , null , "col-md-9"  , "display:none");

    $this->Text('pagurl', 'Page Url ',false , null , "col-md-9");
	$this->Text('seohead', 'Page Head', false , null , "col-md-9");
	$this->Text('seotitle', 'Page Title' ,false , null , "col-md-9");
 	$this->TextErea('seodescription', 'Page Description', '$rows = 40' , $id='elm-free', false ); 
 	$this->Text('seokeywords', 'Page Keywords', false , null , "col-md-9"); 

	   	$this->Text('callnow', 'Call Now' ,false , null , "col-md-9" );

  $style1 = $this->createElement('checkbox','style1'); 
  $style1->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $style1->setLabel('');        
  $style1->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($style1); 


  $style2 = $this->createElement('checkbox','style2'); 
  $style2->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $style2->setLabel('');        
  $style2->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($style2); 

 
 $style3 = $this->createElement('checkbox','style3'); 
  $style3->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $style3->setLabel('');        
  $style3->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($style3); 

 
 $style4 = $this->createElement('checkbox','style4'); 
  $style4->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $style4->setLabel('');        
  $style4->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($style4); 

 
 $style5 = $this->createElement('checkbox','style5'); 
  $style5->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $style5->setLabel('');        
  $style5->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($style5); 

 
 $style6 = $this->createElement('checkbox','style6'); 
  $style6->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $style6->setLabel('');        
  $style6->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($style6); 

 $this->Text('confirmation', 'Confirmation Message ',false , null , "col-md-9"); 
 
 

 $this->Text('address', 'Address ',false , null , "col-md-12"); 
 $this->Text('city', 'City ',false , null , "col-md-12"); 
 $this->Text('state', 'State ',false , null , "col-md-12"); 
 $this->Text('zip', 'Zip Code ',false , null , "col-md-12"); 
 $this->Text('mainphone', 'Main Phone ',false , null , "col-md-12"); 
 $this->Text('localphone', 'Local Phone ',false , null , "col-md-v"); 
 $this->Text('fax', 'Fax ',false , null , "col-md-12"); 
 $this->Text('email', 'Email',false , null , "col-md-12"); 
 $this->TextErea('workhours', 'Working Hours'  , '$rows = 40' , $id='elm-free2', false );

 $this->TextErea('messagealert', 'Message/ Alert on Top', '$rows = 40' , $id='elm-free', false );
 
   $this->Text('lat', 'Latitude ',false , null , "col-md-12"); 
 $this->Text('lng', 'Longitude ',false , null , "col-md-12"); 

  

   
        $this->loadSubmit();



        



      



    }







}