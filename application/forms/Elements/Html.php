<?php 



class Form_Elements_Html extends Zend_Form_Element_Xhtml{

   public $helper = 'formNote';

    public function setValue($value)

   {

        

           $ex = explode('.', $value);

           $imageValue = array('jpg','jpeg','gif','png');



           if(in_array(end($ex) , $imageValue))

           {

               $this->_value = '<a href="'. APP_BASEURL.'/MyUpload/'.$value .'" class="highslide" onclick="return hs.expand(this)" >

                    <img style="width:250px"  src="'. APP_BASEURL.'/MyUpload/'.$value .'"  >

                    </a>';

           }

           else

           {

               $this->_value = '<a class="buttons" href="'. APP_BASEURL.'/files/frbn/i/'.$value .'" " >

                <b>    Download </b>

                    </a>';

           }

   }

}





