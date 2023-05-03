<?php
class Admin_MissingarticelController extends Zend_Controller_Action {
    public function init() {
    }

    public function indexAction() {
        
    }


public function regions22Action()

    {

$allcountry = array();
 $model = new Model_PlusData();
 $model->_name  = 'articles';						                                       
 $toppages2 = $model->selectForArray(array(), array('displayorder' => 'ASC')  );
								foreach($toppages2 as $toppage23){
 $allcountry []= $toppage23->countryid ;
}


        $model = new Model_PlusData();
        $model->_name = 'country';
        $select = $model->select();
        $select->setIntegrityCheck(false);
        $select->from($model->_name);
        $where = array ();
        if($this->_getParam('country') OR isset($_REQUEST['country'] ))
            $where['regionid'] = (int)$this->_getParam('country') ;   
        $list = array();
        foreach ($model->selectForArray($where) as $values)
       {
if (in_array($values['id'] , $allcountry)){
            array_push($list, array('id'=>$values['id'],'region2'=>$values['country_name']));
}
        }
        echo json_encode($list);
        exit;
    }


}

