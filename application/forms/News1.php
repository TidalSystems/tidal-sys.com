<?php
class Form_News1 extends Form_SuperForm {
    public function init() {
        $this->Text('title', 'Titel : ', true);
 
        $this->TextErea('data', 'Content  ');
 
        $this->loadSubmit();
        $a = $this->createElement('hidden', 'type');
        $a->setValue('news1');
        $this->addElement($a);
        
    }
}