<?php  class Form_Servicescategories extends Form_SuperForm {















    public function init() {





 



  $this->Text('title', 'Title En', false,  null ,"col-md-12" , "" , "required"  ); 



  $this->Text('titleAr', 'Title Ar', false,  null ,"col-md-12" , "" , ""  ); 


	  $this->TextErea('summary', 'Summary', '$rows = 40' , $id='elm-free', false );

	  $this->TextErea('summaryAr', 'Summary Ar', '$rows = 40' , $id='elm-free', false );

  	  $this->TextErea('Data', 'Description', '$rows = 40' , $id='elm2', false );



     $this->TextErea('DataAr', 'Description Ar', '$rows = 40' , $id='elm4', false );




 

      $this->Text('Thumb', 'Home Thumb  (350*350 px)', false ); 

	        $this->Text('Icon', 'Header', false );

  



    $this->Text('pagurl', 'Page Url ',false , null , "col-md-9");


  $this->Text('seotitle', 'Page Title ',false , null , "col-md-12");

 	$this->TextErea('seodescription', 'Page Description', '$rows = 40' , $id='elm-free', false ); 



 	$this->Text('seokeywords', 'Page Keywords', false , null , "col-md-9"); 





        $this->loadSubmit();































    }















}