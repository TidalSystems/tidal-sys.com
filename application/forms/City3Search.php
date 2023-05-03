<?php 

class Form_City3Search extends Form_SuperForm {

    public function init() {
       
        $this->setMethod('get');
        $modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'region';
        $lang = Func_Lang::getLang();
        $where = array('lang'=>$lang   );
        
        $catid = $this->createElement('select', 'regionid');
        $catid->setLabel('Select Region ');
        $catid->setRequired(TRUE);
        $catid->addErrorMessage('Fild Required');
        $catid->addMultiOption('[0]', '');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $catid->addMultiOption($values['id'], $values['title']);
        }
        $this->addElement($catid);
        
        
        $this->loadSubmit();

    }

}