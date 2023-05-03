<?php
class Form_Products extends Form_SuperForm {
    public function init() {

 
  
  $this->Text('title', 'Title', false,  null ,"col-md-12" , "" , "required"  ); 
 
 
        $modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'productscategories';
        $lang = Func_Lang::getLang();
        $where = array();
        $catID = $this->createElement('select', 'catid');
        $catID->setLabel('Portfolio Category ');
        $catID->setAttrib('class', 'form-control col-md-8');
        $catID->setAttrib('required',"required") ;
        $catID->addMultiOption('', 'Select  Category');
        foreach ($modelBlocks->selectForArray(array( ), array('title' => 'ASC')) as $values) {
             
                $catID->addMultiOption($values['id'], $values['title']);
        
        } $catID->setRequired(false); $this->addElement($catID);

 
 
  $this->TextErea('decription', 'Description', '$rows = 40' , $id='elm4', false );

  $this->TextErea('Overview', 'Overview', '$rows = 40' , $id='elm5', false );
    $this->TextErea('ActiveIngredients', 'Active Ingredients', '$rows = 40' , $id='elm6', false );
	$this->TextErea('Dosage', 'Dosage and Administration', '$rows = 40' , $id='elm9', false );
    $this->TextErea('Content', 'Content', '$rows = 40' , $id='elm8', false );
    $this->Text('Thumb', 'Photo', false);  
   $this->Text('table_image', 'Gallery', false);    

    $this->Text('pagurl', 'Page Url ',false , null , "col-md-9");
 
 
	 $this->loadSubmit();

    }



}

