<?php class Form_Meals extends Form_SuperForm {



    public function init() {

          

    

		

	     $modelBlocks = new Model_PlusData();

        $modelBlocks->_name = 'countries';

         $lang = Func_Lang::getLang();

        $where = array( );

        $country5 = $this->createElement('select', 'countryid');

        $country5->setLabel('Country ');

		$country5->setAttrib('class', 'form-control col-md-12');

        $country5->setRequired(TRUE);

		$country5->addErrorMessage('required');

        $country5->addMultiOption('', '----------Select Country-----------');

        foreach ($modelBlocks->selectForArray($where) as $values) {

            $country5->addMultiOption($values['id'], $values['title'].' - '. $values['titleAr']);

        } $this->addElement($country5);

		

		

		

		

		

        $modelBlocksw = new Model_PlusData();
        $modelBlocksw->_name = 'MealsCategories';
         $langw = Func_Lang::getLang();
        $wherecat = array( );
        $MealsCat = $this->createElement('select', 'CategoryId');
        $MealsCat->setLabel('Category');
		$MealsCat->setAttrib('class', 'form-control col-md-12');
        $MealsCat->setRequired(TRUE);
		$MealsCat->addErrorMessage('required');
        $MealsCat->addMultiOption('', '----------Select Category-----------');
        foreach ($modelBlocksw->selectForArray($wherecat) as $values) {
            $MealsCat->addMultiOption($values['id'], $values['title'].' - '. $values['titleAr']);
        } $this->addElement($MealsCat);


		

			

	     $modelBlocks = new Model_PlusData();

        $modelBlocks->_name = 'cities';

         $lang = Func_Lang::getLang();

        $where = array( );

        $cities = $this->createElement('select', 'cityid');

        $cities->setLabel('City ');

		$cities->setAttrib('class', 'form-control col-md-12');

        $cities->setRequired(TRUE);

		$cities->addErrorMessage('required');

        $cities->addMultiOption('', '----------Select City-----------');

        foreach ($modelBlocks->selectForArray($where) as $values) {

            $cities->addMultiOption($values['id'], $values['title'].' - '. $values['titleAr']);

        } $this->addElement($cities);

		

		

       $this->Text('title', 'Title En', true,  null ,"col-md-12" , "" , "required"  ); 

	     $this->TextErea('details', 'Description EN', '$rows = 40' , $id='elm4', false );

       $this->Text('titleAr', 'Title Ar', false,  null ,"col-md-12" , "" , ""  ); 

	   	     $this->TextErea('detailsAr', 'Description Ar', '$rows = 40' , $id='elm5', false );

        	   

			     $this->Text('Thumb', 'Photo',  false );

		

		 

			    $this->Text('calories', 'Calories', true,  null ,"col-md-12" , "" , ""  ); 		 

				$this->Text('carbs', 'Carbs', true,  null ,"col-md-12" , "" , ""  ); 

				$this->Text('proteins', 'Proteins', true,  null ,"col-md-12" , "" , ""  ); 

			    $this->Text('fats', 'Fats', true,  null ,"col-md-12" , "" , ""  ); 

        $this->loadSubmit();



    }



}