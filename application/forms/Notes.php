<?php  class Form_Notes extends Form_SuperForm {   

 public function init() {     

    $this->Text('title', 'Title', false);	

   

 $this->loadSubmit();   
  }
  }