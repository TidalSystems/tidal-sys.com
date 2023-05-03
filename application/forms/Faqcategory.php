<?php 



class Form_Faqcategory extends Form_SuperForm {



    public function init() {

  
  $this->Text('title', 'Title', false,  null ,"col-md-12" , "" , "required"  ); 
   
		
 
        $this->loadSubmit();







    }



}