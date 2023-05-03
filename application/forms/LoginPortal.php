<?php 
class Form_LoginPortal extends Form_SuperForm {
    public function init() {


        $email = $this->createElement('text', 'email');
        $email->setRequired(true);
        $email->setLabel('User Name / Email ');
        $email->addErrorMessage('Filed Required');
        $email->setAttrib('class', 'zzz2 form-control');
        $email->setAttrib('style', 'width:80%;    margin: 0px;');
      $email->setAttrib('required', 'required');
        $this->addElement($email);

   
        $password = $this->createElement('password', 'password');
        $password->setRequired('true');
        $password->setLabel('Password ' );
       $password->setAttrib('style', 'width:80%;    margin: 0px;');
       $password->setAttrib('required', 'required');
        $password->addErrorMessage('Filed Required');
        $password->setAttrib('class', 'form-control');
        $this->addElement($password);

         
	  
        $this->loadSubmit('Send');

     $captcha= new Zend_Form_Element_Captcha('captcha', array(
                 
                'id'=>'captchas',
                'title'=>'Security Check.',
                 'name'       => 'captchaField',

                'captcha' => array(
                'captcha' => 'Image',
                'required' => true,
                'font'=> './MyUpload/monofont.ttf',
                'wordlen'=>'4',
                'width'=>'200',
                'height'=>'55',
                'label' => 'Please verify you are human',
                'ImgAlign'=>'left',
                'imgdir'=>   './themes/en/captcha',
                'imgUrl' => '../themes/en/captcha',
                'DotNoiseLevel'=>'0',
                'LineNoiseLevel'=>'0', 
                'Expiration'=>'0',
                'fontsize'=>'36' ,
                'description' => '<div id="refreshcaptcha">Refresh Captcha Image</div>'
                ),
            

));
  
 

        $this->addElement($captcha);
	 
 
 $this->setElementDecorators(array('ViewHelper', 'Errors',
    array(array('data' => 'HtmlTag'), array('tag' => 'td')),
    array(array('row' => 'HtmlTag'), array('tag' => 'tr'))
));

$this->getElement('captchaField')->removeDecorator("viewhelper");

		

	}

}