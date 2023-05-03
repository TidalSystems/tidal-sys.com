<?php 



class UploadController extends Zend_Controller_Action 

{

    public function init() {

        $this->_helper->layout->disableLayout();

        $this->_helper->viewRenderer->setNoRender();
  }



 public function photo7Action()
    {
$Randam =time(); 

$croped_image = $_POST['image'];
$alt = $_POST['alt'];
list($type, $croped_image) = explode(';', $croped_image);
list(, $croped_image)      = explode(',', $croped_image);
$croped_image = base64_decode($croped_image);
$image_name2 = $Randam.'-'.$alt.'.jpg';
// upload cropped image to server 
file_put_contents(APPLICATION_PATH . '/../MyUpload/'.$image_name2, $croped_image);


 
//$file = APPLICATION_PATH . '/../MyUpload/'.$image_name2;
//$image = imagecreatefromstring(file_get_contents($file));
//ob_start();
//imagejpeg($image,NULL,100);
//$cont = ob_get_contents();
//ob_end_clean();
//imagedestroy($image);
//$content = imagecreatefromstring($cont);
//$output = APPLICATION_PATH . '/../MyUpload/'.$Randam.'-'.$alt.'.webp';
//imagewebp($content,$output);
//imagedestroy($content);

$image_name = $image_name2;
 

echo $image_name;

}

    public function photoAction()

    {

        $auth = Zend_Auth::getInstance();

        if($auth->hasIdentity())

        {

            $identity = $auth->getIdentity();

            $id = strtolower($identity->id);

        }

        else

        {

            $this->_forward('login');

        }

        $allowedEx = 'jpg,jpeg,png,gif';

        

        if(isset($_FILES['img']))

        {

            $upload = new Zend_File_Transfer();

            $upload->setDestination(APPLICATION_PATH . '/../MyUpload/');

            $upload->addValidator('Count', false, 2);

            $upload->addValidator('Size', false, 1048576);

                $filename = strtolower($_FILES['img']['name']);

                $exts = @split("[/\\.]", $filename);

                $rand = rand(0,9999);

                $time = time();

                $rep = $rand.$time;

                $imagemedia = $rep.'.'.end($exts);

            $upload->addFilter("Rename",array("target" => APPLICATION_PATH . '/../MyUpload/'.$imagemedia,"overwrite" => true));

            $upload->addValidator('Extension', false, $allowedEx);







            if ($upload->isValid()) {





                $upload->receive();

                $files = $upload->getFileInfo();

                $destination =  $files['img']['destination'];

                $file_name = $files['img']['name'];





               print $imagemedia; 

            }

            else

            {

               print '[{"error":"acceptFileTypes"}]'; 

            }

        }

        else

        {

            print '[{"error":"acceptFileTypes"}]'; 

        }

        

       

    }

    

    

    

    

}



