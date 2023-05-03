<?php 

class Form_BlockSearch extends Form_SuperForm {

    public function init() {
       
        $this->setMethod('get');
        $modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'users';
        $lang = Func_Lang::getLang();
        $where = array('lang'=>$lang);
        
        $catid = $this->createElement('select', 'user_id');
        $catid->setLabel(' ');
        $catid->setRequired(TRUE);
        $catid->addErrorMessage('Fild Required');
        $catid->addMultiOption('[0]', '');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $catid->addMultiOption($values['id'], $values['username']);
        }
        $this->addElement($catid);
        
        
        $this->loadSubmit();

    }

}