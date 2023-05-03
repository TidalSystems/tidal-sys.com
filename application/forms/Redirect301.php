<?php

class Form_Redirect301 extends Form_SuperForm {

    public function init() {

    $this->Text('title', 'Old URL', true , null ,"col-md-12" , "" , "required"  ); 
 
    $this->Text('new', 'New URL', true , null ,"col-md-12" , "" , "required"  ); 
 

 

        $this->loadSubmit();

 

        

    }

}