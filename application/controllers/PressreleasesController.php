<?php

class PressreleasesController extends CL_Curd_BaseContoller {
    public function init() {

    }
	public function indexAction()

	{
       
   	$this->_forward('v');

     
	}

    public function vAction()

    {

        $model = new Model_PlusData();
        $model->_name = 'press';
        $adapter2p = $model->selectForPager(array('Det = ?' =>   ' '), ('MDate DESC'));
        $paginator2p = new Zend_Paginator($adapter2p);
        $paginator2p->setItemCountPerPage(10);
        $page = $this->_request->getParam('page', 1);
        $paginator2p->setCurrentPageNumber($page);
        $this->view->paginator2p = $paginator2p;

      



    }


}


