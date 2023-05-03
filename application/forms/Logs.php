<?php 
class Form_Logs extends Form_SuperForm {
    public function init() {

        $this->Text('ip', 'Ip', false);
        $this->Text('createdate', 'Created Date', false);
		 $this->Text('createtime', 'Created Time', false);
	 $this->Text('timedate', 'timedate', false);
	 $this->Text('user', 'User', false);
   
							$this->loadSubmit();   

 }

}









 