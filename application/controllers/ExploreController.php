<?php







 class ExploreController extends Zend_Controller_Action {







    public function init() {



        



    }



    public function vAction()



    {



        



             $id = intval($this->_request->getParam('i' , 0));



        $permalink27778877 = $this->_request->getParam('permalink27778877' , '');



        $model = new Model_PlusData();



        $model->_name = 'packagetype';







	$where = array();



if($id)







        	$where['id']= $id;



 



             if($permalink27778877)



            $where['pagurl'] = $permalink27778877;



    $data= $model->selectForArray($where);







      $this->view->Item = $data;







	 



		



		$model = new Model_PlusData();



		$model->_name = 'cat';



    



    }



}







