<?php 

 
class Form_Offerclosemesgdefault extends Form_SuperForm {

 
    public function init() {


   $this->Text('data', 'Default Message for End the Offer ' ,  false );

 


	$this->loadSubmit(); 



}

}