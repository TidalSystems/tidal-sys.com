<?php

class Form_Faq extends Form_SuperForm {

    public function init() {

   
       $this->Text('title', 'Question En', true,  null ,"col-md-12" , "" , "required"  ); 

        $this->Text('titleAr', 'Question Ar', true,  null ,"col-md-12" , "" , "required"  );     

 

 
 	$this->TextErea('data', 'Answer En', '$rows = 40' , $id='elm2', false );

	 	$this->TextErea('dataAr', 'Answer Ar', '$rows = 40' , $id='elm3', false );
 

 

        $this->loadSubmit();

 

        

    }

}