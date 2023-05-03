<?php 
 
class Form_Contactform extends Form_SuperForm {

    public function init() {
        
        
      
     $this->Text('email1', 'Email 1: ', false);
    $this->Text('email2', 'Email 2: ', false);
    $this->Text('subject', 'Subject: ', false);

 
     $this->Text('subjectreplay', 'Auto Replay Subject ', false);  

     $this->TextErea('data', 'Auto Replay Email Content ', false);
   
 							
							$this->loadSubmit();   
 }
}




 