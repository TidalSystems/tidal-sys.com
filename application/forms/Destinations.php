<?php 

 
class Form_Destinations extends Form_SuperForm {

 
    public function init() {


 
  $this->Text('Name', 'Title ',true , null , "col-md-9" , null , 'required'); 
                                  
 
        $modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'packagetype';
        $lang = Func_Lang::getLang();
        $where = array( );
        $TourType = $this->createElement('select', 'TourType');
        $TourType->setLabel('Select Tour Type ');
        $TourType->setRequired(false);
        $TourType->setAttrib(' ', ' ');
        $TourType->addErrorMessage('required');
        $TourType->addMultiOption('', '----------Select Tour Type-----------');

        foreach ($modelBlocks->selectForArray($where) as $values) {
            
                $TourType->addMultiOption($values['id'], $values['title']);
            
        } $TourType->setRequired(false); $this->addElement($TourType);






        $Days = $this->createElement('select', 'Days');
        $Days->setLabel('Days');
        $Days->setRequired(TRUE);
      $Days->setAttrib('required', 'required');
        $Days->addErrorMessage('required');
        $Days->addMultiOption('', 'Days ');

        for ($i=0;$i<=31;$i++) {
            
                $Days->addMultiOption($i , $i);
            
        } $Days->setRequired(true); $this->addElement($Days);




        $Nights = $this->createElement('select', 'Nights');
        $Nights->setLabel('Nights');
        $Nights->setRequired(TRUE);
        $Nights->setAttrib('required', 'required');
        $Nights->addErrorMessage('required');
        $Nights->addMultiOption('', 'Nights ');

        for ($i2=0;$i2<=31;$i2++) {
            
                $Nights->addMultiOption($i2 , $i2);
            
        } $Nights->setRequired(true); $this->addElement($Nights);



$this->Text('Price', 'Start From $',true , null , "col-md-12" , null , 'required'); 

$this->Text('plane', 'Plane',false , null , "col-md-12" , null ); 
$this->Text('max', 'Max People',false , null , "col-md-12" , null ); 
$this->Text('min', 'Min Age',false , null , "col-md-12" , null); 
$this->Text('availability', 'Availability',false , null , "col-md-12" , null ); 
$this->Text('departure', 'Departure',false , null , "col-md-12" , null ); 
$this->Text('return', 'Return',false , null , "col-md-12" , null ); 
 

                                            

 $this->TextErea('Details', 'Details', '$rows = 40' , $id='elm1', false );
$this->TextErea('DInclude', 'Include', '$rows = 40' , $id='elm40', false );

$this->TextErea('DExclude', 'Exclude', '$rows = 40' , $id='elm42', false );
$this->TextErea('DNotes', 'Notes', '$rows = 40' , $id='elm43', false );
$this->TextErea('Video', 'Video', '$rows = 40' , $id='elm44', false );
$this->TextErea('Groups', 'Groups', '$rows = 40' , $id='elm45', false );

$this->TextErea('Rates', 'Rates', '$rows = 40' , $id='elm46', false );

$this->TextErea('smallgrouprates', 'Global Text For Small Group Text', '$rows = 40' , $id='elm-free', false ); 

$this->TextErea('highlights', 'HighLights', '$rows = 40' , $id='elm47', false ); 

  $this->Text('Map',  'Map', false );




   $this->Text('cityidid',  '',false , null , "col-md-12",  "display:none ");
   $modelBlocks = new Model_PlusData();
        $where = null;  
        $modelBlocks->_name = 'region';
        $region = $this->createElement('select', 'regionid');
        $region->setLabel('Regions ');
        $region->setRequired(TRUE);
        $region->setAttrib('required', 'required');
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
        $country->setAttrib('required', 'required');
        $country->addErrorMessage('required');
        $country->addMultiOption('', '----------Select Country-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $country->addMultiOption($values['id'], $values['country_name']);
        } $this->addElement($country);

   


        $modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'country';
        $lang = Func_Lang::getLang();
        $where = array( );
        $extentioncountry = $this->createElement('select', 'extentioncountryid');
        $extentioncountry->setLabel('Extention Country ');
        $extentioncountry->setRequired(false);
               $extentioncountry->addErrorMessage('required');
        $extentioncountry->addMultiOption('', '----------Extention Country-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
if($values['country_name'] != 'Multi Country'){
            $extentioncountry->addMultiOption($values['id'], $values['country_name']);
}
        } $this->addElement($extentioncountry);


    


  $extention = $this->createElement('checkbox','extention'); 
  $extention->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $extention->setLabel('Extention');        
  $extention->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($extention); 


  $this->Text('cityidid2', '' ,false , null , "col-md-12",  "display:none "); 

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
            $country2->addMultiOption($values['id'], $values['country_name']);
        } $this->addElement($country2);




       $this->Text('cityidid3', '' ,false , null , "col-md-12",  "display:none "); 

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
            $country3->addMultiOption($values['id'], $values['country_name']);
        } $this->addElement($country3);



   $this->Text('cityidid4', '' ,false , null , "col-md-12",  "display:none "); 

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
            $country4->addMultiOption($values['id'], $values['country_name']);
        } $this->addElement($country4);




$this->Text('cityidid5', '' ,false , null , "col-md-12",  "display:none "); 

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
            $country5->addMultiOption($values['id'], $values['country_name']);
        } $this->addElement($country5);



	    $DestType2 = $this->createElement('select', 'DestType2');
		$DestType2->setLabel('Crise Type: ');
        $DestType2->setRequired(FALSE);
        $DestType2->addMultiOption('0', 'Select Cruises Type');
        $DestType2->addMultiOption('seacruise', 'Sea Cruises');
        $DestType2->addMultiOption('nilecruise', 'River Cruises');
        $this->addElement($DestType2);



  $Active = $this->createElement('checkbox','Active'); 
  $Active->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $Active->setLabel('Inactive');        
  $Active->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($Active); 





  $New = $this->createElement('checkbox','New'); 
  $New->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $New->setLabel('New');        
  $New->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($New); 


  $TravelIdeas = $this->createElement('checkbox','TravelIdeas'); 
  $TravelIdeas->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $TravelIdeas->setLabel('Travel Ideas');        
  $TravelIdeas->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($TravelIdeas); 


  $showhome = $this->createElement('checkbox','showhome'); 
  $showhome->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $showhome->setLabel('Show on Home page');        
  $showhome->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($showhome); 

      $this->Text('FlyerPDF', '',false );

$this->Text('ratestype', '' ,false , null , "col-md-3",  "display:none "); 
$this->Text('hotelsids', '' ,false , null , "col-md-12",  "display:none  "); 
$this->Text('hotelsidb', '' ,false , null , "col-md-12",  "display:none  ");
$this->Text('hotelsidg', '' ,false , null , "col-md-12",  "display:none  ");
 
    $this->Text('pagurl', 'Page Url ',false , null , "col-md-9");
	$this->Text('seohead', 'Page Head', false , null , "col-md-9");
	$this->Text('seotitle', 'Page Title' ,false , null , "col-md-9");
 	$this->TextErea('seodescription', 'Page Description', '$rows = 40' , $id='elm-free', false ); 
 	$this->TextErea('seokeywords', 'Page Keywords', '$rows = 40' , $id='elm-free', false ); 

	$this->TextErea('HeadTag', 'Head Tag', '$rows = 40' , $id='elm-free', false ); 
	$this->TextErea('BodyTag', 'Body Tag', '$rows = 40' , $id='elm-free', false ); 
 


	$this->loadSubmit(); 



}

}