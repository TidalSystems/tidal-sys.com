<?php  class Form_Items7Search extends Form_SuperForm {    

      public function init() {            

      $this->setMethod('get');       

         



        $modelBlocks = new Model_PlusData();

        $where = null;  

        $modelBlocks->_name = 'region';

        $region = $this->createElement('select', 'regionid');

        $region->setLabel('Regions ');

        $region->setRequired(TRUE);

        $region->addErrorMessage('required');

        $region->addMultiOption('', '----------Select Region-----------');

        foreach ($modelBlocks->selectForArray($where) as $values) {

            $region->addMultiOption($values['id'], $values['title']);

        } $this->addElement($region);

            







        $modelBlocks = new Model_PlusData();

      

        $modelBlocks->_name = 'country';

        $country = $this->createElement('select', 'countryid');

        $country->setLabel('Country ');

        $country->setRequired(TRUE);

        $country->addErrorMessage('required');

        $country->addMultiOption('', '----------Select Country-----------');

        foreach ($modelBlocks->selectForArray($where) as $values) {

            $country->addMultiOption($values['id'], $values['data']);

        } $this->addElement($country);







	   







                 

	  $this->loadSubmit(); 

				

				

				  }

        }