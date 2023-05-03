<?php



 class DepositController extends Zend_Controller_Action {



    public function init() {

        

    }

    public function vAction()

    {

        

             $id = intval($this->_request->getParam('i' , 0));

        $permalink778877 = $this->_request->getParam('permalink778877' , '');

        $model = new Model_PlusData();

        $model->_name = 'deposit';



	$where = array();

if($id)



        	$where['id']= $id;

 

             if($permalink778877)

            $where['pagurl'] = $permalink778877;

    $data= $model->selectForArray($where);



      $this->view->Item = $data;



	 

		

		$model = new Model_PlusData();

		$model->_name = 'cat';

    

    }

}



