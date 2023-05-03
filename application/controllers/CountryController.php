<?php



 class CountryController extends Zend_Controller_Action {



    public function init() {

        

    }

    public function vAction()

    {

        

             $id = intval($this->_request->getParam('i' , 0));

        $permalink2777 = $this->_request->getParam('permalink2777' , '');

        $model = new Model_PlusData();

        $model->_name = 'country';



	$where = array();

if($id)



        	$where['id']= $id;

 

             if($permalink2777)

            $where['pagurl'] = $permalink2777;

    $data= $model->selectForArray($where);



      $this->view->Item = $data;



	 

		

		$model = new Model_PlusData();

		$model->_name = 'cat';

    

    }

}



