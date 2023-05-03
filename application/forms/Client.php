<?php 
 
class Form_Client extends Form_SuperForm {

    public function init() {
        $this->Text('title', 'Title   ', true);
		  
			      
			 
        $this->Upload('table_image', 'jpg,png,gif,jpeg', 'Image  ');
        $this->Text('displayorder', 'Display Order   ', false);
 

 

		$this->loadSubmit();
    }

}