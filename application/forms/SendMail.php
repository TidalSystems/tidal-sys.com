<?php 

	class Form_SendMail extends Zend_Form{

		

		

		

		public function init(){

			

			$PHPprotectV26 = $this->createElement('text','title');

			$PHPprotectV26->setRequired(true);

			$PHPprotectV26->addErrorMessage(' Add Titel ');

			$this->addElement($PHPprotectV26);

			

			$PHPprotectV112 = $this->createElement('textarea','text');

			$PHPprotectV112->setRequired(true);

			$PHPprotectV112->addErrorMessage(' Add Message ');

			$PHPprotectV112->setAttrib('id','text');

			$this->addElement($PHPprotectV112);

			

			

			$PHPprotectV106 = $this->addElement('submit','submit',array('label'=>'Send','class'=>'btn_style'));

			

		}

		

	}



?>

