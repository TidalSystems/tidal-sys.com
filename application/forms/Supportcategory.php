<?php  class Form_Supportcategory extends Form_SuperForm {

    public function init() {



     $this->Text('title', 'Title En', false,  null ,"col-md-12" , "" , "required"  ); 

         $this->Text('titleAr', 'Title Ar', false,  null ,"col-md-12" , "" , ""  );

 
 

		

 

        $this->loadSubmit();















    }







}