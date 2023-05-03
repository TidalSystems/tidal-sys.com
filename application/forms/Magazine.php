<?php  
class Form_Magazine extends Form_SuperForm {
     public function init() {
   
     $this->Text('title', 'Title', false,  null ,"col-md-12" , "" , "required"  ); 

     $this->Text('photo', 'Photo (width:500px)', false   ); 
 


        $month = $this->createElement('select', 'month');
        $month->setLabel('Month');
        $month->setRequired(TRUE);
        $month->setAttrib('required', 'required');
        $month->addErrorMessage('required');
        $month->addMultiOption('', 'Month ');
        $month->setAttrib('class', 'form-control col-md-6');
        $month->setAttrib('required',"required") ;
        for ($i=1;$i<=12;$i++) {
                $month->addMultiOption($i , $i);
        } $month->setRequired(true); $this->addElement($month);


        $year = $this->createElement('select', 'year');
        $year->setLabel('year');
        $year->setRequired(TRUE);
        $year->setAttrib('required', 'required');
        $year->addErrorMessage('required');
        $year->addMultiOption('', 'Year ');
        $year->setAttrib('class', 'form-control col-md-6');
        $year->setAttrib('required',"required") ;
        $a= date("Y");
        for ($i=$a-5;$i<=$a;$i++) {
                $year->addMultiOption($i , $i);
        } 
        for ($i=$a;$i<=$a+5;$i++) {
                $year->addMultiOption($i , $i);
        } 


$year->setRequired(true); $this->addElement($year);


    $this->Text('pagurl', 'Page Url ',false , null , "col-md-9");

       

        $this->loadSubmit();







    }



}