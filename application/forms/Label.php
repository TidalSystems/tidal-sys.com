<?php 

class Form_Label extends Form_SuperForm {



    public function init() {

        $this->Text('title', 'Title   ', false);

        
 



        $this->Upload('image', 'jpg,png,gif,jpeg', 'Photo dimension: 50 Width x 47 Height  '); 



		$this->loadSubmit();

    }



}