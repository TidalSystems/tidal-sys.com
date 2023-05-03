<?php 

class Form_Cat extends Form_SuperForm {

    public function init() {
  
        
        $this->Text('title', 'Heaed Title ', true);
		
		 $this->TextErea('data', 'Description' ,    false );
        $this->Text('displayorder', 'Display Orde ', false);
 
         $this->Text('pagurl', 'Page URL ', false);
        $this->loadSubmit();



    }

}