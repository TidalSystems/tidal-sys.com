 
    


<?php  


class Form_Defaulseo extends Form_SuperForm







{







	public function init()







	{



 
 $this->Text('title', 'Title En', false);

 $this->Text('titleAr', 'Title Ar', false);

 
                $footer = $this->createElement('textarea', 'footer');
                $footer->setAttrib('rows', 7);
                       $footer->setAttrib('style', 'width:90%');

                $footer->setLabel('Footer Description');
                $this->addElement($footer);


    $before = $this->TextErea ('Keywords', 'Keywords En','$rows = 20' , $id = 'elm2', false  , 'form-control');   
    $before = $this->TextErea ('KeywordsAr', 'Keywords Ar','$rows = 20' , $id = 'elm3', false  , 'form-control');   
  
    $before = $this->TextErea ('Description', 'Description En','$rows = 20' , $id = 'elm4', false  , 'form-control');   
    $before = $this->TextErea ('DescriptionAr', 'Description Ar','$rows = 20' , $id = 'elm5', false  , 'form-control');   
   
 $this->Text('email', 'Email', false);

 


         $this->loadSubmit();







	}

}





?>





