<?php 
class Form_Locationrestriction extends Form_SuperForm {
    public function init() {

        $this->Text('title', 'Name', false , '' , '' ,'');
        $this->Text('style', '', false  , null , "col-md-7" , "display:none");  
        $this->Text('selectRestrictionCountry', 'select Restriction Country', false , '' , '' ,'');
      
        $this->Text('ip', 'IP', false);
        $this->TextErea('descIPription', 'Description' , '$rows = 40' , $id = 'elm-free', false , 'form-control');
							$this->loadSubmit();   

 }

}









 