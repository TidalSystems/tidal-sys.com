<?php



 class TransportationController extends Zend_Controller_Action {



    public function init() {

        

    }

    public function vAction()

    {

        

             $id = intval($this->_request->getParam('i' , 0));

        $permalinkww11tt = $this->_request->getParam('permalinkww11tt' , '');

        $model = new Model_PlusData();

        $model->_name = 'city';



	$where = array();

    if($id)



        	$where['id']= $id;

 

             if($permalinkww11tt)

            $where['pagurl'] = $permalinkww11tt;

    $data= $model->selectForArray($where);



      $this->view->Item = $data;



	 

		

		$model = new Model_PlusData();

		$model->_name = 'cat';

    

    }

}



