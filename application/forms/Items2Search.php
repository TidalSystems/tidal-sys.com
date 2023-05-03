<?php  class Form_Items2Search extends Form_SuperForm {    

      public function init() {            

      $this->setMethod('get');       

         



        $modelBlocks = new Model_PlusData();

        $where = null;  

        $modelBlocks->_name = 'country';

        $region = $this->createElement('select', 'countryid');

        $region->setLabel('Country ');

        $region->setRequired(TRUE);

        $region->addErrorMessage('required');

        $region->addMultiOption('', '----------Select Country-----------');

        foreach ($modelBlocks->selectForArray($where) as $values) {

            $region->addMultiOption($values['id'], $values['data']);

        } $this->addElement($region);

            







        $modelBlocks = new Model_PlusData();

      

        $modelBlocks->_name = 'city';

        $city = $this->createElement('select', 'cityid');

        $city->setLabel('City ');

        $city->setRequired(TRUE);

        $city->addErrorMessage('required');

        $city->addMultiOption('', '----------Select City-----------');

        foreach ($modelBlocks->selectForArray($where) as $values) {

            $city->addMultiOption($values['id'], $values['data']);

        } $this->addElement($city);





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