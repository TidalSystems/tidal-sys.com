<?php 

class Form_Blocks3 extends Form_SuperForm {

    public function init() {
       
              $modelBlocks = new Model_PlusData();
        $modelBlocks->_name = 'pages';
        $lang = Func_Lang::getLang();
            $where = array('type2' => 'text');
        $catid = $this->createElement('select', 'pageid');
        $catid->setLabel('Parent : ');
        $catid->addMultiOption('no', 'No Parent');
        foreach ($modelBlocks->selectForArray($where) as $values) {
            if ($this->options['EditRow']['id'] == $values['id']) {
                
            } else {
                $catid->addMultiOption($values['id'], $values['title']);
                $categories12 = $modelBlocks->selectForArray(array('pageid' => $values['id']), array('displayorder' => 'ASC'));
                foreach ($categories12 as $i => $categorys)
                {
                    if ($this->options['EditRow']['id'] != $categorys['id']) {
                        $catid->addMultiOption($categorys['id'], $values['title'].'   |_'.$categorys['title']);
  
                    }
                }



            }
        } $catid->setRequired(false); $this->addElement($catid);
         $username = $this->createElement('text', 'data5');
$this->addElement($username);

		$show_form2 = $this->createElement('select', 'type');
		$show_form2->setLabel('Type Page: ');
        $show_form2->setRequired(FALSE);
        $show_form2->addMultiOption('contact', 'Contact Style');
        
         
        $this->addElement($show_form2);
 
        $this->TextErea('data', 'Content' );
        

 $this->Text('title1', 'Phone Title : ', false);
 
         $this->TextErea('data1',  'Phone', '$rows = 20' , $id = 'elm4', false );


 $this->Text('title2', 'Fax Title : ', false);
         $this->TextErea('data2',  'Fax', '$rows = 20' , $id = 'elm2', false );


 $this->Text('title3', 'Email Title : ', false);
         $this->TextErea('data3',  'Email', '$rows = 20' , $id = 'elm3', false );


 $this->TextErea('title4', 'Googel Map : ', '$rows = 20' , false);

 
          $this->Text('displayorder', 'Display Order : ', false );
        
        $this->loadSubmit();

    }

}