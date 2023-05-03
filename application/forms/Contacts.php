<?php 
 
class Form_Contacts extends Form_SuperForm {

    public function init() {
        
        
        
        $this->Text('title', ' Title : ', true);
		   
 $this->Text('displayorder', 'Display Order : ', false);
        $this->TextErea('data',  'Content',   false );
        

			       
							
							$this->loadSubmit();   
 }
}




 