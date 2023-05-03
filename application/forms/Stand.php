<?php 

class Form_Stand extends Form_SuperForm {
    public function init() {
 

     $this->Text('title', 'Title ',true , null , "col-md-9");
 
	    $modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'label';
        $label = $this->createElement('select', 'label');
        $label->setLabel('Label');
        $label->setRequired(FALSE);
        $label->addErrorMessage('required');
        $label->addMultiOption('', '---------- No Label-----------');
        foreach ($modelBlocks->selectForArray( ) as $values) {
            $label->addMultiOption($values['id'], $values['title']);
        } $this->addElement($label);
  
        $this->Text('Img', 'Photo ' ,  false );
 
 
					



							$this->loadSubmit();   



 }



}



















 