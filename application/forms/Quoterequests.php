<?php class Form_Quoterequests extends Form_SuperForm {

    public function init() {

     $this->Text('created_on', 'Date', false,  null ,"col-md-4" , "" , ""  ); 
  $this->Text('title', 'Name', false,  null ,"col-md-8" , "" , "required"  ); 
  $this->Text('email', 'Email', false,  null ,"col-md-8" , "" , ""  ); 
 

 
        $services = $this->createElement('select', 'services');
		$services->setLabel('Services');
        $services->setRequired(false);
        $services->setAttrib('class' , 'form-control col-md-5');
        $services->addMultiOption('', 'Select');
        $services->addMultiOption('Plumbing Repair/Installation', 'Plumbing Repair/Installation');
        $services->addMultiOption('Heating Repair/Installation', 'Heating Repair/Installation');
        $services->addMultiOption('Oil to Gas Conversions', 'Oil to Gas Conversions');
        $services->addMultiOption('Drains/Sewer Repair', 'Drains/Sewer Repair');
        $services->addMultiOption('Renovations', 'Renovations');
        $services->addMultiOption('Sump Pump', 'Sump Pump');    
        $services->addMultiOption('Emergency Services', 'Emergency Services');   
        $services->setRequired(false);
        $this->addElement($services);

 

	$message = $this->createElement('textarea', 'help');

		$message->setRequired(false);

        $message->setAttrib('class','  extarea-message hight-82 form-control');

        $message->setAttrib('rows','5');

        $message->setAttrib('placeholder','How may we help you?');

		$message->addErrorMessage('Filed Required');

		$this->addElement($message);




	}

}