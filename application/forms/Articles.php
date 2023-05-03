<?php 

class Form_Articles extends Form_SuperForm {

 

    public function init() {


 

       $this->Text('title', 'Title ', true,  null ,"col-md-12" , "" , "required"  ); 

	   $this->Text('titleAr', 'Title Ar ', false,  null ,"col-md-12" , "" , ""  ); 

	  $this->Text('titleFr', 'Title Fr', false,  null ,"col-md-12" , "" , ""  ); 

 	  $this->Text('datepicker', 'Date', false,  null ,"col-md-4" , "" , "required"  ); 


   $this->Text('source', 'Source ', false,  null ,"col-md-12" , "" , ""  ); 

	

 	    $this->TextErea('description', 'Description En ', '$rows = 40' , $id='elm2', false );

 	 	$this->TextErea('descriptionAr', 'Description Ar ', '$rows = 40' , $id='elm3', false );

        $this->TextErea('descriptionFr', 'Description Fr ', '$rows = 40' , $id='elm4', false );





  $this->Text('thumb', 'Thumb 400*270', false); 





 

  

    $this->Text('pagurl', 'Page Url ',false , null , "col-md-9");

 



        $this->loadSubmit();







        







      







    }















}