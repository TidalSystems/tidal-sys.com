<?php 
class Form_Socialiconscode extends Form_SuperForm {
    public function init() {

        $this->Text('topsocial', 'topsocial : ', false);
$this->Text('packageicons', 'packageicons : ', false);


 $this->Text('Bronze', 'Bronze : ', false);

 $this->Text('Silver', 'Silver : ', false);

 $this->Text('Golden', 'Golden : ', false);
   
							$this->loadSubmit();   

 }

}









 