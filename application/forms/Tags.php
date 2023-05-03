<?php 
class Form_Tags extends Form_SuperForm {
 
    public function init() {


      $this->Text('Name', 'Name', true  , null , "col-md-12");  
   
               $modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'country';
        $country = $this->createElement('select', 'countryid');
        $country->setLabel('');
        $where = null; 
        $country->setRequired(false);
 
        $country->addErrorMessage('required');
        $country->addMultiOption('8888888888888888', '----------Select Country-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
if($values['country_name'] != 'Multi Country'){
            $country->addMultiOption($values['id'], $values['country_name']);
}
        } $this->addElement($country);


     $this->Text('style', '',false , null , "col-md-9" , "display:none"); 
   $this->Text('packagesid', ' ',false , null , "col-md-9"  , "display:none");
   $this->Text('url', 'Url ',false , null , "col-md-9");

    $this->Text('alt', 'Alt ',false , null , "col-md-12");
    $this->Text('title', 'Title ',false , null , "col-md-12");

    $this->Text('pagurl', 'Page Url ',false , null , "col-md-9");
	$this->Text('seohead', 'Page Head', false , null , "col-md-9");
	$this->Text('seotitle', 'Page Title' ,false , null , "col-md-9");
 	$this->TextErea('seodescription', 'Page Description', '$rows = 40' , $id='elm-free', false ); 
 	$this->Text('seokeywords', 'Page Keywords', false , null , "col-md-9"); 

 

        $this->loadSubmit();



        



      



    }







}