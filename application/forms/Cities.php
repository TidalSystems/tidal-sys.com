<?php 



class Form_Cities extends Form_SuperForm {



    public function init() {

        

		

		

		

	     $modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'countries';
         $lang = Func_Lang::getLang();
        $where = array( );
        $country5 = $this->createElement('select', 'countryid');
        $country5->setLabel('Country ');
		$country5->setAttrib('class', 'form-control col-md-6');
        $country5->setRequired(TRUE);
		$country5->addErrorMessage('required');
        $country5->addMultiOption('', '----------Select Country-----------');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            $country5->addMultiOption($values['id'], $values['title'].' - '. $values['titleAr']);
        } $this->addElement($country5);

    

       $this->Text('title', 'Title En', true,  null ,"col-md-6" , "" , "required"  ); 

       $this->Text('titleAr', 'Title Ar', true,  null ,"col-md-6" , "" , "required"  ); 

       $this->Text('pagurl', 'Page URL', false,  null ,"col-md-6"    ); 





        $this->loadSubmit();

    }



}