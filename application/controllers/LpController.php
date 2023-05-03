<?php

class LpController extends CL_Curd_BaseContoller {
    public function init() {

    }

    public function vAction()

    {
        //DataReplace



        $id = intval($this->_request->getParam('i' , 0));
        $permalinarticelang = $this->_request->getParam('permalinarticelang' , '');

        $idl = intval($this->_request->getParam('v'));


        $model = new Model_PlusData();
        $model->_name  = 'LandingPage';

        $where = array();
   
        if($id)

            $where['id'] = $id;
 

       if($permalinarticelang)
 
             $where['pagurl'] =  $permalinarticelang ;
        $data = $model->selectForArray($where);

        $this->view->Page = $data;




                $id = $data[0]->id; 

		    $this->view->ceotitle = $data[0]->seotitle;
 $this->view->ceokeywords = $data[0]->seokeywords;
 $this->view->ceodescription = $data[0]->seodescription;

       //$model->UpdateNumView( $id );

 }

}





