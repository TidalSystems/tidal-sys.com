<?php
class Zend_View_Helper_DataReplace extends Zend_View_Helper_Abstract{
	public function DataReplace($value = null)
        {
            $replace =  $this->view->baseUrl().'/MyUpload/' ;
  $value2 = strip_tags($value) ;
	                            $alltags = array(); $url = NULL; $alt1 = NULL ; $title1= NULL; $model = new Model_PlusData();
						        $model->_name  = 'tags';						                                       
						        $toppagescountry = $model->selectForArray(array(  ), array()  ); 
foreach ( $toppagescountry as  $toppageccx ){
$name = $toppageccx->Name.' ';
if (strpos($value, $name)!== false) {

if (trim($toppageccx->alt)){ $alt1= $toppageccx->alt;} else{ $alt1= $name; };
if (trim($toppageccx->title)){ $title1= $toppageccx->title;} else{ $title1= $name; };
if (trim($toppageccx->url) && $toppageccx->style == 'url'){ $url = 'href="'.$toppageccx->url.'"' ;}; ?>

 <?php $model = new Model_PlusData();  $model->_name  = 'country';  $countryididid = $model->selectForArray(array('id' => $toppageccx->countryid ));foreach($countryididid as $toppagecountryididid2c): ?> <?php $countryname000 = $toppagecountryididid2c->pagurl; ?> 
 <?php $countryxx = trim($toppagecountryididid2c->pagurl)?APP_BASEURL.'/Destinations/'.'region'.'/'.trim($toppagecountryididid2c->pagurl):APP_BASEURL.'destinations/v/i/'.$toppagecountryididid2c->id;   ?> 
<?php endforeach; ?>
 <?php $model = new Model_PlusData();  $model->_name  = 'destinaions';  
$destinaionsidxx = $model->selectForArray(array('id' => $toppageccx->packagesid ));foreach($destinaionsidxx as $destinaionsid001): ?> 
 
 <?php $packagexx = trim($destinaionsid001->pagurl)?APP_BASEURL.'/Destinations/'.'region'.'/'.$countryname000.'/'.trim($destinaionsid001->pagurl):APP_BASEURL.'package/v/i/'.$destinaionsid001->id;   ?> 


 <?php endforeach; ?>



<?php
if ($toppageccx->style == 'Destination'){  $url = 'href="'.$countryxx.'"' ;};
if ($toppageccx->style == 'Package'){  $url = 'href="'.$packagexx.'"' ;};

  $value = str_replace($name , '<a alt="'.$alt1.'" title="'.$alt1.'"'.$url.'><b>'.$name.'</b></a>', $value);
}
}                   
 
 
            $value = str_replace('../../../../MyUpload/', $replace, $value);
 
 


            echo $value;	



	}



}