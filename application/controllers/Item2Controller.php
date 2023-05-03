<?php



 class Item2Controller extends Zend_Controller_Action {



    public function init() {

        

    }

    public function vAction()

    {

        

             $id = intval($this->_request->getParam('i' , 0));

        $permalink277 = $this->_request->getParam('permalink277' , '');

        $model = new Model_PlusData();

        $model->_name = 'items2';



	$where = array();

if($id)



        	$where['id']= $id;

 

             if($permalink277)

            $where['pagurl'] = $permalink277;

    $data= $model->selectForArray($where);



      $this->view->Item = $data;



	 

		

		$model = new Model_PlusData();

		$model->_name = 'cat';

    

    }

}



