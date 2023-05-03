<?php class Form_Social extends Form_SuperForm {
   public function init() {
             $this->Text('icons', 'Icons ', false  , null , "col-md-9"  , "display:none");  
 
      $this->Text('style', '', false  , null , "col-md-7" , "display:none");        

 $this->Text('Color', 'Color', false , null , "col-md-4");  


           $this->Text('Facebook', 'Facebook', false , null , "col-md-7");    
           $this->Text('Twitter', 'Twitter', false , null , "col-md-7");    
           $this->Text('Youtube', 'You Tube', false , null , "col-md-7"); 
           $this->Text('Googleplus', 'Google-plus', false , null , "col-md-7"); 
           $this->Text('Instagram', 'Instagram', false , null , "col-md-7"); 
           $this->Text('Linkedin', 'Linkedin', false , null , "col-md-7"); 
           $this->Text('Pinterest', 'Pinterest', false , null , "col-md-7"); 
           $this->Text('Telegram', 'Telegram', false , null , "col-md-7"); 
           $this->Text('Snapchat', 'Snapchat', false , null , "col-md-7"); 
           $this->Text('Tumblr', 'Tumblr', false , null , "col-md-7"); 
  
   $this->Text('allLinks', '', false , null ,   null  , "display:none"); 
  


           $this->Text('image', '', false);  
    	   $this->loadSubmit();   
 }
}