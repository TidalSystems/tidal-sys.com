<?php 



class Form_City2Search extends Form_SuperForm {



    public function init() {

       

        $this->setMethod('get');

        $modelBlocks = new Model_PlusData();

        $modelBlocks->_name = 'city';

        $lang = Func_Lang::getLang();

        $where = array('lang'=>$lang , 'data5'=> 'Egypt' );

        

        $catid = $this->createElement('select', 'cityid');

        $catid->setLabel('Select City ');

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