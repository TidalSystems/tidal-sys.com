<?php  class Form_Clients extends Form_SuperForm {







    public function init() {

 

   

     $this->Text('title', 'Title', false,  null ,"col-md-12" , "" , "required"  ); 

     $this->Text('photo', 'Photo (300*300px)', false   ); 

 

 

      $this->Text('target', 'URL', false,  null ,"col-md-9" , "" , ""  ); 

        $this->loadSubmit();



 

		$this->loadSubmit();



    }







}



