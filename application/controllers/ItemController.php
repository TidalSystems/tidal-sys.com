<?php


 class ItemController extends Zend_Controller_Action {

    public function init() {

    }



    public function vAction()



    {

    



             $id = intval($this->_request->getParam('i' , 0));



        $permalink2 = $this->_request->getParam('permalink2' , '');



        $model = new Model_PlusData();



        $model->_name = 'items';







	$where = array();



if($id)







        	$where['id']= $id;



 



             if($permalink2)



            $where['pagurl'] = $permalink2;



    $data= $model->selectForArray($where);







      $this->view->Item = $data;


		    $this->view->ceotitle = $data[0]->pagetitle;
 $this->view->ceokeywords = $data[0]->pagekeywords;
 $this->view->ceodescription = $data[0]->pagedescription;




	 



		



		$model = new Model_PlusData();



		$model->_name = 'cat';



    



    }



}







