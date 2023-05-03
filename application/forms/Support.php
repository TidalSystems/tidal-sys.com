<?php  class Form_Support extends Form_SuperForm {







    public function init() {



  

  $this->Text('title', 'Title En*', false,  null ,"col-md-12" , "" , "required"  ); 

   $this->Text('titleAr', 'Title Ar', false,  null ,"col-md-12" , "" , ""  );   

		

 

        $modelBlocks = new Model_PlusData();

        $modelBlocks->_name = 'SupportCategory';

        $lang = Func_Lang::getLang();

        $where = array();

        $ProductsCat = $this->createElement('select', 'SupportCatid');

        $ProductsCat->setLabel('Support Category* ');

        $ProductsCat->setAttrib('class', 'form-control col-md-12');

        $ProductsCat->setAttrib('required',"required") ;

        $ProductsCat->addMultiOption('', 'No Parent');

        foreach ($modelBlocks->selectForArray(array( ), array('title' => 'ASC')) as $values) {

                $ProductsCat->addMultiOption($values['id'], $values['title'].' - '. $values['titleAr']);

        } $ProductsCat->setRequired(false); $this->addElement($ProductsCat);





 



    $this->text('Thumb', 'PDF' , false);
 

  $this->TextErea('data', 'Description En', '$rows = 40' , $id='elm4', false );

    $this->TextErea('dataAr', 'Description Ar', '$rows = 40' , $id='elm5', false );

 

        $this->loadSubmit();















    }







}