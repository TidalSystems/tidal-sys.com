<?php 


 

class Form_PagesTop extends Form_SuperForm {
 
    public function init() {

  
        $modelBlocks = new Model_PlusData();



        $modelBlocks->_name = 'pages';



        $lang = Func_Lang::getLang();



        $where = array('type2' => 'textdrop', 'level' => 1);



        $catid = $this->createElement('select', 'pageid');



        $catid->setLabel('Parent : ');



        $catid->addMultiOption('no', 'No Parent');



        foreach ($modelBlocks->selectForArray($where) as $values) {



            if ($this->options['EditRow']['id'] == $values['id']) {



                



            } else {



                $catid->addMultiOption($values['id'], $values['title']);



            }



        } $catid->setRequired(false); $this->addElement($catid);

 




  $is_active3 = $this->createElement('checkbox','menu'); 
  $is_active3->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $is_active3->setLabel('Main Menu');        
  $is_active3->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($is_active3); 

  

  $is_active31 = $this->createElement('checkbox','footerright'); 
  $is_active31->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $is_active31->setLabel('Footer Right');        
  $is_active31->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($is_active31); 

  
  $is_active312 = $this->createElement('checkbox','footerleft'); 
  $is_active312->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $is_active312->setLabel('Footer Left');        
  $is_active312->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($is_active312); 


  $is_active32 = $this->createElement('checkbox','top'); 
  $is_active32->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");  
  $is_active32->setLabel('Top Menu');        
  $is_active32->setAttrib('class','icheckbox_flat-blue');    
  $this->addElement($is_active32); 

 

	 





		$show_form22 = $this->createElement('select', 'type2');
		$show_form22->setLabel('Type Page: ');
        $show_form22->setRequired(TRUE);
        $show_form22->addMultiOption('text', 'Text');
        $show_form22->addMultiOption('textdrop', 'Drop Down');
        $show_form22->addMultiOption('packagetype', 'Show all Package Type ');
        $show_form22->addMultiOption('testimonials', 'Testimonials');
        $show_form22->addMultiOption('offer', 'Offers');
        $show_form22->addMultiOption('press', 'Press');
        $show_form22->addMultiOption('before', 'Show Before GO all Country');
        $show_form22->addMultiOption('group', 'Show Group request Form');
        $show_form22->addMultiOption('register', 'Register');
  
        $show_form22->setRequired(true);
        $this->addElement($show_form22);		

  

  	



  $username = $this->createElement('text', 'data5');



   $username->setRequired(false);$this->addElement($username);



        



     $this->Text('title', 'Title: ', true);

   


     $this->TextErea('decription', 'Decription 1 ', false);

 
$this->TextErea('decription2',  'Description 2', '$rows = 40' , $id = 'elm2', false );

      $this->Text('thumb', 'Headr Image', false); 
   $this->text('table_image', 'Header Image' , false);


 

     $this->text('image2', 'Background  Image Title ' , false );

 

 

 

   



    $this->Text('pagurl', 'Page Url ', false);



        $this->loadSubmit();



        



      



    }







}