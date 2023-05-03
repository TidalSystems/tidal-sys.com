<?php 
class Form_LogToMail extends Form_SuperForm {
    public function init() {

        $username = $this->createElement('text', 'username');

        $username->setRequired(true);

        $username->setLabel('User Name  ');
        $username->setAttrib('class', 'form-control');
        $username->addErrorMessage('this filed is required');

        $this->addElement($username);





        $password = $this->createElement('password', 'password');

        $password->setRequired('true');

        $password->setLabel('Password');
        $password->setAttrib('class', 'form-control');
        $password->addErrorMessage('this filed is required');

        $password->setAttrib('class', 'logninptxxpass');

        $this->addElement($password);
 


     $captcha= new Zend_Form_Element_Captcha('captchaField', array(

                 

                'id'=>'captchas',

                'title'=>'Security Check.',

                 'name'       => 'captchaField',



                'captcha' => array(

                'captcha' => 'Image',

                'required' => true,

                'font'=> './MyUpload/ARIALN_0.ttf',

                'wordlen'=>'4',

                'width'=>'200',

                'height'=>'50',

                'ImgAlign'=>'left',

                'imgdir'=>   './themes/en/captcha',

                'imgUrl' => 'https://www.ebbteam.com/amimpressions/themes/en/captcha',

                'DotNoiseLevel'=>'1',

                'LineNoiseLevel'=>'1', 

                'Expiration'=>'1',
                'fontsize'=>'36'

                )));

  





        $this->addElement($captcha);

	$this->getElement('captchaField')->removeDecorator("viewhelper");



        $this->loadSubmit();

    }



}



?>