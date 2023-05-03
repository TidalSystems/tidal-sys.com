<?php  class Form_Excluded extends Form_SuperForm {   

 public function init() {     

    $this->Text('title', 'Title', false);	

   

 $this->loadSubmit();   
  }
  }