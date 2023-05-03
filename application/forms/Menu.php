<?php class Form_Menu extends Form_SuperForm {
  public function init() {


     $this->Text('PageName',  '', false  , null , "col-md-7" , "display:none");     
  
        $this->loadSubmit();

    }

}
