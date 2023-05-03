<?php
class FilesController extends Zend_Controller_Action
{
    public function init()
    {
        $this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender();
        $this->id = $this->_request->getParam('i' , 'noimg.jpg');
        $FileExt = explode('.', $this->id);
        $this->type = end($FileExt);
        $image = explode(',','jpg,gif,jpeg,png');
        $pdf = explode(',','pdf,mov,3gp,flv,mp4,doc,docx');
        if(in_array($this->type, $image))
        {
            $this->FileFolder = PUBLIC_PATH.'/MyUpload/';
        }
        elseif(in_array($this->type, $pdf))
        {
            $this->FileFolder = PUBLIC_PATH.'/MyUpload/';
        }
        else
        {
            die('404 File Not Found');
        }
        require_once APPLICATION_PATH."/../library/CL/imagescrop/ThumbLib.inc.php";
    }
    public function thmbAction()
    {
         $thumb = PhpThumbFactory::create($this->FileFolder.$this->id);
         $thumb->resize(50 , 50 , true);   
         $thumb->show();
    }
    public function riszAction()
    {
        $h = $this->_request->getParam('h' , 400);
        $w = $this->_request->getParam('w' , 400);
        $thumb = PhpThumbFactory::create($this->FileFolder.$this->id);
        $thumb->resize($w, $h);
        $thumb->show();
    }
    public function fulAction()

    {
    	 watermark($this->FileFolder.$this->id,PUBLIC_PATH.'/resources/logo.png');die();
         $thumb = PhpThumbFactory::create($this->FileFolder.$this->id);
         $thumb->show();
    }
    public function frbnAction()
    {
       $fileName = $this->id;
        $ex = explode('.',$fileName);
        $fileDir =  $this->FileFolder;
        $fil = $fileDir .'/'. $fileName;
        $allowEx  = array('pdf','mov','3gp','flv','mp4','doc','docx');
        if(in_array(end($ex), $allowEx))
        {
            $this->_dl_file($fil,$this->type,$fileName);
        }
        else
        {
            die("<b>404 File not found!-</b>");
        }
    }
    public function cropAction()
    {
        
    }
    protected function _dl_file($file,$type,$orgn)
    {
        if (!is_file($file)) { die("<b>404 File not found!^</b>"); }
        $len = filesize($file);
        $filename = basename($file);
        $file_extension = $type;
        switch( $file_extension ) {
          case "pdf": $ctype="application/pdf"; break;
          case "exe": $ctype="application/octet-stream"; break;
          case "zip": $ctype="application/zip"; break;
          case "txt": $ctype="application/msword"; break;
          case "rar": $ctype="application/rar"; break;
          case "doc": $ctype="application/msword"; break;
          case "docx": $ctype="application/msword"; break;
          case "xls": $ctype="application/vnd.ms-excel"; break;
          case "ppt": $ctype="application/vnd.ms-powerpoint"; break;
          case "mp3": $ctype="audio/mpeg"; break;
          case "wav": $ctype="audio/x-wav"; break;
          case "mpe": $ctype="video/mpeg"; break;
          case "mov": $ctype="video/quicktime"; break;
          case "avi": $ctype="video/x-msvideo"; break;
          default: $ctype="application/force-download";

        }
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Type: $ctype");
        $header="Content-Disposition: attachment; filename=".$orgn.";";
        header($header );
        header("Content-Transfer-Encoding: binary");
        header("Content-Length: ".$len);
        @readfile($file);
       return null;

    }

}



