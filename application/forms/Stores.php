<?php 
class Form_Stores extends Form_SuperForm {

    public function init() {


      $this->Text('AgencyName', 'Agency Name', false  , null , "col-md-8"); 
      $this->Text('Address', 'Address', false  , null , "col-md-10"); 



      $this->Text('City', 'City', false  , null , "col-md-4"); 
      $this->Text('State', 'State', false  , null , "col-md-4");



      $this->Text('Zip', 'Zip', false  , null , "col-md-4"); 
      $this->Text('Phone', 'Phone', false  , null , "col-md-4");



      $this->Text('Fax', 'Fax', false  , null , "col-md-4"); 
      $this->Text('Sales', 'Sales', false  , null , "col-md-4");

      $this->Text('Latitude', 'Latitude', false  , null , "col-md-4");
      $this->Text('Longitude', 'Longitude', false  , null , "col-md-4");


							$this->loadSubmit();   

 }

}









 