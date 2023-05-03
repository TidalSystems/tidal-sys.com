<?php 
 
class Form_Sliderdata extends Form_SuperForm {

    public function init() {
        
        
          $this->Text('titel', 'Titel ', false);  
            $this->TextErea('data', 'Content ', false);  
      
		  $this->Text('displayorder', 'Displayorder ', false);  
	 
		$this->loadSubmit();
    }

}
