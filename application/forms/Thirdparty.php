<?php 

 
class Form_Thirdparty extends Form_SuperForm {

 
    public function init() {
 
     $this->Text('title', 'Title: ', false);


          $this->TextErea('data', 'Code' ,  '$rows = 40' , $id = 'elm-free', false );

 
	    $position = $this->createElement('select', 'position22');
		$position->setLabel('Position');
        $position->setRequired(TRUE);
        $position->setAttrib('class', 'form-control');
        $position->addMultiOption('', 'Select Position');
        $position->addMultiOption('In-between Head', 'In-between<head>...</head>');
        $position->addMultiOption('After Opening Body', 'After Opening Body <body>');
        $position->addMultiOption('Before closing Body', 'Before closing Body </body>');
        $position->setRequired(true); 
        $this->addElement($position);

	$this->loadSubmit(); 



}

}