<?php 

class Form_Featuring extends Form_SuperForm {



    public function init() {

        $this->Text('title', 'Title   ', false);

        
 



        $this->Upload('image', 'jpg,png,gif,jpeg', 'Photo dimension: 49 Width x 42 Height  '); 



		$this->loadSubmit();

    }



}