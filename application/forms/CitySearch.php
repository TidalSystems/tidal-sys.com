<?php 



class Form_CitySearch extends Form_SuperForm {



    public function init() {

       

        $this->setMethod('get');

        $modelBlocks = new Model_PlusData();

        $modelBlocks->_name = 'country';

        $lang = Func_Lang::getLang();

        $where = array('lang'=>$lang  );

        

        $catid = $this->createElement('select', 'countryid');

        $catid->setLabel('Select Country .');

        $catid->setRequired(TRUE);

        $catid->addErrorMessage('Fild Required');

        $catid->addMultiOption('[0]', '----------Select Country-----------');

        foreach ($modelBlocks->selectForArray($where) as $values) {
if($values['country_name'] != 'Multi-Country') {

            $catid->addMultiOption($values['id'], $values['country_name']);
}
        }

        $this->addElement($catid);

		

		$modelBlocks = new Model_PlusData();

        $modelBlocks->_name = 'city';

		  $city = $this->createElement('select', 'cityid');

        $city->setLabel('Select City ');

        $city->setRequired(TRUE);

        $city->addErrorMessage('Fild Required');

        $city->addMultiOption('[0]', '----------Select City-----------');

        foreach ($modelBlocks->selectForArray($where) as $values) {

            $city->addMultiOption($values['id'], $values['title']);

        }

        $this->addElement($city);

        

        

        $modelBlocks = new Model_PlusData();

        $modelBlocks->_name = 'region';

        $region = $this->createElement('select', 'regionid');

        $region->setLabel('Region ');

        $region->setRequired(TRUE);

        $region->addErrorMessage('required');

        $region->addMultiOption('', '----------Select Region-----------');

        foreach ($modelBlocks->selectForArray($where) as $values) {

            $region->addMultiOption($values['id'], $values['title']);

        } $this->addElement($region);

	   

        

        $this->loadSubmit();



    }



}