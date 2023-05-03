<?php 
 class Form_HomePage extends Form_SuperForm {
    public function init() {
        $this->setAttrib('accept-charset', 'utf-8');
        $this->Text('title', 'Title  ', false);
        $this->Text('displayorder', 'Display Order Number ', false );
        $this->TextErea('data', 'Content' );
                  
        $a = $this->createElement('hidden', 'pageid');
        $a->setValue('0');
        $this->addElement($a);
         
        
        $this->loadSubmit();
        
    }
}