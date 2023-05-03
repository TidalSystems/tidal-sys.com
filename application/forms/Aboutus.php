<?php 

class Form_Aboutus extends Form_SuperForm {
 
    public function init() {

  
      $this->Text('style', '', false  , null , "col-md-7" , "display:none");        
       $this->Text('title', 'Title', false,  null ,"col-md-12" , "" , "required"  ); 
      $this->Text('subtitle', 'Sub Title', false  , null , "col-md-12" );  
 
      $this->Text('pageName', '', false  , null , "col-md-7" , "display:none");    

 	$this->TextErea('description', 'Description', '$rows = 40' , $id='elm2', false );
    $this->text('Header', 'Header Photo' , false);

    $this->text('Thumb', 'Thumb Photo' , false);
    $this->Text('pagurl', 'Page Url ',false , null , "col-md-9");
	$this->Text('seotitle', 'Page Title' ,false , null , "col-md-9");
 	$this->TextErea('seodescription', 'Page Description', '$rows = 40' , $id='elm-free', false ); 
 	$this->Text('seokeywords', 'Page Keywords', false , null , "col-md-9"); 



        $this->loadSubmit();



        



      



    }







}