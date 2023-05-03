<?php class CategoryController extends CL_Curd_BaseContoller {

public function init() {

}

public function vAction()

{

//DataReplace

$id = intval($this->_request->getParam('i' , 0));

$permcat = $this->_request->getParam('permcat' , '');

$idl = intval($this->_request->getParam('v'));

$model = new Model_PlusData();

$model->_name  = 'productscategories';

$where = array();

if($id)

$where['id'] = $id;

if($permcat)

$where['pagurl'] =  $permcat ;

$data = $model->selectForArray($where);

$this->view->Page = $data;
$this->view->name = 'productscategories';

$id = $data[0]->id; 

 

//$model->UpdateNumView( $id );

 

}

}





