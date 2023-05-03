<?php

class VideoController extends Zend_Controller_Action {
	
	public function indexAction()
	{
		$this->_forward('v');
	}
	
    public function vAction()
    {
    
             	$where = array();

        $catvideoid = intval($this->_request->getParam('i'));

        if($catvideoid)

        	$where['catvideoid']= $catvideoid;

                

        $model = new Model_PlusData();

        $model->_name = 'catvideo';

        $this->view->CatvideoData = $catvideoid?$model->find($catvideoid)->current():NULL;
        
                
        $model = new Model_PlusData();
        
        $model->_name = 'video';
        $adapter = $model->selectForPager($where);
        $paginator = new Zend_Paginator($adapter);
        $paginator->setItemCountPerPage(12);
        $page = $this->_request->getParam('page', 1);
        $paginator->setCurrentPageNumber($page);
        $this->view->paginator = $paginator;
    }
   
}

