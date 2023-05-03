<?php 

class Form_Projects extends Form_SuperForm {

 

    public function init() {




       $this->Text('Title', 'Title ', true,  null ,"col-md-12" , "" , "required"  ); 

	   $this->Text('titleAr', 'Title Ar ', false,  null ,"col-md-12" , "" , ""  ); 

 	    $this->TextErea('description', 'Description En ', '$rows = 40' , $id='elm2', false );

 	 	$this->TextErea('descriptionAr', 'Description Ar ', '$rows = 40' , $id='elm3', false );
 

 
  $this->Text('Thumb', 'Photo (500*500)', false); 


  

    $this->Text('pagurl', 'Page Url ',false , null , "col-md-9");
 $this->Text('seotitle', 'Page Title ',false , null , "col-md-12");
 

 	$this->TextErea('seodescription', 'Page Description', '$rows = 40' , $id='elm-free', false ); 



 	$this->Text('seokeywords', 'Page Keywords', false , null , "col-md-9"); 


 



        $this->loadSubmit();







        







      







    }















}