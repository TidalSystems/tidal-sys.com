<?php

// Define path to application directory
function watermark($SourceFile, $WatermarkFile, $SaveToFile = NULL)
{
    $watermark = @imagecreatefrompng($WatermarkFile)
    or exit('Cannot open the watermark file.');
    imageAlphaBlending($watermark, false);
    imageSaveAlpha($watermark, true);
    $image_string = @file_get_contents($SourceFile)
    or exit('Cannot open image file.');
    $image = @imagecreatefromstring($image_string)
    or exit('Not a valid image format.');
    $imageWidth=imageSX($image);
    $imageHeight=imageSY($image);
    $watermarkWidth=imageSX($watermark);
    $watermarkHeight=imageSY($watermark);

    $coordinate_X = ( $imageWidth - 15) - ( $watermarkWidth);
    $coordinate_Y = ( $imageHeight - 15) - ( $watermarkHeight);

    imagecopy($image, $watermark, $coordinate_X, $coordinate_Y,
        0, 0, $watermarkWidth, $watermarkHeight);
    if(!($SaveToFile)) header('Content-Type: image/jpeg');
    imagejpeg ($image, $SaveToFile, 100);
    imagedestroy($image);
    imagedestroy($watermark);
    if(!($SaveToFile)) exit;
}
define('PUBLIC_PATH', realpath(dirname(__FILE__) . '/'));

defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/application'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/../library'),
    get_include_path(),
)));

/** Zend_Application */
require_once 'Zend/Application.php';

// Create application, bootstrap, and run
$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/configs/application.ini'
);
$application->bootstrap()
            ->run();
            
          