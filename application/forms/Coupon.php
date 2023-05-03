<?php 

 

class Form_Coupon extends Form_SuperForm {



    public function init() {

        

        

       $this->Text('title', 'Offer title 1', true);  

       $this->Text('title2', 'Offer title 2', false);  
 
      
     
       $this->TextErea('data1', 'Description ' ,  '$rows = 40' , $id = 'elm111', false );  
        $this->TextErea('data2', 'Details  ',  '$rows = 40' , $id = 'elm1', false );  

		  
        $this->Text('thumb', 'Photo dimension: 400 Width x 250 Height ', false); 
 
 $this->Text('pagurl', 'page URL ', false); 
	



 

			    

							

							$this->loadSubmit();   

 }

}