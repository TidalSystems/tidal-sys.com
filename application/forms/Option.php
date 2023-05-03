<?php  
class Form_Option extends Form_SuperForm
{
	public function init()



	{





                $homepage = $this->createElement('text', 'homepage');



                $homepage->setLabel('Site Title');

$homepage->setAttrib('style', 'width:90%');

                $this->addElement($homepage);



 

 	         

 

                

 



                $keywords = $this->createElement('textarea', 'keywords');



                $keywords->setAttrib('rows', 7);



                $keywords->setAttrib('style', 'width:90%');



                $keywords->setLabel('Keywords');



                $this->addElement($keywords);

                

                







                $metatag = $this->createElement('textarea', 'metatag');
                $metatag->setAttrib('rows', 7);
                       $metatag->setAttrib('style', 'width:90%');

                $metatag->setLabel('Description');
                $this->addElement($metatag);



 

                $footer = $this->createElement('textarea', 'footer');
                $footer->setAttrib('rows', 7);
                       $metatag->setAttrib('style', 'width:90%');

                $footer->setLabel('Footer Description');
                $this->addElement($footer);



                



                /*$upload = $this->Upload('offer', 'jpg,jpeg,png,gif', 'Image');*/







                $this->loadSubmit();



	}



	



}