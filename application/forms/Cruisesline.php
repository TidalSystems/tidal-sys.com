<?php  
class Form_Cruisesline extends Form_SuperForm
{

	public function init()
	{   

 
  $this->Text('Name', 'Name',false , null , "col-md-9");
   $this->upload('Logo', 'jpg,jpeg,png,gif ', ' Logo');
                $this->loadSubmit();

				 

	}



	



}