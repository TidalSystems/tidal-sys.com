<?php 







class Form_Pages extends Form_SuperForm {

 
    public function init() {
 

      $this->Text('style', '', false  , null , "col-md-7" , "display:none");        



       $this->Text('title', 'Title ', true,  null ,"col-md-12" , "" , "required"  ); 

	   $this->Text('titleAr', 'Title Ar ', false,  null ,"col-md-12" , "" , ""  ); 

	  $this->Text('titleFr', 'Title Fr', false,  null ,"col-md-12" , "" , ""  ); 

 

 	    $this->TextErea('description', 'Description En ', '$rows = 40' , $id='elm2', false );

 	 	$this->TextErea('descriptionAr', 'Description Ar ', '$rows = 40' , $id='elm3', false );

        $this->TextErea('descriptionFr', 'Description Fr ', '$rows = 40' , $id='elm4', false );



    $this->text('Header', 'Header (1280*450 px)' , false);





 $this->TextErea('beforecarrear', 'Text To Appear in Case There Is No Opportunities', '$rows = 40' , $id='elm3', false );



 $this->TextErea('aftercarrer', 'Text To Appear in Case There Is Available Opportunities', '$rows = 40' , $id='elm4', false );








 $this->Text('slogne', 'Article Message  En ',false , null , "col-md-12"); 

 $this->Text('slogneAr', 'Article Message  Ar',false , null , "col-md-12");

  $this->Text('slogneFr', 'Article Message  Fr',false , null , "col-md-12");






 $this->Text('address', 'Address En ',false , null , "col-md-12"); 

 $this->Text('addressar', 'Address Ar',false , null , "col-md-12");

  $this->Text('addressfr', 'Address Fr',false , null , "col-md-12");

 $this->Text('city', 'City ',false , null , "col-md-12"); 



 $this->Text('titlecontact1', 'Title Eg',false , null , "col-md-12");
 $this->Text('titlecontact2', 'Title SA',false , null , "col-md-12");
 $this->Text('addressSA', 'Address SA ',false , null , "col-md-12");
 $this->Text('phoneSA', 'phone SA',false , null , "col-md-12");
 $this->Text('emailSA', 'email SA',false , null , "col-md-12");


 $this->Text('state', 'State ',false , null , "col-md-12"); 



 $this->Text('country', 'Country ',false , null , "col-md-12"); 



 $this->Text('zip', 'Zip Code ',false , null , "col-md-12"); 



 
   $this->Text('mainphone', 'Phone',false , null , "col-md-12");



 $this->Text('localphone', 'Mobile Phone ',false , null , "col-md-12"); 



 $this->Text('fax', 'Fax ',false , null , "col-md-12"); 



 $this->Text('email', 'Email',false , null , "col-md-12"); 



 $this->TextErea('workhours', 'Working Hours'  , '$rows = 40' , $id='elm-free2', false );

  $this->TextErea('mapGoogle', 'Google Map'  , '$rows = 40' , $id='elm-free2', false );











   	$this->Text('subjectemail', 'Subject Email' ,false , null , "col-md-9" ); 



    $this->Text('confirmation', 'Confirmation Message ',false , null , "col-md-9"); 



	$this->Text('emailid', 'Emails' ,false , null , "col-md-9"  , "display:none");











    $this->text('Thumb', 'Photo (600*400 px)' , false);



    $this->Text('pagurl', 'Page Url ',false , null , "col-md-9");



	$this->Text('seotitle', 'Page Title' ,false , null , "col-md-9");



 	$this->TextErea('seodescription', 'Page Description', '$rows = 40' , $id='elm-free', false ); 



 	$this->Text('seokeywords', 'Page Keywords', false , null , "col-md-9"); 















        $this->loadSubmit();















        















      















    }































}