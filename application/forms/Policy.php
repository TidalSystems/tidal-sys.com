<?php  class Form_Policy extends Form_SuperForm {   

 public function init() {     

    $this->Text('title', 'Title', false);	

   

 $this->loadSubmit();   
  }
  }