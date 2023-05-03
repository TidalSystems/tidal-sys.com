<?php 

 

class Form_Stories extends Form_SuperForm {



    public function init() {



        $this->Text('title', ' Title : ', true);

        $this->Text('signature', ' Signature  ', false);

	

        $this->Text('datepicker', ' Date : ', false);

        $this->TextErea('data',  'Description',   false );
 $this->Text('pagurl', 'page URL ', false); 
	

        $this->Text('thumb', 'Photo dimension: 300 Width x 300 Height', false);

		   
	    
 

							$this->loadSubmit();   

 }

}









 