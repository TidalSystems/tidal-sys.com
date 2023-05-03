<?php 
class Form_Itemsex extends Form_SuperForm {    
public function init() {                 

 $modelBlocks = new Model_PlusData();        


    
     




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
		
		
		$modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'city';
        $city = $this->createElement('select', 'cityid');
        $city->setLabel('Country ');
        $city->setRequired(FALSE);
        $city->addErrorMessage('required');
        $city->addMultiOption('', '----------Select City-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $city->addMultiOption($values['id'], $values['title']);
        } $this->addElement($city);


  












        $modelBlocks = new Model_PlusData();
        $where = null;  
        $modelBlocks->_name = 'region';
        $region2 = $this->createElement('select', 'regionid2');
        $region2->setLabel('Regions ');
        $region2->setRequired(FALSE);
        $region2->addErrorMessage('required');
        $region2->addMultiOption('', '----------Select Region-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $region2->addMultiOption($values['id'], $values['title']);
        } $this->addElement($region2);
            



        $modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'country';
        $country2 = $this->createElement('select', 'countryid2');
        $country2->setLabel('Country ');
        $country2->setRequired(FALSE);
        $country2->addErrorMessage('required');
        $country2->addMultiOption('', '----------Select Country-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $country2->addMultiOption($values['id'], $values['data']);
        } $this->addElement($country2);



 
       $this->Text('cityidid2',  'cityid2',    false ); 




        $modelBlocks = new Model_PlusData();
        $where = null;  
        $modelBlocks->_name = 'region';
        $region1 = $this->createElement('select', 'regionid1');
        $region1->setLabel('Regions ');
        $region1->setRequired(FALSE);
        $region1->addErrorMessage('required');
        $region1->addMultiOption('', '----------Select Region-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $region1->addMultiOption($values['id'], $values['title']);
        } $this->addElement($region1);
              
            
        $modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'country';
        $country1 = $this->createElement('select', 'countryid1');
        $country1->setLabel('Country ');
        $country1->setRequired(FALSE);
        $country1->addErrorMessage('required');
        $country1->addMultiOption('', '----------Select Country-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $country1->addMultiOption($values['id'], $values['data']);
        } $this->addElement($country1);
        
       $this->Text('cityidid1',  'cityid1',    false );



        $modelBlocks = new Model_PlusData();
        $where = null;  
        $modelBlocks->_name = 'region';
        $region4 = $this->createElement('select', 'regionid4');
        $region4->setLabel('Regions ');
        $region4->setRequired(FALSE);
        $region4->addErrorMessage('required');
        $region4->addMultiOption('', '----------Select Region-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $region4->addMultiOption($values['id'], $values['title']);
        } $this->addElement($region4);
              
            
        $modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'country';
        $country4 = $this->createElement('select', 'countryid4');
        $country4->setLabel('Country ');
        $country4->setRequired(FALSE);
        $country4->addErrorMessage('required');
        $country4->addMultiOption('', '----------Select Country-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $country4->addMultiOption($values['id'], $values['data']);
        } $this->addElement($country4);
        
       $this->Text('cityidid4',  'cityid4',    false );



        $modelBlocks = new Model_PlusData();
        $where = null;  
        $modelBlocks->_name = 'region';
        $region5 = $this->createElement('select', 'regionid5');
        $region5->setLabel('Regions ');
        $region5->setRequired(FALSE);
        $region5->addErrorMessage('required');
        $region5->addMultiOption('', '----------Select Region-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $region5->addMultiOption($values['id'], $values['title']);
        } $this->addElement($region5);
              
            
        $modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'country';
        $country5 = $this->createElement('select', 'countryid5');
        $country5->setLabel('Country ');
        $country5->setRequired(FALSE);
        $country5->addErrorMessage('required');
        $country5->addMultiOption('', '----------Select Country-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $country5->addMultiOption($values['id'], $values['data']);
        } $this->addElement($country5);
        
       $this->Text('cityidid5',  'cityid5',    false );



        $modelBlocks = new Model_PlusData();
        $where = null;  
        $modelBlocks->_name = 'region';
        $region6 = $this->createElement('select', 'regionid6');
        $region6->setLabel('Regions ');
        $region6->setRequired(FALSE);
        $region6->addErrorMessage('required');
        $region6->addMultiOption('', '----------Select Region-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $region6->addMultiOption($values['id'], $values['title']);
        } $this->addElement($region6);
              
            
        $modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'country';
        $country6 = $this->createElement('select', 'countryid6');
        $country6->setLabel('Country ');
        $country6->setRequired(FALSE);
        $country6->addErrorMessage('required');
        $country6->addMultiOption('', '----------Select Country-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $country6->addMultiOption($values['id'], $values['data']);
        } $this->addElement($country6);
        
       $this->Text('cityidid6',  'cityid6',    false );



        $modelBlocks = new Model_PlusData();
        $where = null;  
        $modelBlocks->_name = 'region';
        $region7 = $this->createElement('select', 'regionid7');
        $region7->setLabel('Regions ');
        $region7->setRequired(FALSE);
        $region7->addErrorMessage('required');
        $region7->addMultiOption('', '----------Select Region-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $region7->addMultiOption($values['id'], $values['title']);
        } $this->addElement($region7);
              
            
        $modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'country';
        $country7 = $this->createElement('select', 'countryid7');
        $country7->setLabel('Country ');
        $country7->setRequired(FALSE);
        $country7->addErrorMessage('required');
        $country7->addMultiOption('', '----------Select Country-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $country7->addMultiOption($values['id'], $values['data']);
        } $this->addElement($country7);
        
       $this->Text('cityidid7',  'cityid7',    false );



        $modelBlocks = new Model_PlusData();
        $where = null;  
        $modelBlocks->_name = 'region';
        $region8 = $this->createElement('select', 'regionid8');
        $region8->setLabel('Regions ');
        $region8->setRequired(FALSE);
        $region8->addErrorMessage('required');
        $region8->addMultiOption('', '----------Select Region-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $region8->addMultiOption($values['id'], $values['title']);
        } $this->addElement($region8);
              
            
        $modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'country';
        $country8 = $this->createElement('select', 'countryid8');
        $country8->setLabel('Country ');
        $country8->setRequired(FALSE);
        $country8->addErrorMessage('required');
        $country8->addMultiOption('', '----------Select Country-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $country8->addMultiOption($values['id'], $values['data']);
        } $this->addElement($country8);
        
       $this->Text('cityidid8',  'cityid8',    false );




        $modelBlocks = new Model_PlusData();
        $where = null;  
        $modelBlocks->_name = 'region';
        $region9 = $this->createElement('select', 'regionid9');
        $region9->setLabel('Regions ');
        $region9->setRequired(FALSE);
        $region9->addErrorMessage('required');
        $region9->addMultiOption('', '----------Select Region-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $region9->addMultiOption($values['id'], $values['title']);
        } $this->addElement($region9);
              
            
        $modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'country';
        $country9 = $this->createElement('select', 'countryid9');
        $country9->setLabel('Country ');
        $country9->setRequired(FALSE);
        $country9->addErrorMessage('required');
        $country9->addMultiOption('', '----------Select Country-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $country9->addMultiOption($values['id'], $values['data']);
        } $this->addElement($country9);
        
       $this->Text('cityidid9',  'cityid9',    false );




        $modelBlocks = new Model_PlusData();
        $where = null;  
        $modelBlocks->_name = 'region';
        $region10 = $this->createElement('select', 'regionid10');
        $region10->setLabel('Regions ');
        $region10->setRequired(FALSE);
        $region10->addErrorMessage('required');
        $region10->addMultiOption('', '----------Select Region-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $region10->addMultiOption($values['id'], $values['title']);
        } $this->addElement($region10);
              
            
        $modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'country';
        $country10 = $this->createElement('select', 'countryid10');
        $country10->setLabel('Country ');
        $country10->setRequired(FALSE);
        $country10->addErrorMessage('required');
        $country10->addMultiOption('', '----------Select Country-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $country10->addMultiOption($values['id'], $values['data']);
        } $this->addElement($country10);
        
       $this->Text('cityidid10',  'cityid10',    false );












        $modelBlocks = new Model_PlusData();
        $where = null;  
        $modelBlocks->_name = 'region';
        $region3 = $this->createElement('select', 'regionid3');
        $region3->setLabel('Regions ');
        $region3->setRequired(FALSE);
        $region3->addErrorMessage('required');
        $region3->addMultiOption('', '----------Select Region-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $region3->addMultiOption($values['id'], $values['title']);
        } $this->addElement($region3);
            



        $modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'country';
        $country3 = $this->createElement('select', 'countryid3');
        $country3->setLabel('Country ');
        $country3->setRequired(FALSE);
        $country3->addErrorMessage('required');
        $country3->addMultiOption('', '----------Select Country-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $country3->addMultiOption($values['id'], $values['data']);
        } $this->addElement($country3);



 
       $this->Text('cityidid3',  'cityid3',    false ); 


	    $modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'packagetype';
        $packagetype = $this->createElement('select', 'packagetype');
        $packagetype->setLabel('Package Type ');
        $packagetype->setRequired(TRUE);
        $packagetype->addErrorMessage('required');
        $packagetype->addMultiOption('', '---------- Package Type -----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $packagetype->addMultiOption(($values['id'].'||'.$values['title2'] )  , $values['title']);
        } $this->addElement($packagetype);




 

  $is_active3o = $this->createElement('checkbox','offerid'); 
  $is_active3o->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $is_active3o->setLabel('Deals & Offers');        
  $is_active3o->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($is_active3o); 



	$this->Text('offertitle', 'Offer Title', false);  

	    $modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'label';
        $label = $this->createElement('select', 'labelid');
        $label->setLabel('Label');
        $label->setRequired(FALSE);
        $label->addErrorMessage('required');
        $label->addMultiOption('', '---------- Label-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $label->addMultiOption($values['id'], $values['title']);
        } $this->addElement($label);



        $daynumber = $this->createElement('select', 'daynumber');
		$daynumber->setLabel('Days: ');
        $daynumber->setRequired(TRUE);
        $daynumber->addMultiOption('', 'Days');
        $daynumber->addMultiOption('1', '1');
        $daynumber->addMultiOption('2', '2');
        $daynumber->addMultiOption('3', '3');
        $daynumber->addMultiOption('4', '4');
        $daynumber->addMultiOption('5', '5');
        $daynumber->addMultiOption('6', '6');
        $daynumber->addMultiOption('7', '7');
        $daynumber->addMultiOption('8', '8');
        $daynumber->addMultiOption('9', '9');
        $daynumber->addMultiOption('10', '10');
        $daynumber->addMultiOption('11', '11');
        $daynumber->addMultiOption('12', '12');
        $daynumber->addMultiOption('13', '13');
        $daynumber->addMultiOption('14', '14');
        $daynumber->addMultiOption('15', '15');
        $daynumber->addMultiOption('16', '16');
        $daynumber->addMultiOption('17', '17');
        $daynumber->addMultiOption('18', '18');
        $daynumber->addMultiOption('19', '19');
        $daynumber->addMultiOption('20', '20');
        $daynumber->addMultiOption('21', '21');
        $daynumber->addMultiOption('22', '22');
        $daynumber->addMultiOption('23', '23');
        $daynumber->addMultiOption('24', '24');
        $daynumber->addMultiOption('25', '25');
        $daynumber->addMultiOption('26', '26');
        $daynumber->addMultiOption('27', '27');
        $daynumber->addMultiOption('28', '28');
        $daynumber->addMultiOption('29', '29');
        $daynumber->addMultiOption('30', '30');
        $daynumber->setRequired(TRUE);
        $this->addElement($daynumber);



        $nightnumber = $this->createElement('select', 'nightnumber');
		$nightnumber->setLabel('Nights: ');
        $nightnumber->setRequired(TRUE);
        $nightnumber->addMultiOption('', 'Nights');
        $nightnumber->addMultiOption('1', '1');
        $nightnumber->addMultiOption('2', '2');
        $nightnumber->addMultiOption('3', '3');
        $nightnumber->addMultiOption('4', '4');
        $nightnumber->addMultiOption('5', '5');
        $nightnumber->addMultiOption('6', '6');
        $nightnumber->addMultiOption('7', '7');
        $nightnumber->addMultiOption('8', '8');
        $nightnumber->addMultiOption('9', '9');
        $nightnumber->addMultiOption('10', '10');
        $nightnumber->addMultiOption('11', '11');
        $nightnumber->addMultiOption('12', '12');
        $nightnumber->addMultiOption('13', '13');
        $nightnumber->addMultiOption('14', '14');
        $nightnumber->addMultiOption('15', '15');
        $nightnumber->addMultiOption('16', '16');
        $nightnumber->addMultiOption('17', '17');
        $nightnumber->addMultiOption('18', '18');
        $nightnumber->addMultiOption('19', '19');
        $nightnumber->addMultiOption('20', '20');
        $nightnumber->addMultiOption('21', '21');
        $nightnumber->addMultiOption('22', '22');
        $nightnumber->addMultiOption('23', '23');
        $nightnumber->addMultiOption('24', '24');
        $nightnumber->addMultiOption('25', '25');
        $nightnumber->addMultiOption('26', '26');
        $nightnumber->addMultiOption('27', '27');
        $nightnumber->addMultiOption('28', '28');
        $nightnumber->addMultiOption('29', '29');
        $nightnumber->addMultiOption('30', '30');
        $nightnumber->setRequired(TRUE);
        $this->addElement($nightnumber);

 
  $this->Text('pdf', 'PDF', false); 
    $this->Text('thumb', 'Photo dimension: 400 Width x 250 Height', false); 
	  $this->Text('pricedescription', 'Price Description', false);
	 $this->TextErea('shortdescription',  'Home page/Destination Page Description',  '$rows = 40' , $id = 'elm5588', false ); 
  
 $this->TextErea('optional',  'Optional Tour',  '$rows = 40' , $id = 'elm72', false ); 
  $this->TextErea('befor',  'Befor you GO',  '$rows = 40' , $id = 'elm71', false ); 
			$this->Text('title', 'Package  Name ', true);  
			$this->TextErea('description',  'Package Overview',   '$rows = 40' , $id = 'elm70', false  ); 
  
  $this->TextErea('policy',  'Policy',   '$rows = 40' , $id = 'elm8', false  ); 
        
    $this->Text('policyid',  'Policy',    false ); 
				  
 $this->Text('cityidid',  'cityid',    false ); 
		    $this->TextErea('internery',  'Internery',  '$rows = 1' , $id = 'elm3', false ); 
			
			  $this->TextErea('int1',  'Day1',  '$rows = 40' , $id = 'elm1', false ); 
			  $this->TextErea('int2',  'Day2',  '$rows = 40' , $id = 'elm2' ,false ); 
		      $this->TextErea('int3',  'Day3',  '$rows = 40' , $id = 'elm3', false ); 
			  $this->TextErea('int4',  'Day4',  '$rows = 40' , $id = 'elm4', false ); 
			  $this->TextErea('int5',  'Day5',  '$rows = 40' , $id = 'elm5', false ); 
			  $this->TextErea('int6',  'Day6',  '$rows = 40' , $id = 'elm6' ,false ); 
		      $this->TextErea('int7',  'Day7',  '$rows = 40' , $id = 'elm7', false ); 
			  $this->TextErea('int8',  'Day8',  '$rows = 40' , $id = 'elm8', false ); 
			  $this->TextErea('int9',  'Day9',  '$rows = 40' , $id = 'elm9', false ); 
			  $this->TextErea('int10',  'Day10',  '$rows = 40' , $id = 'elm10', false ); 
			  $this->TextErea('int11',  'Day11',  '$rows = 40' , $id = 'elm11', false ); 
			  $this->TextErea('int12',  'Day12',  '$rows = 40' , $id = 'elm12', false ); 
		      $this->TextErea('int13',  'Day13',  '$rows = 40' , $id = 'elm13', false ); 
			  $this->TextErea('int14',  'Day14',  '$rows = 40' , $id = 'elm14', false ); 
			  $this->TextErea('int15',  'Day15',  '$rows = 40' , $id = 'elm15', false ); 
			  $this->TextErea('int16',  'Day16',  '$rows = 40' , $id = 'elm16', false ); 
		      $this->TextErea('int17',  'Day17',  '$rows = 40' , $id = 'elm17', false ); 
			  $this->TextErea('int18',  'Day18',  '$rows = 40' , $id = 'elm18', false ); 
			  $this->TextErea('int19',  'Day19',  '$rows = 40' , $id = 'elm19', false ); 
			  $this->TextErea('int20',  'Day20',  '$rows = 40' , $id = 'elm20', false ); 
			  $this->TextErea('int21',  'Day21',  '$rows = 40' , $id = 'elm21', false ); 
			  $this->TextErea('int22',  'Day22',  '$rows = 40' , $id = 'elm22' ,false ); 
		      $this->TextErea('int23',  'Day23',  '$rows = 40' , $id = 'elm23', false ); 
			  $this->TextErea('int24',  'Day24',  '$rows = 40' , $id = 'elm24', false ); 
			  $this->TextErea('int25',  'Day25',  '$rows = 40' , $id = 'elm25', false ); 
			  $this->TextErea('int26',  'Day26',  '$rows = 40' , $id = 'elm26' ,false ); 
		      $this->TextErea('int27',  'Day27',  '$rows = 40' , $id = 'elm27', false ); 
			  $this->TextErea('int28',  'Day28',  '$rows = 40' , $id = 'elm28', false ); 
			  $this->TextErea('int29',  'Day29',  '$rows = 40' , $id = 'elm29', false ); 
			  $this->TextErea('int30',  'Day30',  '$rows = 40' , $id = 'elm30', false ); 
			  
			  
			  $this->Text('tit1',  'Title Day 1',    false ); 
			  $this->Text('tit2',  'Title Day 2',    false ); 
		      $this->Text('tit3',  'Title Day 3',   false ); 
			  $this->Text('tit4',  'Title Day 4',   false ); 
			  $this->Text('tit5',  'Title Day 5',    false ); 
			  $this->Text('tit6',  'Title Day 6',  false ); 
		      $this->Text('tit7',  'Title Day 7',    false ); 
			  $this->Text('tit8',  'Title Day 8',    false ); 
			  $this->Text('tit9',  'Title Day 9',    false ); 
			  $this->Text('tit10',  'Title Day 10',  false ); 
			  $this->Text('tit11',  'Title Day 11',   false ); 
			  $this->Text('tit12',  'Title Day 12',   false ); 
		      $this->Text('tit13',  'Title Day 13',   false ); 
			  $this->Text('tit14',  'Title Day 14',   false ); 
			  $this->Text('tit15',  'Title Day 15',   false ); 
			  $this->Text('tit16',  'Title Day 16',   false ); 
		      $this->Text('tit17',  'Title Day 17',   false ); 
			  $this->Text('tit18',  'Title Day 18',   false ); 
			  $this->Text('tit19',  'Title Day 19',    false ); 
			  $this->Text('tit20',  'Title Day 20',    false ); 
			  $this->Text('tit21',  'Title Day 21',   false ); 
			  $this->Text('tit22',  'Title Day 22',  false ); 
		      $this->Text('tit23',  'Title Day 23',   false ); 
			  $this->Text('tit24',  'Title Day 24',   false ); 
			  $this->Text('tit25',  'Title Day 25',   false ); 
			  $this->Text('tit26',  'Title Day 26',    false ); 
		      $this->Text('tit27',  'Title Day 27',    false ); 
			  $this->Text('tit28',  'Title Day 28',   false ); 
			  $this->Text('tit29',  'Title Day 29',    false ); 
			  $this->Text('tit30',  'Title Day 30',    false ); 
		
			 





              $this->Text('dinner1',  'Dinner1',    false ); 
			  $this->Text('dinner2',  'Dinner2',    false ); 
		      $this->Text('dinner3',  'Dinner3',   false ); 
			  $this->Text('dinner4',  'Dinner4',   false ); 
			  $this->Text('dinner5',  'Dinner5',    false ); 
			  $this->Text('dinner6',  'Dinner6',  false ); 
		      $this->Text('dinner7',  'Dinner7',    false ); 
			  $this->Text('dinner8',  'Dinner8',    false ); 
			  $this->Text('dinner9',  'Dinner9',    false ); 
			  $this->Text('dinner10',  'Dinner10',  false ); 
			  $this->Text('dinner11',  'Dinner11',   false ); 
			  $this->Text('dinner12',  'Dinner12',   false ); 
		      $this->Text('dinner13',  'Dinner13',   false ); 
			  $this->Text('dinner14',  'Dinner14',   false ); 
			  $this->Text('dinner15',  'Dinner15',   false ); 
			  $this->Text('dinner16',  'Dinner16',   false ); 
		      $this->Text('dinner17',  'Dinner17',   false ); 
			  $this->Text('dinner18',  'Dinner18',   false ); 
			  $this->Text('dinner19',  'Dinner19',    false ); 
			  $this->Text('dinner20',  'Dinner20',    false ); 
			  $this->Text('dinner21',  'Dinner21',   false ); 
			  $this->Text('dinner22',  'Dinner22',  false ); 
		      $this->Text('dinner23',  'Dinner23',   false ); 
			  $this->Text('dinner24',  'Dinner24',   false ); 
			  $this->Text('dinner25',  'Dinner25',   false ); 
			  $this->Text('dinner26',  'Dinner26',    false ); 
		      $this->Text('dinner27',  'Dinner27',    false ); 
			  $this->Text('dinner28',  'Dinner28',   false ); 
			  $this->Text('dinner29',  'Dinner29',    false ); 
			  $this->Text('dinner30',  'Dinner30',    false ); 
		


              $this->Text('hot1',  'Hotels Day 1',    false ); 
			  $this->Text('hot2',  'Hotels Day 2',    false ); 
		      $this->Text('hot3',  'Hotels Day 3',   false ); 
			  $this->Text('hot4',  'Hotels Day 4',   false ); 
			  $this->Text('hot5',  'Hotels Day 5',    false ); 
			  $this->Text('hot6',  'Hotels Day 6',  false ); 
		      $this->Text('hot7',  'Hotels Day 7',    false ); 
			  $this->Text('hot8',  'Hotels Day 8',    false ); 
			  $this->Text('hot9',  'Hotels Day 9',    false ); 
			  $this->Text('hot10',  'Hotels Day 10',  false ); 
			  $this->Text('hot11',  'Hotels Day 11',   false ); 
			  $this->Text('hot12',  'Hotels Day 12',   false ); 
		      $this->Text('hot13',  'Hotels Day 13',   false ); 
			  $this->Text('hot14',  'Hotels Day 14',   false ); 
			  $this->Text('hot15',  'Hotels Day 15',   false ); 
			  $this->Text('hot16',  'Hotels Day 16',   false ); 
		      $this->Text('hot17',  'Hotels Day 17',   false ); 
			  $this->Text('hot18',  'Hotels Day 18',   false ); 
			  $this->Text('hot19',  'Hotels Day 19',    false ); 
			  $this->Text('hot20',  'Hotels Day 20',    false ); 
			  $this->Text('hot21',  'Hotels Day 21',   false ); 
			  $this->Text('hot22',  'Hotels Day 22',  false ); 
		      $this->Text('hot23',  'Hotels Day 23',   false ); 
			  $this->Text('hot24',  'Hotels Day 24',   false ); 
			  $this->Text('hot25',  'Hotels Day 25',   false ); 
			  $this->Text('hot26',  'Hotels Day 26',    false ); 
		      $this->Text('hot27',  'Hotels Day 27',    false ); 
			  $this->Text('hot28',  'Hotels Day 28',   false ); 
			  $this->Text('hot29',  'Hotels Day 29',    false ); 
			  $this->Text('hot30',  'Hotels Day 30',    false ); 
		

              $this->Text('crustext1',  'Cruises Text 1',    false ); 
			  $this->Text('crustext2',  'Cruises Text 2',    false ); 
		      $this->Text('crustext3',  'Cruises Text 3',   false ); 
			  $this->Text('crustext4',  'Cruises Text 4',   false ); 
			  $this->Text('crustext5',  'Cruises Text 5',    false ); 
			  $this->Text('crustext6',  'Cruises Text 6',  false ); 
		      $this->Text('crustext7',  'Cruises Text 7',    false ); 
			  $this->Text('crustext8',  'Cruises Text 8',    false ); 
			  $this->Text('crustext9',  'Cruises Text 9',    false ); 
			  $this->Text('crustext10',  'Cruises Text 10',  false ); 
			  $this->Text('crustext11',  'Cruises Text 11',   false ); 
			  $this->Text('crustext12',  'Cruises Text 12',   false ); 
		      $this->Text('crustext13',  'Cruises Text 13',   false ); 
			  $this->Text('crustext14',  'Cruises Text 14',   false ); 
			  $this->Text('crustext15',  'Cruises Text 15',   false ); 
			  $this->Text('crustext16',  'Cruises Text 16',   false ); 
		      $this->Text('crustext17',  'Cruises Text 17',   false ); 
			  $this->Text('crustext18',  'Cruises Text 18',   false ); 
			  $this->Text('crustext19',  'Cruises Text 19',    false ); 
			  $this->Text('crustext20',  'Cruises Text 20',    false ); 
			  $this->Text('crustext21',  'Cruises Text 21',   false ); 
			  $this->Text('crustext22',  'Cruises Text 22',  false ); 
		      $this->Text('crustext23',  'Cruises Text 23',   false ); 
			  $this->Text('crustext24',  'Cruises Text 24',   false ); 
			  $this->Text('crustext25',  'Cruises Text 25',   false ); 
			  $this->Text('crustext26',  'Cruises Text 26',    false ); 
		      $this->Text('crustext27',  'Cruises Text 27',    false ); 
			  $this->Text('crustext28',  'Cruises Text 28',   false ); 
			  $this->Text('crustext29',  'Cruises Text 29',    false ); 
			  $this->Text('crustext30',  'Cruises Text 30',    false ); 




              $this->Text('crus1',  'Cruises Day 1',    false ); 
			  $this->Text('crus2',  'Cruises Day 2',    false ); 
		      $this->Text('crus3',  'Cruises Day 3',   false ); 
			  $this->Text('crus4',  'Cruises Day 4',   false ); 
			  $this->Text('crus5',  'Cruises Day 5',    false ); 
			  $this->Text('crus6',  'Cruises Day 6',  false ); 
		      $this->Text('crus7',  'Cruises Day 7',    false ); 
			  $this->Text('crus8',  'Cruises Day 8',    false ); 
			  $this->Text('crus9',  'Cruises Day 9',    false ); 
			  $this->Text('crus10',  'Cruises Day 10',  false ); 
			  $this->Text('crus11',  'Cruises Day 11',   false ); 
			  $this->Text('crus12',  'Cruises Day 12',   false ); 
		      $this->Text('crus13',  'Cruises Day 13',   false ); 
			  $this->Text('crus14',  'Cruises Day 14',   false ); 
			  $this->Text('crus15',  'Cruises Day 15',   false ); 
			  $this->Text('crus16',  'Cruises Day 16',   false ); 
		      $this->Text('crus17',  'Cruises Day 17',   false ); 
			  $this->Text('crus18',  'Cruises Day 18',   false ); 
			  $this->Text('crus19',  'Cruises Day 19',    false ); 
			  $this->Text('crus20',  'Cruises Day 20',    false ); 
			  $this->Text('crus21',  'Cruises Day 21',   false ); 
			  $this->Text('crus22',  'Cruises Day 22',  false ); 
		      $this->Text('crus23',  'Cruises Day 23',   false ); 
			  $this->Text('crus24',  'Cruises Day 24',   false ); 
			  $this->Text('crus25',  'Cruises Day 25',   false ); 
			  $this->Text('crus26',  'Cruises Day 26',    false ); 
		      $this->Text('crus27',  'Cruises Day 27',    false ); 
			  $this->Text('crus28',  'Cruises Day 28',   false ); 
			  $this->Text('crus29',  'Cruises Day 29',    false ); 
			  $this->Text('crus30',  'Cruises Day 30',    false ); 










              $this->Text('citybyday1',  'Overnight Day 1',    false ); 
			  $this->Text('citybyday2',  'Overnight Day 2',    false ); 
		      $this->Text('citybyday3',  'Overnight Day 3',   false ); 
			  $this->Text('citybyday4',  'Overnight Day 4',   false ); 
			  $this->Text('citybyday5',  'Overnight Day 5',    false ); 
			  $this->Text('citybyday6',  'Overnight Day 6',  false ); 
		      $this->Text('citybyday7',  'Overnight Day 7',    false ); 
			  $this->Text('citybyday8',  'Overnight Day 8',    false ); 
			  $this->Text('citybyday9',  'Overnight Day 9',    false ); 
			  $this->Text('citybyday10',  'Overnight Day 10',  false ); 
			  $this->Text('citybyday11',  'Overnight Day 11',   false ); 
			  $this->Text('citybyday12',  'Overnight Day 12',   false ); 
		      $this->Text('citybyday13',  'Overnight Day 13',   false ); 
			  $this->Text('citybyday14',  'Overnight Day 14',   false ); 
			  $this->Text('citybyday15',  'Overnight Day 15',   false ); 
			  $this->Text('citybyday16',  'Overnight Day 16',   false ); 
		      $this->Text('citybyday17',  'Overnight Day 17',   false ); 
			  $this->Text('citybyday18',  'Overnight Day 18',   false ); 
			  $this->Text('citybyday19',  'Overnight Day 19',    false ); 
			  $this->Text('citybyday20',  'Overnight Day 20',    false ); 
			  $this->Text('citybyday21',  'Overnight Day 21',   false ); 
			  $this->Text('citybyday22',  'Overnight Day 22',  false ); 
		      $this->Text('citybyday23',  'Overnight Day 23',   false ); 
			  $this->Text('citybyday24',  'Overnight Day 24',   false ); 
			  $this->Text('citybyday25',  'Overnight Day 25',   false ); 
			  $this->Text('citybyday26',  'Overnight Day 26',    false ); 
		      $this->Text('citybyday27',  'Overnight Day 27',    false ); 
			  $this->Text('citybyday28',  'Overnight Day 28',   false ); 
			  $this->Text('citybyday29',  'Overnight Day 29',    false ); 
			  $this->Text('citybyday30',  'Overnight Day 30',    false ); 







              $this->Text('optionbyday1',  'Optional Day 1',    false ); 
			  $this->Text('optionbyday2',  'Optional Day 2',    false ); 
		      $this->Text('optionbyday3',  'Optional Day 3',   false ); 
			  $this->Text('optionbyday4',  'Optional Day 4',   false ); 
			  $this->Text('optionbyday5',  'Optional Day 5',    false ); 
			  $this->Text('optionbyday6',  'Optional Day 6',  false ); 
		      $this->Text('optionbyday7',  'Optional Day 7',    false ); 
			  $this->Text('optionbyday8',  'Optional Day 8',    false ); 
			  $this->Text('optionbyday9',  'Optional Day 9',    false ); 
			  $this->Text('optionbyday10',  'Optional Day 10',  false ); 
			  $this->Text('optionbyday11',  'Optional Day 11',   false ); 
			  $this->Text('optionbyday12',  'Optional Day 12',   false ); 
		      $this->Text('optionbyday13',  'Optional Day 13',   false ); 
			  $this->Text('optionbyday14',  'Optional Day 14',   false ); 
			  $this->Text('optionbyday15',  'Optional Day 15',   false ); 
			  $this->Text('optionbyday16',  'Optional Day 16',   false ); 
		      $this->Text('optionbyday17',  'Optional Day 17',   false ); 
			  $this->Text('optionbyday18',  'Optional Day 18',   false ); 
			  $this->Text('optionbyday19',  'Optional Day 19',    false ); 
			  $this->Text('optionbyday20',  'Optional Day 20',    false ); 
			  $this->Text('optionbyday21',  'Optional Day 21',   false ); 
			  $this->Text('optionbyday22',  'Optional Day 22',  false ); 
		      $this->Text('optionbyday23',  'Optional Day 23',   false ); 
			  $this->Text('optionbyday24',  'Optional Day 24',   false ); 
			  $this->Text('optionbyday25',  'Optional Day 25',   false ); 
			  $this->Text('optionbyday26',  'Optional Day 26',    false ); 
		      $this->Text('optionbyday27',  'Optional Day 27',    false ); 
			  $this->Text('optionbyday28',  'Optional Day 28',   false ); 
			  $this->Text('optionbyday29',  'Optional Day 29',    false ); 
			  $this->Text('optionbyday30',  'Optional Day 30',    false ); 

 
			   $this->Text('hotelid',  'hotelid',   false );
 
		    $this->Text('include',  'Includes',   false );
		    $this->Text('exclude',  'Excludes',   false );
            $this->TextErea('notes',  'Notes', '$rows = 40' , $id = 'elm40', false );
 $this->TextErea('noteoverview',  'Notes', '$rows = 40' , $id = 'elm73', false );
 $this->Text('gateway',  'Gateway ',   false );
 $this->Text('highlightid',  'Highlight ',   false );

$this->Text('rates',  'Rates',   false );
   $this->TextErea('rates2',  'rates2', '$rows = 40' , $id = 'elm140', false );

           $username = $this->createElement('text', 'data5');
           $this->addElement($username); 
  $this->Text('featureid', ' Featuring', false);  
         $this->Text('includedid', ' includedid    ', false);    
   $this->Text('excludesid', ' excludesid    ', false);    
   $this->Text('notesid', ' notesid    ', false);    

         $this->Text('table_image', 'Photo dimension: 980 Width x 375 Height', false); 

         $this->Text('table_image2', ' Gallery Photos   ', false); 
		 $this->Text('prize', 'Start From (Tour Only)', false);
	     $this->Text('newprice', 'New Price (Tour Only) ', false);


		 $this->Text('prize2', 'Start From (Tour + Flights)', false);
	     $this->Text('newprice2', 'New Price (Tour + Flights) ', false);

		 $this->Text('prize3', 'Start From (Cruise)', false);
	     $this->Text('newprice3', 'New Price (Cruise) ', false);

		 



 $this->Text('optionalidid', 'optionalidid ', false);
   	 $this->Text('newprice', 'New Price ', false);
 	 $this->Text('ptdpage', 'Package Type - Destination Page ', false);
  
   $this->TextErea('descriptiontype',  'Description Type', '$rows = 40' , $id = 'elm1510', false );
   
	 
 $this->TextErea('pricenotes',  'Price Note ', '$rows = 40' , $id = 'elm150', false );


  $is_active3 = $this->createElement('checkbox','booking'); 
  $is_active3->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $is_active3->setLabel('Booking');        
  $is_active3->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($is_active3); 

  

  $is_active31 = $this->createElement('checkbox','inactive'); 
  $is_active31->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $is_active31->setLabel('Inactive');        
  $is_active31->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($is_active31); 




  $inactivedeal = $this->createElement('checkbox','inactivedeal'); 
  $inactivedeal->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $inactivedeal->setLabel('Deals & Offers');        
  $inactivedeal->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($inactivedeal); 

  
 

  $is_active32 = $this->createElement('checkbox','close'); 
  $is_active32->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $is_active32->setLabel('Close');        
  $is_active32->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($is_active32); 

   


  $is_active32drop = $this->createElement('checkbox','drop'); 
  $is_active32drop->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $is_active32drop->setLabel('Drop');        
  $is_active32drop->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($is_active32drop); 

 


         $this->Text('pagurl', 'Page URL ', false);
   
  $this->Text('pagetitle', 'Page Title', false);
  $this->TextErea('pagedescription',  'Page Description', '$rows = 40' , $id = 'elm15101', false );
  $this->TextErea('pagekeywords',  'Page Keywords', '$rows = 40' , $id = 'elm15102', false );

     $this->Text('discount', ' Discount Column Title', false);

     $this->Text('discountdate', 'Discount Date Title ', false);


   $this->Text('offerbefor',  'Text Before Date of Deals',   false );
   $this->Text('offerafter', 'Text After Date of Deals',   false );
   $this->Text('offerdate', 'Deals Date',   false );

   $this->Text('offerclosemesg', 'Message end the Offer',   false );
  
        $submit = $this->createElement('submit', 'save');
        $submit->setLabel('Save');
        $submit->setDecorators($this->loadDecoration('submit'));
        $submit->setAttrib('class', 'resultsbtn buttons btn btn-default big');
        $this->addElement($submit);


		   
}
}