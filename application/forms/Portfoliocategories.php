<?php  
class Form_Portfoliocategories extends Form_SuperForm {
     public function init() {
   
     $this->Text('title', 'Title En', false,  null ,"col-md-12" , "" , "required"  ); 
         $this->Text('titleAr', 'Title Ar', false,  null ,"col-md-12" , "" , ""  );
      $this->Text('Thumb', 'Thumb', false );
     $this->Text('pagurl', 'Page Url ',false , null , "col-md-9");
        $this->loadSubmit();







    }



}