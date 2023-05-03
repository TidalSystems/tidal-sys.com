<?php 

class Form_Homefooter2 extends Form_SuperForm {

    public function init() {
        
    
        $this->Text('displayorder', 'Displayorder : ', false);
        $this->TextErea('footer', 'Services : ', false);
        $this->loadSubmit();
        
      
    }

}