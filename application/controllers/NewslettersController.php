<?php

class NewslettersController extends CL_Curd_BaseContoller {
    public function init() {

    }

    


	public function indexAction()



	{
       


		$this->_forward('v');

     
	}

    public function vAction()

    {

        $model = new Model_PlusData();
        $model->_name = 'news_letters';
        $adapter2 = $model->selectForPager(array( ), ('Date_ DESC'));
        $paginator2 = new Zend_Paginator($adapter2);
        $paginator2->setItemCountPerPage(10);
        $page = $this->_request->getParam('page', 1);
        $paginator2->setCurrentPageNumber($page);
        $this->view->paginator2 = $paginator2;

      



    }


}


