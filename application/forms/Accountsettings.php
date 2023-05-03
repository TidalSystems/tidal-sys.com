<?php  

class Form_Accountsettings extends Form_SuperForm {

 
    public function init() {

 $this->Text('TopMenuColor', 'Top Menu Color', false , null , null , null , '');
$this->Text('LeftSlideColor', 'Left Slide Color', false , null , null , null , '');
$this->Text('ButtonColor', 'Button Color ', false , null , null , null , '');
      

      

	 $this->loadSubmit();

    }



}

