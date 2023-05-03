<?php



class Func_SendMail  {

    public function  __construct()

    {

        Zend_Registry::set('EmailConfig', new Zend_Config_Ini(APPLICATION_PATH.'/configs/EmailConfig.ini', 'production'));



    }



    public function SendMail($to,$title,$message,$from='')



    {



        $sendWay = 2;



        if($sendWay == 1)



        {



             $this->config = Zend_Registry::get('EmailConfig');



             $host = $this->config->email->smtp->host ;



             $username =  $this->config->email->smtp->username ;



             $password =  $this->config->email->smtp->password ;



             $port = $this->config->email->smtp->port ;



             $type = $this->config->email->smtp->type ;



             $authmail = $this->config->email->smtp->auth ;







             $options = array(



                    'auth' => $authmail,



                    'username' => $username,



                    'password' => $password,



                    //'ssl' => $type,



                    'port' => $port



                    );







            $transport = new Zend_Mail_Transport_Smtp($host, $options);



            Zend_Mail::setDefaultTransport($transport);



        }



        $msg = nl2br($message);



        $mail = new Zend_Mail('utf-8');



        $mail->addTo($to, '');



	$mail->setFrom('no-reply@tidal-sys.com', 'Tidal Information Systems');



        $mail->setBodyHtml($msg);



        $mail->setSubject($title);



        $mail->send();



        return true;



    }



}