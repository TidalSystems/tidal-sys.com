<?php 

class Form_Blogs extends Form_SuperForm {

 

    public function init() {


 

       $this->Text('title', 'Title ', true,  null ,"col-md-12" , "" , "required"  ); 

	   $this->Text('titleAr', 'Title Ar ', false,  null ,"col-md-12" , "" , ""  ); 

 	   $this->Text('datepicker', 'Date', false,  null ,"col-md-12" , "" , ""  ); 
  
 	$modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'blogscategories';
        $catID = $this->createElement('select', 'catID');
        $catID->setLabel('Category ');
        $catID->setRequired(FALSE);
        $catID->setAttrib('class' , 'form-control col-md-6' );
        $catID->addErrorMessage('required');
        $catID->addMultiOption('', '----------Select Category-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $catID->addMultiOption($values['id'], $values['title']);
        } $this->addElement($catID);


  



 	    $this->TextErea('description', 'Description En ', '$rows = 40' , $id='elm2', false );

 	 	$this->TextErea('descriptionAr', 'Description Ar ', '$rows = 40' , $id='elm3', false );
 



  $this->Text('thumb', 'Thumb 400*270', false); 





 

  

    $this->Text('pagurl', 'Page Url ',false , null , "col-md-9");

 
    $this->Text('seotitle', 'Page Title ',false , null , "col-md-12");
 	$this->TextErea('seodescription', 'Page Description', '$rows = 40' , $id='elm-free', false ); 



 	$this->Text('seokeywords', 'Page Keywords', false , null , "col-md-9"); 





        $this->loadSubmit();







        







      







    }















}