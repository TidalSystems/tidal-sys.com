<?php  class Form_PortfolioSearch extends Form_SuperForm {    

      public function init() {            

      $this->setMethod('get');       

 

        $modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'PortfolioCategories';
        $region = $this->createElement('select', 'PortfolioCatid');

        $region->setLabel('Select Category');
        $region->setAttrib('class', 'form-control col-md-12');
        $region->setRequired(TRUE);
        $region->addErrorMessage('required');
        $region->addMultiOption('all', '----------Select Category-----------');
        foreach ($modelBlocks->selectForArray(array()) as $values) {

            $region->addMultiOption($values['id'], $values['title']);

        } $this->addElement($region);

            







   





                 

	  $this->loadSubmit(); 

				

				

				  }

        }