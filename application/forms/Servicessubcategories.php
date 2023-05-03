<?php  

class Form_Servicessubcategories extends Form_SuperForm {

    public function init() {



  $this->Text('title', 'Title En', false,  null ,"col-md-12" , "" , "required"  ); 

 $this->Text('titleAr', 'Title Ar', false,  null ,"col-md-12" , "" , ""  );     



 

	  $this->Text('Header', 'Header  (1280*450  px)', false ); 

      $this->Text('Thumb', 'Home Thumb  (350*350 px)', false ); 

  	  $this->TextErea('Data', 'Description', '$rows = 40' , $id='elm2', false );

     $this->TextErea('DataAr', 'Description Ar', '$rows = 40' , $id='elm4', false );

      $this->Text('catID', '', false,  null ,"col-md-12" , "display:none" , ""   , "" ); 

      $this->Text('pagurl', 'Page URL', false,  null ,"col-md-10" , "" , ""   , "" );



      $this->Text('icon', 'Icon', false,  null ,"col-md-10" , "" , ""   , "" );

 

  $showHOme1 = $this->createElement('checkbox','showHOme1'); 

  $showHOme1->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false: true)");  

  $showHOme1->setLabel('show in Home (EXPLORE OUR SUITE) ');        

  $showHOme1->setAttrib('class','icheckbox_flat-blue');    

  $this->addElement($showHOme1);  

  

  

  

   

  $showHOme2 = $this->createElement('checkbox','showHOme2'); 

  $showHOme2->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false: true)");  

  $showHOme2->setLabel('show in Home (OUR SERVICES)');        

  $showHOme2->setAttrib('class','icheckbox_flat-blue');    

  $this->addElement($showHOme2);  



 

        $this->loadSubmit();















    }







}