<?php class Form_Deposit extends Form_SuperForm {    
public function init() {                 

 $modelBlocks = new Model_PlusData();        


   

			$this->Text('title', 'Package  Name ', true); 
 $this->Text('rates',  'Booking Number',   false );
   
		 $this->Text('prize', 'Price ', false); 
			$this->TextErea('description',  'Description',    false  ); 

		 
      
  

   

         $this->Text('pagurl', 'Page URL :  deposit/ ', false);



  
        $submit = $this->createElement('submit', 'save');
        $submit->setLabel('Save');
        $submit->setDecorators($this->loadDecoration('submit'));
        $submit->setAttrib('class', 'buttons btn btn-default big');
        $this->addElement($submit);


		   
}
}