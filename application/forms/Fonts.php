<?php 

class Form_Fonts extends Form_SuperForm {

    public function init() {

 
     $this->Text('title', 'Title ',true , null , "col-md-9"); 
  
 
   $this->upload('Img', 'jpg,jpeg,png,gif ', ' Font');
					

 

 



        $this->loadSubmit();















    }







}