<?php 



class Form_Quotes extends Form_SuperForm {



    public function init() {

       
 



        $this->Text('title', 'Title', false);
         $this->Text('signature', ' Signature  ', false);
	 

        $this->loadSubmit();



    }



}