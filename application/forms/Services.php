<?php 



class Form_Services extends Form_SuperForm {



    public function init() {

  
  $this->Text('title', 'Title', false,  null ,"col-md-12" , "" , "required"  ); 
   

       

  $this->Text('Background', 'Header',false , null , "col-md-9");
  $this->Text('homephoto', 'Home Page Photo',false , null , "col-md-9");

  $showhome = $this->createElement('checkbox','showhome'); 
  $showhome->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $showhome->setLabel('Show in Home');        
  $showhome->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($showhome); 


		
  $this->TextErea('data', 'Description', '$rows = 40' , $id='elm4', false );

  $this->Text('pagurl', 'Page Url ',false , null , "col-md-9");
	$this->Text('seotitle', 'Page Title' ,false , null , "col-md-9");
 	$this->TextErea('seodescription', 'Page Description', '$rows = 40' , $id='elm-free', false ); 
 	$this->Text('seokeywords', 'Page Keywords', false , null , "col-md-9"); 

 	$this->Text('alt', 'Alternative Description (ALT)', false , null , "col-md-9"); 


  $Inactive = $this->createElement('checkbox','Inactive'); 
  $Inactive->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $Inactive->setLabel('Inactive ');        
  $Inactive->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($Inactive); 


        $this->loadSubmit();







    }



}