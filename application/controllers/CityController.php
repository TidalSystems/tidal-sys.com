<?php

class CityController extends CL_Curd_BaseContoller {

public function init() {

}

public function vAction()

{

//DataReplace

$id = intval($this->_request->getParam('i' , 0));

$permcity = $this->_request->getParam('permcity' , '');

$idl = intval($this->_request->getParam('v'));

$model = new Model_PlusData();

$model->_name  = 'cities';

$where = array();

if($id)

$where['id'] = $id;

if($permcity)

$where['pagurl'] =  $permcity ;

$data = $model->selectForArray($where);

$this->view->Page = $data;

$id = $data[0]->id; 
$this->view->name = 'city';

 

//$model->UpdateNumView( $id );

$model = new Model_PlusData();

$model->_name = 'Meals';

$adapter = $model->selectForPager(array('cityid' => ($id)) );

$paginator = new Zend_Paginator($adapter);

$paginator->setItemCountPerPage(20);

$page = $this->_request->getParam('page', 1);

$paginator->setCurrentPageNumber($page);

$this->view->paginator = $paginator;

}

}



