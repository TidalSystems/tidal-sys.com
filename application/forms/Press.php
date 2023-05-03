<?php 

 

class Form_Press extends Form_SuperForm {



    public function init() {


 
    $this->Text('Title', 'Title', false  , null , "col-md-11"); 

    $this->Text('MDate', 'Date', false  , null , "col-md-4");

    $this->TextErea('Det', 'Description'  , '$rows = 40' , $id='elm-free2', false );

    $this->TextErea('Details', 'Details', '$rows = 40' , $id='elm2', false );
    $this->Text('thumb', 'Photo', false  , null , "col-md-11");  

   $this->Text('relatepage', 'Related Page Title', false  , null , "col-md-7"); 
   $this->Text('relateurl', 'Related Page URL', false  , null , "col-md-7");  
 

    $this->Text('pagurl', 'Page Url ',false , null , "col-md-9");
	$this->Text('seohead', 'Page Head', false , null , "col-md-9");
	$this->Text('seotitle', 'Page Title' ,false , null , "col-md-9");
 	$this->TextErea('seodescription', 'Page Description', '$rows = 40' , $id='elm-free', false ); 
 	$this->Text('seokeywords', 'Page Keywords', false , null , "col-md-9"); 




							$this->loadSubmit();   

 }

}









 