<?php 

class Form_Items2 extends Form_SuperForm {    

public function init() {                 



        

           

        $modelBlocks = new Model_PlusData();

      $where = null;  

        $modelBlocks->_name = 'country';

        $country = $this->createElement('select', 'countryid');

        $country->setLabel('Country ');

        $country->setRequired(TRUE);

        $country->addErrorMessage('required');

        $country->addMultiOption('', '----------Select Country-----------');

        foreach ($modelBlocks->selectForArray($where) as $values) {

            $country->addMultiOption($values['id'], $values['data']);

        } $this->addElement($country);









        $modelBlocks = new Model_PlusData();

        $modelBlocks->_name = 'city';

        $city = $this->createElement('select', 'cityid');

        $city->setLabel('Cites ');

        $city->setRequired(TRUE);

        $city->addErrorMessage('required');

        $city->addMultiOption('', '----------Select City-----------');

        foreach ($modelBlocks->selectForArray($where) as $values) {

            $city->addMultiOption($values['id'], $values['title']);

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





 



			$this->Text('title', 'Hotel Name ', true);



			$this->TextErea('description',  'Description',    false  ); 



				  

        

  $this->Text('table_image', 'Photo dimension: 855 Width x 345 Height', false); 



		    $this->TextErea('rooms',  'Rooms',  '$rows = 40' , $id = 'elm3', false ); 

		    $this->TextErea('facilities',  'Facilities',  '$rows = 40' , $id = 'elm2', false ); 

		    $this->TextErea('resturant',  'Resturant',  '$rows = 40' , $id = 'elm5', false ); 

            $this->TextErea('amenities',  'Amenities', '$rows = 40' , $id = 'elm6', false ); 

           



           $username = $this->createElement('text', 'data5');

           $this->addElement($username); 



  $username2 = $this->createElement('text', 'data55');

           $this->addElement($username2); 



$this->Text('pagurl', 'Page URL ', false);



       



           

   



         







  

        $submit = $this->createElement('submit', 'save');

        $submit->setLabel('Save');

        $submit->setDecorators($this->loadDecoration('submit'));

        $submit->setAttrib('class', 'buttons btn btn-default big');

        $this->addElement($submit);





		   

}

}