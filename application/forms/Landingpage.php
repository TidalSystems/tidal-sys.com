<?php 

class Form_Landingpage extends Form_SuperForm {
 
    public function init() {

  
      $this->Text('style', '', false  , null , "col-md-7" , "display:none");        
       $this->Text('title', 'Title', true,  null ,"col-md-12" , "" , "required"  ); 
 $this->Text('titleAr', 'Title Ar', false,  null ,"col-md-12" , "" , ""  );     

  
 
 
  	  $this->TextErea('Data', 'Description', '$rows = 40' , $id='elm2', false );

     $this->TextErea('DataAr', 'Description Ar', '$rows = 40' , $id='elm4', false );
 
	  $this->Text('Header', 'Header  (1280*450  px)', false ); 

      $this->Text('Thumb', 'Home Thumb  (450*222 px)', false ); 

 
    $this->Text('pagurl', 'Page Url ',false , null , "col-md-9");
	$this->Text('seotitle', 'Page Title' ,false , null , "col-md-9");
 	$this->TextErea('seodescription', 'Page Description', '$rows = 40' , $id='elm-free', false ); 
 	$this->Text('seokeywords', 'Page Keywords', false , null , "col-md-9"); 



        $this->loadSubmit();



        



      



    }







}