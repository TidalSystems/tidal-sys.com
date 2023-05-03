<?php class Form_Admin extends Form_SuperForm {

    public function init() {

        $username = $this->createElement('text', 'username');


        $username->setRequired(true);


        $username->setLabel('User Name  ');


        $username->addErrorMessage('this filed is required');


        $this->addElement($username);








        $password = $this->createElement('password', 'password');


        $password->setRequired('true');


        $password->setLabel('Password  ');


        $password->addErrorMessage('this filed is required');


        $password->setAttrib('class', 'logninptxxpass');


        $this->addElement($password);





       $captcha= new Zend_Form_Element_Captcha('captchaField', array(




                'id'=>'captchas',
                'class'=>'form-control',
                 'name'       => 'captchaField',
                'captcha' => array(
                'captcha' => 'Image',
                'required' => true,
                'font'=> './MyUpload/Arial.ttf',
                'wordlen'=>'4',
                'width'=>'250',
                'height'=>'70',
                'margin-bottom'=>'10px',
                'ImgAlign'=>'center',
                'imgdir'=>   './themes/en/captcha',
                'imgUrl' => 'http://www.tidal-sys.com/themes/en/captcha',
                'DotNoiseLevel'=>'1',
                'LineNoiseLevel'=>'1', 
                'Expiration'=>'1',
                'fontsize'=>'26'


                )));


              







        $this->addElement($captcha);


 





        $this->loadSubmit();


    }





}





?>