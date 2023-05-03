<?php
class Form_Requestsevent extends Form_SuperForm {
    public function init() {

 

 $this->Text('seminarname', 'Seminar', false  , null , "col-md-10");
 $this->Text('email2', '  Email', false); 
 $this->Text('created_on', 'Date', false); 

 $this->Text('utm_medium2', '  utm_medium', false); 
 $this->Text('utm_source2', '  utm_source', false); 
 $this->Text('utm_campaign2', '  utm_campaign', false); 

 $this->Text('AGENCY_NAME2', 'Agency_Name', false); 
 $this->Text('CONSORTIA2', 'Consortia', false); 
 $this->Text('IATA2', '  Iata', false); 


 $this->Text('FIRSTNAME2', '  First Name', false); 
 $this->Text('LASTNAME2', 'Last Name', false); 

 $this->Text('FIRSTNAME2z', '  First Name 2', false); 
 $this->Text('LASTNAME2z', 'Last Name 2', false); 


 $this->Text('PRIMARY_PHONE2', '  Primary_Phone', false); 
 $this->Text('ADDRESS2', '  Address', false); 
 $this->Text('STREET_NO2', '  Street No', false); 
 $this->Text('STREET_NAME2', '  Street Name', false); 
 $this->Text('CITY2', '  City', false); 
 $this->Text('STATE2', '  State', false); 
 $this->Text('POSTAL_CODE2', '  Postal Code', false); 

   $this->Text('salesemail', 'Sales Email', false); 

	 $this->loadSubmit();

    }



}

