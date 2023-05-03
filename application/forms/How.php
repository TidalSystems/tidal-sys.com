<?php 
 
class Form_How extends Form_SuperForm {

    public function init() {
        
        
        
        $this->Text('title', 'Header Title : ', true);
		   
 $this->Text('displayorder', 'Display Order : ', false);
        $this->TextErea2('data',  'Conteent', '$rows = 20' , $id = 'elm1', false );
             
							
							$this->loadSubmit();   
 }
}




 