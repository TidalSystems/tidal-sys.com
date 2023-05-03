<?php 

class Form_Plans extends Form_SuperForm {


    public function init() {


        $modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'country';
        $lang = Func_Lang::getLang();
        $where = array( );
        $catid = $this->createElement('select', 'countryid');
        $catid->setLabel('Select Country ');
        $catid->setRequired(TRUE);
        $catid->addErrorMessage('required');
        $catid->addMultiOption('', '----------Select Country-----------');
       
        foreach ($modelBlocks->selectForArray($where , array('country_name' => 'ASC')) as $values ) {
            if ($this->options['EditRow']['id'] == $values['id']) {
            } else {
                $catid->addMultiOption($values['id'], $values['country_name']);
            }
        } $catid->setRequired(true); $this->addElement($catid);
 


 $this->Text('Bronze', 'Bronze : ', false);

 $this->Text('Silver', 'Silver : ', false);

 $this->Text('Golden', 'Golden : ', false);
 				

 $this->loadSubmit();   



 }



}



















 