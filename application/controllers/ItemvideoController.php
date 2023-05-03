<?php

 class ItemvideoController extends Zend_Controller_Action {

    public function init() {
        
    }
    public function vAction()
    {
        $id = intval($this->_request->getParam('i'));
        $model = new Model_PlusData();
        $model->_name = 'video';
		$this->view->itemvideo = $model->find($id)->current();
		if(!$this->view->itemvideo)
			exit;
		
		$model = new Model_PlusData();
		$model->_name = 'cat';
        $this->view->CatData = $model->find($this->view->item->catid)->current();
    }
}

