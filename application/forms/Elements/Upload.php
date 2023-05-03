<?php 
class  Form_Elements_Upload extends Zend_Form_Element_Xhtml{
   
    
    public function __construct($spec, $options = null)
    {
       $this->addPrefixPath(
            'Form_Decorator',
            APPLICATION_PATH.'/forms/Decorator/',
            'decorator'
        );
        parent::__construct($spec, $options);
    }
    public function setValue($value)
    {
        

        if(!$value)
        {
            $name = $this->getFullyQualifiedName();
            if($_FILES[$name] && $_POST)
            {
                $folder = $this->getAttrib('folder');
                $ext = $this->getAttrib('ext');
                $value = $this->_uploadMyFile($name,$ext,$folder);
            }
            $this->_value = $value;
        }
        else
        {
            $this->_value = $value;
        }
        return $this;
    }
    public function getValue()
    {
        $value =  $this->_value;
        $this->setValue($value);
        return parent::getValue();
    }
    
    private  function _uploadMyFile($name ,$allowedEx , $uploadFolder)
    {
        $myname = $name;
        $allExInARCMs = 'pdf';

        $filename = strtolower($_FILES[$myname]['name']);
        $exts = split("[/\\.]", $filename);

         $exEXT = explode(',', $allExInARCMs);
         
         if(!in_array(end($exts), $exEXT))
         {
             die('[{"error":"acceptFileTypes"}]');
         }

        $upload = new Zend_File_Transfer();
        $upload->setDestination($uploadFolder);
        $upload->addValidator('Count', false, 10);
        $upload->addValidator('Size', false, 5000000);
            $rand = rand(0,9999);
            $time = time();
            $rep = $rand.$time;
            $imagemedia = $rep.'.'.end($exts);
        $upload->addFilter("Rename",array("target" =>$uploadFolder.'/'.$imagemedia,"overwrite" => false));
        $upload->addValidator('Extension', false, $allowedEx);

        if ($upload->isValid()) {
      
            $upload->receive();
            $files = $upload->getFileInfo();
            $file_name = $files[$myname]['name'];
           
            return $file_name;
        }
        
    }
}
