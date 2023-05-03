<?php  class Form_Productscategories extends Form_SuperForm {



    public function init() {

  
  $this->Text('title', 'Title', false,  null ,"col-md-12" , "" , "required"  ); 
  
      

       $this->Text('Header', 'Header (1200*245)', false ); 
        $this->Text('Thumb', 'Thumb (350*350) ', false ); 
			$this->TextErea('Data', 'Description', '$rows = 40' , $id='elm2', false );
  $this->Text('pagurl', 'Page URL', false,  null ,"col-md-10" , "" , ""   , "" ); 
 
        $this->loadSubmit();







    }



}