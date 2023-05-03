<?php  
class Form_Homepagesection extends Form_SuperForm {
 
    public function init() {

  $this->Text('title', 'Title under slider En ', false,  null ,"col-md-12" , "" , "required"  ); 
  $this->Text('titleAr', 'Title under slider Ar', false,  null ,"col-md-12" , "" , ""  ); 
 
	 

   $this->TextErea('TextUnderSlider', 'Description under Slider En', '$rows = 40' , $id='elm2', false );
      $this->TextErea('TextUnderSliderAr', 'Description under Slider Ar', '$rows = 40' , $id='elm3', false );
 
 $this->Text('Link2Title', 'Link2 Title En', false,  null ,"col-md-12" , "" , ""  ); 
 $this->Text('Link', 'Link URL En', false,  null ,"col-md-12" , "" , ""  ); 
 
  
 
    $this->Text('Experience1', 'Experience Title', false,  null ,"col-md-12" , "" , ""  ); 
  $this->Text('Experience2', 'Experience Number', false,  null ,"col-md-12" , "" , ""  ); 
  
 
   $this->Text('LinkTitle', 'Link Title En', false,  null ,"col-md-12" , "" , ""  ); 
  $this->Text('Link2', 'Link2 URL En', false,  null ,"col-md-12" , "" , ""  ); 
  
  
   $this->Text('t1', 'Title', false,  null ,"col-md-12" , "" , ""  ); 
  $this->Text('t11', 'Number', false,  null ,"col-md-12" , "" , ""  ); 

   $this->Text('t2', 'Title', false,  null ,"col-md-12" , "" , ""  ); 
  $this->Text('t22', 'Number', false,  null ,"col-md-12" , "" , ""  );


   $this->Text('t3', 'Title', false,  null ,"col-md-12" , "" , ""  ); 
  $this->Text('t33', 'Number', false,  null ,"col-md-12" , "" , ""  );

   $this->Text('t4', 'Title', false,  null ,"col-md-12" , "" , ""  ); 
  $this->Text('t44', 'Number', false,  null ,"col-md-12" , "" , ""  );


  $this->Text('LinkAr', 'URL Ar', false,  null ,"col-md-12" , "" , ""  ); 
 
 $this->Text('video', 'Video' , false,  null ,"col-md-12" , "" , ""  ); 


   $this->TextErea('Mission', 'Mission Slider En', '$rows = 40' , $id='elm5', false );
  $this->TextErea('MissionAr', 'Mission Ar', '$rows = 40' , $id='elm6', false );
 

 $this->Text('Photo1', 'Photo (435*579)', false,  null ,"col-md-4" , "" , ""  ); 

 $this->Text('Photo2', 'Photo2 (263*329)', false,  null ,"col-md-4" , "" , ""  ); 




  

  $this->Text('titleb1', 'Title' , false,  null ,"col-md-12" , "" , ""  ); 
  $this->Text('titleb2', 'Title' , false,  null ,"col-md-12" , "" , ""  ); 
  $this->Text('titleb3', 'Title' , false,  null ,"col-md-12" , "" , ""  ); 
  $this->Text('titleb4', 'Title' , false,  null ,"col-md-12" , "" , ""  ); 
  $this->Text('titleb5', 'Title' , false,  null ,"col-md-12" , "" , ""  ); 
  $this->Text('titleb6', 'Title' , false,  null ,"col-md-12" , "" , ""  ); 

 $this->Text('titleb7', 'Photo', false,  null ,"col-md-4" , "" , ""  ); 






 







		$this->loadSubmit();















    }































}















