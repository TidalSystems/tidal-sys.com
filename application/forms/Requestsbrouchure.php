<?php
class Form_Requestsbrouchure extends Form_SuperForm {
    public function init() {

 

 $this->Text('email2', '  Email', false); 
 $this->Text('created_on', 'Date', false); 

 $this->Text('utm_medium2', '  utm_medium', false); 
 $this->Text('utm_source2', '  utm_source', false); 
 $this->Text('utm_campaign2', '  utm_campaign', false); 

 $this->Text('AGENCY_NAME2', 'Agency_Name', false); 

 $this->Text('IATA2', '  Iata', false); 
 $this->Text('FIRSTNAME2', '  First Name', false); 
 $this->Text('LASTNAME2', 'Last Name', false); 
 $this->Text('PRIMARY_PHONE2', '  Primary_Phone', false); 
  $this->Text('SECONDARY_PHONE2', '  Secondary Phone', false); 
 
 $this->Text('ADDRESS2', '  Address', false); 
 $this->Text('STREET_NO2', '  Street No', false); 
 $this->Text('STREET_NAME2', '  Street Name', false); 
 $this->Text('CITY2', '  City', false); 
 $this->Text('STATE2', '  State', false); 
 $this->Text('POSTAL_CODE2', '  Postal Code', false); 
 $this->Text('ADDRESS22', 'Address', false); 
 
 $this->Text('ITALY_BROCHURE_QUANTITY2', 'Italy Brochures', false); 
 $this->Text('EGYPT_BROCHURE_QUANTITY2', 'Egypt Brochures', false); 
 $this->Text('AFRICA_BROCHURE_QUANTITY2', 'Africa Brochures', false); 
 $this->Text('MEDITERRANEAN_BROCHURE_QUANTITY2', 'Mediterranean Brochures', false); 
  $this->Text('LATIN_AMERICA_BROCHURE_QUANTITY2', 'Latin America & Cuba Brochures', false); 
 

	 $this->loadSubmit();

    }



}

