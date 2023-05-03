<?php 
class Form_Logos extends Form_SuperForm {



    public function init() {

 

   $this->Upload('img', 'jpg,png,gif,jpeg', 'Logo'); 


   		

							$this->loadSubmit();   

 }

}









 