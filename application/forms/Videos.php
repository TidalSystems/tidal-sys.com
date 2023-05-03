<?php 



class Form_Videos extends Form_SuperForm {

    public function init() {





        $this->Text('title', 'Title En', false  , null , "col-md-7");  

   $this->Text('titleAr', 'Title Ar' , false  , null , "col-md-7");

      $this->Text('titleFr', 'Title Fr' , false  , null , "col-md-7");

      $this->Text('video', 'Video ' , false ,  null ,"col-md-7");  





     

   



	 $this->loadSubmit();



    }







}



