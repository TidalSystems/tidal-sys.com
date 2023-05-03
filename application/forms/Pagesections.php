<?php 







class Form_PageSections extends Form_SuperForm {



 



    public function init() {



       $this->Text('title', 'Title', false,  null ,"col-md-12" , "" , "required"  ); 

$this->Text('titleAr', 'Title Ar ', false,  null ,"col-md-12" , "" , ""  ); 
 
 



 	$this->TextErea('description', 'Description En ', '$rows = 40' , $id='elm2', false );

	 	$this->TextErea('descriptionAr', 'Description Ar ', '$rows = 40' , $id='elm3', false );

      

    $this->text('Thumb', 'Photo (width 550px;)' , false);

  

  

$this->Text('pageid', '', false  , null , "col-md-7" , "display:none"); 



        $this->Text('branche', '', false  , null , "col-md-12" , "display:none");  
 



      $this->Text('style', '', false  , null , "col-md-7" , "display:none");        



 







        $this->loadSubmit();















        















      















    }































}