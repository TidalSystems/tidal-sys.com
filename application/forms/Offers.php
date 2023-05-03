<?php 

class Form_Offers extends Form_SuperForm {

    public function init() {





        $this->Text('Title1', 'Main Title  ', false , null , "col-md-9"); 
        $this->Text('Title2', 'Sub Title   ', false , null , "col-md-9"); 
        $this->Text('Title3', 'Special Title   ', false , null , "col-md-9"); 
        $this->Text('Link', 'Link   ', false , null , "col-md-9"); 

        $this->Text('expiredate', 'Expiration date', false , null , "col-md-3"); 
      

 $this->TextErea('Details', 'Details', false );

        $this->upload('Img', 'jpg,jpeg,png,gif ' ,  'Home Photo' );

        $this->Text('Img', ' Photo', false ); 
        $this->Text('Img2', ' photo', false );
 

     $this->TextErea('Terms', 'Terms', '$rows = 40' , $id='elm-free', false );


 		

   
  $Active = $this->createElement('checkbox','Active'); 
  $Active->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $Active->setLabel('Inactive ');        
  $Active->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($Active); 

 
 $ShowHome = $this->createElement('checkbox','ShowHome'); 
  $ShowHome->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $ShowHome->setLabel('Show in Home');        
  $ShowHome->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($ShowHome); 

 
 




    $this->Text('pagurl', 'Page Url ',false , null , "col-md-9");
	$this->Text('seohead', 'Page Head', false , null , "col-md-9");
	$this->Text('seotitle', 'Page Title' ,false , null , "col-md-9");
 	$this->TextErea('seodescription', 'Page Description', '$rows = 40' , $id='elm-free', false ); 
 	$this->Text('seokeywords', 'Page Keywords', false , null , "col-md-9"); 

 


		$this->loadSubmit();



    }







}