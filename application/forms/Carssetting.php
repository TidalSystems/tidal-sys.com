<?php 

 
class Form_Carssetting extends Form_SuperForm {

 
    public function init() {


   $this->TextErea('data', 'Description ' ,  '$rows = 40' , $id = 'elm1', false );



   $this->Text('thumb', 'Photo ', false);


 $this->TextErea('Included', 'Included Features', '$rows = 40' , $id='elm2', false );
 $this->TextErea('Rental', 'Rental Information', '$rows = 40' , $id='elm3', false );
 $this->TextErea('Terms', 'Terms & Conditions', '$rows = 40' , $id='elm4', false );
 
    $this->Text('pagurl', 'Page Url ',false , null , "col-md-9");
	$this->Text('seohead', 'Page Head', false , null , "col-md-9");
	$this->Text('seotitle', 'Page Title' ,false , null , "col-md-9");
 	$this->TextErea('seodescription', 'Page Description', '$rows = 40' , $id='elm-free', false ); 
 	$this->Text('seokeywords', 'Page Keywords', false , null , "col-md-9"); 

	


	$this->loadSubmit(); 



}

}