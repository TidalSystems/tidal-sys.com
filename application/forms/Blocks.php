<?php 

class Form_Blocks extends Form_SuperForm {

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
	 

        $this->Text('title', 'Title : ', false);

      
        $this->TextErea('data', 'Content' );
        

        $this->Upload('table_image',  'jpg,png,gif,jpeg',  'Image ' );
         
          $this->Text('displayorder', 'Display Order : ', false );
		 
        $this->loadSubmit();

    }

}