<?php
       


       
/*********************************************************************
     Purpose            : update image.
     Parameters         : null
     Returns            : integer
     ***********************************************************************/
	 $post = isset($_POST) ? $_POST: array();
	 //print_R($post);die;
	 switch($post['action']) {
	  case 'save' :
		saveAvatarTmp();
	  break;
	  default:
		changeAvatar();
		
	 }
	
	 function changeAvatar() {
        $post = isset($_POST) ? $_POST: array();
        $max_width = "1000"; 
        $userId = isset($post['hdn-profile-id']) ? intval($post['hdn-profile-id']) : 0;
        $path = '../../../../../../MyUpload';

        $valid_formats = array("jpg", "png", "gif", "bmp","jpeg");
        $name = $_FILES['photoimg']['name'];
        $size = $_FILES['photoimg']['size'];
        if(strlen($name))
        {
        list($txt, $ext) = explode(".", $name);
        if(in_array($ext,$valid_formats))
        {
        if($size<(2024*2024)) // Image size max 1 MB
        {
        $actual_image_name2 = mt_rand().'mainlyvacationdeals' .'_'.$name .'.'.$ext;
         $actual_image_name = str_replace(' ', '_', $actual_image_name2);


        $filePath = $path .'/'.$actual_image_name;
        $filePath2 = 'http://mainlyvacationdeals.com/MyUpload'.'/'.$actual_image_name;
        $tmp = $_FILES['photoimg']['tmp_name'];
        
        if(move_uploaded_file($tmp, $filePath))
        {
        $width = getWidth($filePath);
            $height = getHeight($filePath);
            //Scale the image if it is greater than the width set above
            if ($width > $max_width){
                $scale = $max_width/$width;
                $uploaded = resizeImage($filePath,$width,$height,$scale);
            }else{
                $scale = 1;
                $uploaded = resizeImage($filePath,$width,$height,$scale);
            }
        /*$res = saveAvatar(array(
                        'userId' => isset($userId) ? intval($userId) : 0,
                                                'avatar' => isset($actual_image_name) ? $actual_image_name : '',
                        ));*/
                        
        //mysql_query("UPDATE users SET profile_image='$actual_image_name' WHERE uid='$session_id'");
         $servername = "localhost";
$username = "wign3ak9ax4tues";
$password = "w^,?Z.h2@Glq";
$dbname = "mainly";
        $tid = $_GET['id'];   
  
        $ttabel = $_GET['tabel'];  
        $tfield = $_GET['field'];
 
$conn = new mysqli($servername, $username, $password, $dbname);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

         

 
$sql = "UPDATE $ttabel SET $tfield= '$actual_image_name'   WHERE id= $tid";



 if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "  " . $conn->error;
}


$conn->close(); 
        echo "<img id='photo' file-name='".$actual_image_name."' class='' src='".$filePath2.'?'.time()."' class='preview'/>";
        }
        else
        echo "failed";
        }
        else
        echo "Image file size max 1 MB"; 
        }
        else
        echo "Invalid file format.."; 
        }
        else
        echo "Please select image..!";
        exit;
        
        
    }
    /*********************************************************************
     Purpose            : update image.
     Parameters         : null
     Returns            : integer
     ***********************************************************************/
     function saveAvatarTmp() {
        $post = isset($_POST) ? $_POST: array();
        $userId = isset($post['id']) ? intval($post['id']) : 0;
        $path ='\\images\uploads\tmp';
		 $t_width22 = $_GET['ww22']; // Maximum thumbnail width
        $t_height22 = $_GET['hh22'];    // Maximum thumbnail height
       

        $t_width =  $t_width22; // Maximum thumbnail width
        $t_height = $t_height22;    // Maximum thumbnail height
		
    if(isset($_POST['t']) and $_POST['t'] == "ajax")
    {
        extract($_POST);
        
        //$img = get_user_meta($userId, 'user_avatar', true);
        $imagePath = '../../../../../../MyUpload/'.$_POST['image_name'];
        $ratio = ($t_width/$w1); 
        $nw = $t_width;
        $nh =  $t_height;
        $nimg = imagecreatetruecolor($nw,$nh);
        $im_src = imagecreatefromjpeg($imagePath);
        imagecopyresampled($nimg,$im_src,0,0,$x1,$y1,$nw,$nh,$w1,$h1);
        imagejpeg($nimg,$imagePath,90);
        
    }
    echo $imagePath.'?'.time();;
    exit(0);    
    }
    
    /*********************************************************************
     Purpose            : resize image.
     Parameters         : null
     Returns            : image
     ***********************************************************************/
    function resizeImage($image,$width,$height,$scale) {
    $newImageWidth = ceil($width * $scale);
    $newImageHeight = ceil($height * $scale);
    $newImage = imagecreatetruecolor($newImageWidth,$newImageHeight);
    $source = imagecreatefromjpeg($image);
    imagecopyresampled($newImage,$source,0,0,0,0,$newImageWidth,$newImageHeight,$width,$height);
    imagejpeg($newImage,$image,90);
    chmod($image, 0777);
    return $image;
}
/*********************************************************************
     Purpose            : get image height.
     Parameters         : null
     Returns            : height
     ***********************************************************************/
function getHeight($image) {
    $sizes = getimagesize($image);
    $height = $sizes[1];
    return $height;
}
/*********************************************************************
     Purpose            : get image width.
     Parameters         : null
     Returns            : width
     ***********************************************************************/
function getWidth($image) {
    $sizes = getimagesize($image);
    $width = $sizes[0];
    return $width;
}
?>
