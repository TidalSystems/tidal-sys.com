<?php

class MagazineController extends CL_Curd_BaseContoller {
    public function init() {


    }

    public function vAction()

    {

        //DataReplace



        $id = intval($this->_request->getParam('i' , 0));

         $permalinmagazine = $this->_request->getParam('permalinmagazine' , '');
 


        $idl = intval($this->_request->getParam('v'));

 
 
        $model = new Model_PlusData();
        $model->_name  = 'Magazine';
        $where = array();
    

        if($id)

            $where['id'] = $id;

        
       if($permalinmagazine)
 
             $where['pagurl'] =  $permalinmagazine ;
        $data = $model->selectForArray($where);

        $this->view->Page = $data;
   
 
    }


}





