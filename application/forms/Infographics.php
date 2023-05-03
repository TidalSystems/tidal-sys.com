<?php 

class Form_Infographics extends Form_SuperForm {
    public function init() {


        $this->Text('title', 'Title', true  , null , "col-md-7");  
        $this->Text('thumb', 'photo ' , false ,  null ,"col-md-7");  
        $this->Text('FlyerPDF', 'PDF',false );

		$show_form22 = $this->createElement('select', 'type2');
		$show_form22->setLabel('Type');
        $show_form22->setRequired(TRUE);
        $show_form22->addMultiOption('Destinations', 'Destinations');
        $show_form22->addMultiOption('Packages', 'Packages');
        $show_form22->setRequired(true);
        $this->addElement($show_form22);


		
$modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'country';
        $country = $this->createElement('select', 'countryid');
        $country->setLabel('Country ');
        $where = null; 
        $country->setRequired(false);
 
        $country->addErrorMessage('required');
        $country->addMultiOption('8888888888888888', '----------Select Country-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $country->addMultiOption($values['id'], $values['country_name']);
        } $this->addElement($country);

 $this->Text('packagesid', 'Packages ' , false ,  null ,"col-md-7" , "display:none" );  

   
   

	 $this->loadSubmit();

    }



}

