<?php


 class BasketController extends Zend_Controller_Action {

    public function init() {
        
    }
    public function vAction()
    {
        $id = intval($this->_request->getParam('i'));
        $model = new Model_PlusData();
        $model->_name = 'items';
		$this->view->item = $model->find($id)->current();
		if(!$this->view->item)
			exit;
		
		$model = new Model_PlusData();
		$model->_name = 'cat';
        $this->view->CatData = $model->find($this->view->item->catid)->current();
    }
}

