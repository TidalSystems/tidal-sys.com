<?php  

class Admin_UploadController extends Zend_Controller_Action 



{



    public function init() {



        $this->_helper->layout->disableLayout();



        $this->_helper->viewRenderer->setNoRender();



        



    }



    public function photoAction()



    {



        $allowedEx = 'jpg,jpeg,png,gif,pdf';



        



        if(isset($_FILES['img']))



        {



            $upload = new Zend_File_Transfer();



            $upload->setDestination(APPLICATION_PATH . '/../MyUpload/');



            $upload->addValidator('Count', false, 2);



            $upload->addValidator('Size', false, 11048576);



                $filename = strtolower($_FILES['img']['name']);



                $exts =  $filename;



                $rand = rand(0,9999);



              



                $rep = $rand;



                $imagemedia = $rep.'.'.($exts);



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



	



	



	



	



	



	



	 public function photo2Action()



    {



        $allowedEx = 'pdf';



        



        if(isset($_FILES['img2']))



        {



            $upload = new Zend_File_Transfer();



            $upload->setDestination(APPLICATION_PATH . '/../MyUpload/');



            $upload->addValidator('Count', false, 2);



            $upload->addValidator('Size', false, 111048576);



                $filename = strtolower($_FILES['img2']['name']);



                 



                $rand = rand(0,9999);



                $time = time();



                $rep = $rand.$time;



                 $imagemedia = $rep.'.'.'pdf';



            $upload->addFilter("Rename",array("target" => APPLICATION_PATH . '/../MyUpload/'.$imagemedia,"overwrite" => true));



            $upload->addValidator('Extension', false, $allowedEx);















            if ($upload->isValid()) {











                $upload->receive();



                $files = $upload->getFileInfo();



                $destination =  $files['img2']['destination'];



                $file_name = $files['img2']['name'];











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



	



	



	



	



   public function photo3Action()

    {

        $allowedEx = 'jpg,jpeg,png,gif,pdf,GIF';

        if(isset($_FILES['img3']))

        {
            $upload = new Zend_File_Transfer();
            $upload->setDestination(APPLICATION_PATH . '/../MyUpload/');
            $upload->addValidator('Count', false, 2);
            $upload->addValidator('Size', false, 10101010);

                $filename = strtolower($_FILES['img3']['name']);
$extension = pathinfo(strtolower($_FILES['img3']['name']), PATHINFO_EXTENSION);
               
 $exts =  $filename;

                $rand = rand(0,9999);

              

                $rep = $rand;

$imagemedia = $rand.'_'.$extension;
$upload->addFilter("Rename",array("target" => APPLICATION_PATH . '/../MyUpload/'.$imagemedia,"overwrite" => true));
$upload->addValidator('Extension', false, $allowedEx);
            if ($upload->isValid()) {

            $upload->receive();

            $files = $upload->getFileInfo();

           

                $destination =  $files['img3']['destination'];

                $file_name = $files['img3']['name'];

                print $imagemedia; 

             }

            else

             {

               print 'xxx'.'[{"error":"acceptFileTypes"}]'; 

             }

        } else {

            print 'ww'.'[{"error":"acceptFileTypes"}]'; 

        }

    }





















  public function photo77Action()



    {



        $allowedEx = 'jpg,jpeg,png,gif,mp4';



        



        if(isset($_FILES['img7']))



        {



            $upload = new Zend_File_Transfer();



            $upload->setDestination(APPLICATION_PATH . '/../MyUpload/');



            $upload->addValidator('Count', false, 2);



            $upload->addValidator('Size', false, 11048576);



                $filename = strtolower($_FILES['img7']['name']);



                $exts =  $filename;



                $rand = rand(0,9999);



              



                $rep = $rand;



                $imagemedia = $rep.'.'.($exts);



            $upload->addFilter("Rename",array("target" => APPLICATION_PATH . '/../MyUpload/'.$imagemedia,"overwrite" => true));



            $upload->addValidator('Extension', false, $allowedEx);















            if ($upload->isValid()) {











                $upload->receive();



                $files = $upload->getFileInfo();



                $destination =  $files['img7']['destination'];



                $file_name = $files['img7']['name'];











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