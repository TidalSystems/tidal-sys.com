<?php 



class Form_Decorator_MainDecorator {



    public $myDec = 0;



    public function loadDecorator() {

        if ($this->myDec == 0) {

            return $this->backEnd();

        } else if ($this->myDec == 1) {

            return $this->frontEnd();

        }

    }



    public function frontEnd() {

        

    }



    public function backEnd() {

        $dec = array();



        // All Element

        $dec['all'] = array(

            'ViewHelper',

            'Description',

            'Errors',

            array('Label', array('tag' => 'span')),

            array(array('row' => 'HtmlTag'), array('tag' => 'div', 'class' => 'colorchn')),

            array('Errors', array('class' => 'errors formError', 'align' => 'center')),

            array('Description', array('tag' => 'div', 'class' => 'form-msg-info-advanced', 'align' => 'center')));



        // Upload Element

        $dec['files'] = array(

            'Errors',

            'File',

            'Description',

            array('Label', array()),

            array(array('row' => 'HtmlTag'), array('tag' => 'div', 'class' => 'colorchn')),

            array('Description', array('tag' => 'div', 'class' => 'form-msg-info-advanced', 'align' => 'center')));



        $dec['upload'] = array(

            'Upload',

            'Description',

            'Errors',

            array('Label', array('tag' => 'span')),

            array(array('row' => 'HtmlTag'), array('tag' => 'div', 'class' => 'colorchn')),

            array('Errors', array('class' => 'errors formError', 'align' => 'center')),

            array('Description', array('tag' => 'div', 'class' => 'form-msg-info-advanced', 'align' => 'center')));



        // Hint Element

        $dec['hint'] = array(

            'ViewHelper',

            'Description',

            'Errors',

            array('Label', array('tag' => 'span')),

            array(array('row' => 'HtmlTag'), array('tag' => 'div', 'class' => 'hint')),

            array('Description', array('tag' => 'div', 'class' => 'form-msg-info-advanced', 'align' => 'center')));

        // Hint2 Element

        $dec['hint2'] = array(

            'ViewHelper',

            'Description',

            'Errors',

            array('Label', array('tag' => 'span')),

            array(array('row' => 'HtmlTag'), array('tag' => 'div', 'class' => 'hint')),

            array('Description', array('tag' => 'div', 'class' => 'form-msg-info-advanced', 'align' => 'center')));



        $dec['Questions'] = array(

            'Questions',

            'Description',

            'Errors',

            array('Label', array('tag' => 'span')),

            array(array('row' => 'HtmlTag'), array('tag' => 'div', 'class' => 'colorchn Customdate')),

            array('Errors', array('class' => 'errors formError', 'align' => 'center')),

            array('Description', array('tag' => 'div', 'class' => 'form-msg-info-advanced', 'align' => 'center')));

        $dec['Slider'] = array(

            'Slider',

            'Description',

            'Errors',

            array('Label', array('tag' => 'span')),

            array(array('row' => 'HtmlTag'), array('tag' => 'div', 'class' => 'colorchn Customdate')),

            array('Errors', array('class' => 'errors formError', 'align' => 'center')),

            array('Description', array('tag' => 'div', 'class' => 'form-msg-info-advanced', 'align' => 'center')));

       $dec['UploadFiles'] = array(

            'UploadFiles',

            'Description',

            'Errors',

            array('Label', array('tag' => 'span')),

            array(array('row' => 'HtmlTag'), array('tag' => 'div', 'class' => 'colorchn Customdate')),

            array('Errors', array('class' => 'errors formError', 'align' => 'center')),

            array('Description', array('tag' => 'div', 'class' => 'form-msg-info-advanced', 'align' => 'center')));

        // submit Element

        $dec['submit'] = array(

            'ViewHelper',

            'Errors',

            array(array('elementDiv' => 'HtmlTag'), array('tag' => 'div', 'class' => 'buttons ', 'style' => 'margin-top:10px;background: #fff;margin-left: -5px; ', 'align' => 'center')),

        );

        # 0,1,2,3,4;

        return $dec;

    }



}



?>