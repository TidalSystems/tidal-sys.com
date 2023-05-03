<?php 



class Form_SuperForm extends Zend_Form {

    public $options = 0;

    public function __construct($options = null) {

        $this->options = $options;

        $this->setMethod('post');

        $this->setName('kamalForm');

        $this->setAttrib('class', '');

        $this->setAttrib('id', '');

        $this->setDecorators(array(

            'FormElements',

            array('HtmlTag', array('tag' => 'table' , 'class'=>'myformt' , 'align'=>'center')),

            'Form',

        ));

        parent::__construct();

    }

    public function loadDecoration($deca = null)

    {

    	

	        $myDec = new Form_Decorator_MainDecorator();

	        if(isset($this->options['dec']))

	        	$myDec->myDec = $this->options['dec'];

        	$myAllDec = $myDec->loadDecorator();

        

        	if(isset($this->options['formFor']))

	        	$this->setAttrib('for', $this->options['formFor']);

	        

	        if($deca == null)

	        {

	            $this->setElementDecorators($myAllDec['all']);

	        }

	        else

	        {

	            return $myAllDec[$deca];

	        }

    }

    public function loadSubmit()

    {

        $submit = $this->createElement('submit', 'save');

        $submit->setLabel('Save');

        $submit->setDecorators($this->loadDecoration('submit'));

        $submit->setAttrib('class', 'btn btn-primary btn-lg');

        $submit->setAttrib('style', 'margin:20px');

        $this->addElement($submit);

    }

    public function loadSubmitClose()

    {

        $submit = $this->createElement('submit', 'saveClose');

        $submit->setLabel('Save');

        $submit->setDecorators($this->loadDecoration('submit'));

        $submit->setAttrib('class', 'buttons');

        $this->addElement($submit);

    }

    public function is_active()

    {

        $is_active =  $this->createElement('checkbox','is_active');

        $is_active->setAttrib('onclick',"var j = jQuery('#check').attr('disabled', jQuery('#check').attr('disabled') ? false : true)");

        $is_active->setLabel('Yes / No');

        $is_active->setAttrib('class','checkboxcecked');

        $this->addElement($is_active);

    }

public function TextErea($name , $label , $rows = 20 ,$id = 'elm1'  , $require = false ,  $class = '' )

    {

        $content = $this->createElement('textarea',$name);

        $content->setAttrib('cols', 63);

        $content->setAttrib('id', $id);

        $content->setAttrib('rows', $rows);
        $content->setAttrib('class', $class);

        $content->setLabel($label);

        $content->addFilter(new Form_Filter_Stripslashes());

        if($require == true)

        {

            $content->setRequired(TRUE);

            $content->addErrorMessage('This is Required Filed');

        }

        $this->addElement($content);

    }

    public function Text($name , $label , $require = false , $filter = null , $class = null , $style = null , $required = null)

    {
        $title = $this->createElement('text',$name);
        $title->setAttrib('size', '40');
        if($require == true)
        {

            $title->setRequired(TRUE);
            $title->addErrorMessage('This is Required Filed');
        }

        if($filter != null)

        {
            $title->addFilter(new $filter());
        }

 
            $title->setAttrib('class', 'form-control '.$class);

     

 if($style != null)

        {
            $title->setAttrib('style', $style);

        }

 if($required != null)

        {
            $title->setAttrib('required', $required);

        }
        $title->setLabel($label);

        $this->addElement($title);

    }

    public function Upload($name,$ext,$label , $require = false)

    {

        $upload = $this->createElement('file',$name);

        $upload->setRequired(false);

       

        if($require == true)

        {

            $content->setRequired(TRUE);

            $content->addErrorMessage('This is Required Filed');

        }



        $upload->setDescription('Allow Extension : '.$ext);

        $upload->setDestination(APPLICATION_PATH . '/../MyUpload/');

        $upload->addValidator('Count', false, 2);

        $upload->addValidator('Size', false, 100485760);

        if(isset($_FILES[$name]))

        {

            $filename3 = strtolower($_FILES[$name]['name']);
            $filename = preg_replace('/\s+/', '', $filename3);


            $exts = explode("[/\\.]", $filename);

            $rand = rand(0,9999);

            $time = time();

            $rep = $rand.$time;

            $imagemedia = $rep.'.'.end($exts);

	        $upload->addFilter("Rename",array("target" => 'MyUpload/'.$imagemedia,"overwrite" => false));

        }

        $upload->addValidator('Extension', false, $ext);

        $upload->setLabel($label);

        $this->addElement($upload);



        if($this->options['EditRow'][$name])

        {

            $a = new Form_Elements_Html($name.'_lastval');

            $a->setValue(''.$this->options['EditRow'][$name]);

            $a->setLabel( '   ');

            $a->setDecorators($this->loadDecoration('all'));

            $this->addElement($a);

        }



    }







public function Upload22($name,$ext,$label , $require = false)

    {

        $upload22 = $this->createElement('file',$name);

        $upload22->setRequired(false);

       

        if($require == true)

        {

            $content->setRequired(TRUE);

            $content->addErrorMessage('This is Required Filed');

        }



         

        $upload22->setDestination(APPLICATION_PATH . '/../MyUpload/');

        $upload22->addValidator('Count', false, 2);

        $upload22->addValidator('Size', false, 100485760);

        if(isset($_FILES[$name]))

        {

            $filename = strtolower($_FILES[$name]['name']);

            $exts = explode("[/\\.]", $filename);

            $rand = rand(0,9999);

            $time = time();

            $rep = $rand.$time;

            $imagemedia = $rep.'.'.end($exts);

	        $upload22->addFilter("Rename",array("target" => 'MyUpload/'.$imagemedia,"overwrite" => false));

        }

        $upload22->addValidator('Extension', false, $ext);

        $upload22->setLabel($label);

        $this->addElement($upload22);



         

    }

    public function removeDecorator($elemtnName) {

            $this->getElement($elemtnName)->setDecorators(array('ViewHelper',

            'Description',

            'Errors'));

    }

    public function elmentDecorator($elemtnName , $decorator)

    {

        $arr = array_merge((array) array($decorator) , (array) $this->loadDecoration('all') );

        unset($arr[1]);

        $this->getElement($elemtnName)->setDecorators($arr);

    }

  

}