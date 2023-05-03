<?php  class Form_Included extends Form_SuperForm {   

 public function init() {     

    $this->Text('title', 'Title', true);	

   

 $this->loadSubmit();   
  }
  }