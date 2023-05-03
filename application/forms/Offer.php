<?php  
class Form_Offer extends Form_SuperForm



{



	public function init()



	{   

 
	$this->Text('data', 'Title 1',  null ,''  , "col-md-9" );
 
 
 	$this->TextErea('data1', 'Title 2', '$rows = 40' , $id='elm-free', false ); 

       

   $this->upload('image', 'jpg,jpeg,png,gif ', ' Image');





                $this->loadSubmit();

				 

	}



	



}