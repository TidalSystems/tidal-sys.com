<?php 
class Form_Order  extends Form_SuperForm

{

	public function init()

	{

	
 
 

    	$ordernumber = $this->createElement('text', 'ordernumber');
		$this->addElement($ordernumber);


		$font = $this->createElement('text', 'order1010');
		$this->addElement($font);


		$status = $this->createElement('text', 'status');
		$this->addElement($status);




		$created_on = $this->createElement('text', 'created_on');
		$this->addElement($created_on);


		$time = $this->createElement('text', 'time');
		$this->addElement($time);


 		$name = $this->createElement('text', 'name');
		$this->addElement($name);

 		$phone = $this->createElement('text', 'phone');
		$this->addElement($phone);
 

 		$email = $this->createElement('text', 'email');
		$this->addElement($email);

 
 
							

							$this->loadSubmit();   

 }

}








