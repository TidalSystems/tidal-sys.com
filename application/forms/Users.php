<?php 



class Form_Users extends Form_SuperForm {



     public function init() {



$notEmpty = new Zend_Validate_NotEmpty();

$notEmpty->setMessage('The field cannot be empty!');



 





 $Alpha = new Zend_Validate_EmailAddress();

 $Alpha->setMessage('is no valid email address');







          $this->Text('firstname', 'First Name ', true , null , null , null , 'required');

          $this->Text('lastname', 'Last Name ', true  ,null , null , null , 'required');

          $this->Text('username', 'User Name ', true  , null , "col-md-12" , null , 'required');

          $this->Text('email', 'Email', true , null , null , null , 'required');

 

         $this->Text('address', 'Address  ', false);

     

         $this->Text('phone', 'Phone ', false);

      

         $this->Text('CellPhone', 'Cell Phone ', false);



     

         $this->Text('epersonalphone	', 'Personal Phone	: ', false);

         $this->Text('thumb	', 'Personal/Profile Photo', false);

         $this->Text('allpermissionsmain', '', false , null , null , 'display:none' , '');

         $this->Text('permissions', '', false , null , null , 'display:none' , '');

 

 

 

 

 

 

  

  

        $password = $this->createElement('text', 'password');

        $password->setRequired('true');

        $password->setLabel('Password');   

        $password->setAttrib('type',"password") ;  

        $password->setAttrib('required',"required") ; 

        $password->setAttrib('class',"form-control") ; 

 

        $password->addValidator($notEmpty, true);

        $password->addValidator('Regex', true, array('pattern' => '/(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+/' ));

        $password->getValidator('Regex')->setMessage("Password should contain at least one upper and one lower case letter and one digit minimum ");

        $password->addValidator('StringLength', true, array('min' => 8)); 

        $password->getValidator('StringLength')->setMessage("Password should contain 8 charcter.");      

        $password->addFilter('StringTrim');

 

        $this->addElement($password);







  $readonly = $this->createElement('checkbox','readonly'); 

  $readonly->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false: true)");  

  $readonly->setLabel('Read Only');        

  $readonly->setAttrib('class','icheckbox_flat-blue');    

  $this->addElement($readonly);     

        

 



  $manager = $this->createElement('checkbox','manager'); 

  $manager->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false: true)");  

  $manager->setLabel('Manager');        

  $manager->setAttrib('class','icheckbox_flat-blue');    

  $this->addElement($manager);     

  



 

  $inactive = $this->createElement('checkbox','inactive'); 

  $inactive->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false: true)");  

  $inactive->setLabel('Inactive');        

  $inactive->setAttrib('class','icheckbox_flat-blue');    

  $this->addElement($inactive);     

     							





  $seo = $this->createElement('checkbox','seo'); 

  $seo->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false: true)");  

  $seo->setLabel('SEO Section');        

  $seo->setAttrib('class','icheckbox_flat-blue');    

  $this->addElement($seo);     





							$this->loadSubmit();   



 }



}





