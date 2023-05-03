<?php 

class Form_Cruises extends Form_SuperForm {
 
    public function init() {



        $cruisetype = $this->createElement('select', 'cruisetype');
		$cruisetype->setLabel('Crise Type');
        $cruisetype->setRequired(TRUE);
		$cruisetype->addErrorMessage('required');
        $cruisetype->addMultiOption('', 'Select Cruises Type');
        $cruisetype->addMultiOption('seacruise', 'Sea Cruises');
        $cruisetype->addMultiOption('nilecruise', 'River Cruises');
        $this->addElement($cruisetype);
		
		
	     $modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'country';
         $lang = Func_Lang::getLang();
        $where = array( );
        $country5 = $this->createElement('select', 'countryid');
        $country5->setLabel('Country ');
        $country5->setRequired(TRUE);
		$country5->addErrorMessage('required');
        $country5->addErrorMessage('required');
        $country5->addMultiOption('', '----------Select Country-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $country5->addMultiOption($values['id'], $values['country_name']);
        } $this->addElement($country5);
		
      $this->Text('Name', 'Boat Name	', true  , null , "col-md-7");  
	  
	  
	  
	    $Category = $this->createElement('select', 'Category');
		$Category->setLabel('Category');
        $Category->setRequired(TRUE);
		$Category->addErrorMessage('required');
        $Category->addMultiOption('1', '1');
        $Category->addMultiOption('2', '2');
        $Category->addMultiOption('3', '3');
        $Category->addMultiOption('4', '4');
        $Category->addMultiOption('5', '5');
        $Category->addMultiOption('6', '6');
        $Category->addMultiOption('7', '7');
        $this->addElement($Category);
		
		
		$this->Text('YearBuilt', 'Year Built', false); 
	$this->Text('table_image', 'Gallery', false); 
		
		$modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'cruises_line';
       $lang = Func_Lang::getLang();
        $where = array( );
        $cruisesline = $this->createElement('select', 'Line');
        $cruisesline->setLabel('Cruises Line ');
        $cruisesline->setRequired(false);
        $cruisesline->addMultiOption('', '----------Cruises Line-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $cruisesline->addMultiOption($values['id'], $values['Name']);
        } $this->addElement($cruisesline);
		
		
		
 $this->TextErea('Summary', 'Summary', '$rows = 40' , $id='elm1', false );
$this->TextErea('Classification', 'Classification', '$rows = 40' , $id='elm2', false );
$this->TextErea('Features', 'Features', '$rows = 40' , $id='elm3', false );
$this->TextErea('Onboard', 'Onboard', '$rows = 40' , $id='elm4', false );
$this->TextErea('Accommodation', 'Accommodation', '$rows = 40' , $id='elm5', false );
$this->TextErea('Facilities', 'Facilities', '$rows = 40' , $id='elm6', false );
$this->TextErea('Tech', 'Technical Data', '$rows = 40' , $id='elm7', false );


  
   

    $this->Text('pagurl', 'Page Url ',false , null , "col-md-9");
	$this->Text('seohead', 'Page Head', false , null , "col-md-9");
	$this->Text('seotitle', 'Page Title' ,false , null , "col-md-9");
 	$this->TextErea('seodescription', 'Page Description', '$rows = 40' , $id='elm-free', false ); 
 	$this->Text('seokeywords', 'Page Keywords', false , null , "col-md-9"); 

	

  $Active = $this->createElement('checkbox','Active'); 
  $Active->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $Active->setLabel('Inactive');        
  $Active->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($Active); 


 
        $this->loadSubmit();



        



      



    }







}