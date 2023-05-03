<?php 


class Form_Destinationpage extends Form_SuperForm {

  public function init() {


          $modelBlocks = new Model_PlusData();

        $modelBlocks->_name = 'region';

        $lang = Func_Lang::getLang();
        $where = array( );
        $catid = $this->createElement('select', 'regionid');
        $catid->setLabel('Select Region ');
        $catid->setRequired(TRUE);
        $catid->addMultiOption('', '----------Select Region or External Page -----------');
         $catid->addMultiOption('0000', '--- External Page');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            if ($this->options['EditRow']['id'] == $values['id']) {
            } else {
                $catid->addMultiOption($values['id'], $values['title']);
            }
        
        } $catid->setRequired(true); $this->addElement($catid);




    $this->Text('name', 'Title ', false , null , "col-md-11"); 

 
   $this->TextErea('description',  'Description', '$rows = 20' , $id = 'elm3', false );
   $this->upload('photo', 'jpg,jpeg,png,gif ' ,  'Photo' );

    $this->Text('linktext', 'Link Text', false , null , "col-md-4");
    $this->Text('url', 'Link URL', false , null , "col-md-11"); 


		$target = $this->createElement('select', 'target');
        $target->setRequired(FALSE);
		$target->addMultiOption('_self', '_self');
		$target->addMultiOption('_blank', '_blank');
        $target->setRequired(false);$this->addElement($target);
  


     




  
	$this->loadSubmit(); 



}

}