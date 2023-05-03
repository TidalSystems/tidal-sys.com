<?php  class Form_ItemsSearch extends Form_SuperForm {   
 public function init() {               $this->setMethod('get');        $modelBlocks = new Model_PlusData();        
 $modelBlocks->_name = 'pages';      
   $lang = Func_Lang::getLang();        $where = array('lang'=>$lang);           
        $catid = $this->createElement('select', 'catid');       
		 $catid->setLabel('القسم : ');       
		  $catid->setRequired(TRUE);        $catid->addErrorMessage('الحقل اجباري');      
		    $catid->addMultiOption('', '');        foreach ($modelBlocks->selectForArray($where) as $values) {            
			$catid->addMultiOption($values['id'], $values['title']);        }        $this->addElement($catid);                       
			 $this->loadSubmit();    }}