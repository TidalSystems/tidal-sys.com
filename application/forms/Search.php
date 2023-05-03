<?php 
 
class Form_Search extends Form_SuperForm {

    public function init() {
        $email = $this->createElement('text', 'email');
        $email->setRequired('true');
        $email->addValidator(new Zend_Validate_EmailAddress());
        $email->addFilters(array(new Zend_Filter_StringTrim(), new Zend_Filter_StringToLower()));
        $email->addErrorMessage('الحقل اجباري');
        $email->setAttrib('class', 'textinput');
        $email->setLabel('البريد الإلكتروني :- ');
        $this->addElement($email);
		
        $name = $this->createElement('text', 'name');
        $name->setRequired('true');
        $name->addErrorMessage('الحقل اجباري');
        $name->setAttrib('class', 'textinput');
        $name->setLabel('الإسم :- ');
        $this->addElement($name);
		
		$modelCat = new Model_PlusData();
		$modelCat->_name = 'maillist_categories';
		$cats = $modelCat->selectForArray();
		$catlist = array(''=>'');
		foreach($cats as $cat)
			$catlist[$cat['id']] = $cat['name'];
		
		$cats = $this->createElement('select', 'category_id');
		$cats->setRequired(FALSE);
		$cats->setLabel('التصنيف :- ');
		$cats->setMultiOptions($catlist);
		$this->addElement($cats);
		
        $this->loadSubmit();
    }

}