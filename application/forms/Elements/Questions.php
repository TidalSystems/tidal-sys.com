<?php 

class  Form_Elements_Questions extends Zend_Form_Element_Xhtml{
   
    
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
        if(!$_POST)
        {
              $this->_value = $value;
        }
        else
        {
            if($_POST)
            {
                $i =0 ;
                foreach($_POST['question_'] as $ques)
                {
                    $i++;
                    $build['questions'] = $ques;
                    $build['idq'] = $i;
                    foreach($_POST['answer_text_'][$i] as $ans)
                    {
                        $build['answers'][] = $ans;
                        $build['corect'] = $_POST['answer_'][$i];
                    }
                    foreach($_POST['answer_image_'][$i] as $imgd)
                    {
                        $build['answers_image'][] = $imgd;
                    }

                    $con[] = $build;
                    unset($build);
                    
                }
                print_r($con);
                $value = serialize($con);
            }


            $this->_value =  $value;
        }
        
       return $this;
    }
    public function getValue()
    {
        $value =  $this->_value;
        $this->setValue($value);
        return parent::getValue();
    }
    
   
}
