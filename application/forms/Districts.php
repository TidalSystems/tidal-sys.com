<?php 

class Form_Districts extends Form_SuperForm {
    public function init() {
 

 $this->Text('Name', 'Title ',true , null , "col-md-9"); 
 
 
 $modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'country';
        $lang = Func_Lang::getLang();
        $where = array( );
        $catid = $this->createElement('select', 'countryid');
        $catid->setLabel('Select Country ');
        $catid->setRequired(false);
        $catid->addErrorMessage('required');
        $catid->addMultiOption('', '----------Select Country-----------');

        foreach ($modelBlocks->selectForArray($where) as $values) {
            if ($this->options['EditRow']['id'] == $values['id']) {
            } else {
                $catid->addMultiOption($values['id'], $values['country_name']);
            }
        } $catid->setRequired(false); $this->addElement($catid);
 

     
 $this->Text('cityid', '',false , null , "col-md-9" , "display:none"); 
							$this->loadSubmit();   



 }



}



















 