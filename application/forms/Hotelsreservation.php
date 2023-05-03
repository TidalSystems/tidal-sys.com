<?php 

class Form_Hotelsreservation  extends Form_SuperForm

{

	public function init()

	{

	

		$name = $this->createElement('text', 'name');
        $name->setAttrib('class','input-name form-control');
        $name->setAttrib('placeholder','Hotel Name');
 
		$name->setRequired(TRUE);
    	$name->addErrorMessage('Filed Required');
		
		$this->addElement($name);


    	$number = $this->createElement('text', 'number');
        $number->setAttrib('class','input-name form-control');
        $number->setAttrib('placeholder','Number of Room');
 
		$number->setRequired(TRUE);
    	$number->addErrorMessage('Filed Required');
		
		$this->addElement($number);
		  

		$phone = $this->createElement('text', 'phone');
        $phone->setAttrib('class','input-name form-control');
        $phone->setAttrib('placeholder','Phone');

		$phone->setRequired(TRUE);

 		$phone->addErrorMessage('Filed Required');

		$this->addElement($phone);

		

	 	 $view = $this->createElement('select', 'view');
         $view->setRequired(FALSE);
         $view->addMultiOption(' ', 'Select View');
		 $view->addMultiOption('Standard garden view', 'Standard garden view');
		 $view->addMultiOption('Pool view', 'Pool view');
		 $view->addMultiOption('Sea side view  ', 'Sea side view  ');
		 $view->addMultiOption('Beach front  ', 'Beach front  ');
		 $view->addMultiOption('Sea and pool view  ', 'Sea and pool view  ');
		 $view->addMultiOption('Nile view  ', 'Nile view  ');
         $view->setRequired(false);
         $this->addElement($view);

    	$email = $this->createElement('text', 'email');
        $email->setAttrib('class','input-name form-control');
        $email->setAttrib('placeholder','E-mail ');
		$email->setRequired(TRUE);
		$email->addValidator('EmailAddress');
		$email->addErrorMessage('Filed Required');
		$this->addElement($email);




		$fullname = $this->createElement('text', 'fullname');
        $fullname->setAttrib('class','input-name form-control');
        $fullname->setAttrib('placeholder','Full Name ');
 		$fullname->setRequired(TRUE);
    	$fullname->addErrorMessage('Filed Required');
		$this->addElement($fullname);

	     $meals = $this->createElement('select', 'meals');
         $meals->setRequired(FALSE);
         $meals->addMultiOption(' ', 'Select Meals');
		 $meals->addMultiOption('Bed only  ', 'Bed only  ');
		 $meals->addMultiOption('Bed & Breakfast ', 'Bed & Breakfast ');
		 $meals->addMultiOption('Half board ', 'Half board ');
 		 $meals->addMultiOption('Full board ', 'Full board');
 		 $meals->addMultiOption('Soft all inclusive ', 'Soft all inclusive ');
 		 $meals->addMultiOption('Hard all inclusive ', 'Hard all inclusive ');
 		 $meals->addMultiOption('Ultra all inclusive ', 'Ultra all inclusive ');
 	  

         $meals->setRequired(false);
         $this->addElement($meals);


 



	 	 $special = $this->createElement('select', 'special');
         $special->setRequired(FALSE);
         $special->addMultiOption(' ', 'Select Special Requirements');
		 $special->addMultiOption('Honeymooners', 'Honeymooners');
		 $special->addMultiOption('Birthday arrangements', 'Birthday arrangements');
		 $special->addMultiOption('Wedding anniversary', 'Wedding anniversary');
         $special->setRequired(false);
         $this->addElement($special);



	 	 $room = $this->createElement('select', 'room');
         $room->setRequired(FALSE);
         $room->addMultiOption(' ', 'Select Room ');
		 $room->addMultiOption('Single ', 'Single ');
		 $room->addMultiOption('Double ', 'Double');
		 $room->addMultiOption('Triple ', 'Triple ');
		 $room->addMultiOption('Family room ', ' Family room');
		 $room->addMultiOption('Junior suite ', 'Junior suite ');
		 $room->addMultiOption('Club suiteor Executive suite  ', 'Club suiteor Executive suite  ');
		 $room->addMultiOption('Ambassador suite   ', 'Ambassador suite   ');
		 $room->addMultiOption('Presidential suite or Royal suite  ', 'Presidential suite or Royal suite  ');
		

         $room->setRequired(false);
         $this->addElement($room);



	     $roomother = $this->createElement('select', 'roomother');
         $roomother->setRequired(FALSE);
         $roomother->addMultiOption(' ', 'Select other Room Requirements ');
		 $roomother->addMultiOption('Extra bed ', 'Extra bed ');
		 $roomother->addMultiOption('Baby cot  ', 'Baby cot  ');
		 $roomother->addMultiOption('King size bed ', 'King size bed ');
		 $roomother->addMultiOption('Twin beds ', 'Twin beds ');
		 $roomother->addMultiOption('Nile level cabin  ', 'Nile level cabin  ');
		 $roomother->addMultiOption('Main deck cabin  ', 'Main deck cabin  ');
		 $roomother->addMultiOption('Upper deck Cabin ', 'Upper deck Cabin  ');
		

         $roomother->setRequired(false);
         $this->addElement($roomother);
		

		$message = $this->createElement('textarea', 'message');
		$message->setRequired(FALSE);
        $message->setAttrib('class','  extarea-message hight-82 form-control');
        $message->setAttrib('rows','10');
        $message->setAttrib('placeholder','Others');
		$message->addErrorMessage('Filed Required');
		$this->addElement($message);



                 $this->setElementDecorators(array('ViewHelper',

            'Description',

            'Errors'));

		

		

	}

}