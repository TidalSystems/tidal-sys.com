<?php







class Form_Certificates extends Form_SuperForm {







    public function init() {



       



 

     $this->Text('Name', 'Name En', false , null , "col-md-6"); ;      

	      $this->Text('NameAr', 'Name Ar', false , null , "col-md-6"); ;      

		       $this->Text('NameFr', 'Name Fr', false , null , "col-md-6"); ;      

 

     $this->Text('thumb', 'Photo (500*500)', false  , null , "col-md-4");   



 $this->TextErea('Details', 'Details En', '$rows = 40' , $id='elm2', false );

  $this->TextErea('DetailsAr', 'Details Ar', '$rows = 40' , $id='elm3', false );

   $this->TextErea('DetailsFr', 'Details Fr', '$rows = 40' , $id='elm4', false );

 

        $this->loadSubmit();



    }



}

