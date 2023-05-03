<?php   class Form_Mealscategories extends Form_SuperForm {



    public function init() {

  
  $this->Text('title', 'Title En', false,  null ,"col-md-12" , "" , "required"  ); 
  $this->Text('titleAr', 'Title Ar', true,  null ,"col-md-12" , "" , " "  );  	
 
     $this->Text('pagurl', 'Page URL', false,  null ,"col-md-6"    ); 


        $this->loadSubmit();







    }



}