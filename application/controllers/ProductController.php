<?php

class ProductController extends CL_Curd_BaseContoller {
    public function init() {


    }

    public function vAction()

    {

        //DataReplace



        $id = intval($this->_request->getParam('i' , 0));

         $permalinproduct = $this->_request->getParam('permalinproduct' , '');
 


        $idl = intval($this->_request->getParam('v'));

 
 
        $model = new Model_PlusData();
        $model->_name  = 'products';
        $where = array();
    

        if($id)

            $where['id'] = $id;

        
       if($permalinproduct)
 
             $where['pagurl'] =  $permalinproduct ;

        $data = $model->selectForArray($where);



        $this->view->Page = $data;
  
                $id = $data[0]->id; 

       //$model->UpdateNumView( $id );

        $modelBlock = new Model_PlusData();



        $modelBlock->_name  = 'pages_blocks';



        $whereBlock = array('pageid'=>$id);



        $limito = $idl;



        $this->view->limiV = $idl;



        $order = array('displayorder'=>'ASC');



        $dataBlock = $modelBlock->selectForArray($whereBlock , $order, $limito);



        $this->view->Blocks = $dataBlock;

    $this->view->Page = $data;

        $this->view->id = $id;



        



        $this->view->placeholder('title')->set('');



       


 



    }



 



 





    public function nAction()



    {



        //DataReplace



        $id = intval($this->_request->getParam('i' , 1));



      



        $model = new Model_PlusData();



		$model->_name  = 'data_stor';



		$where = array('type' => 'news1','id'=>$id);



        $data = $model->selectForArray($where);



        $this->view->Page = $data[0];



		



        $this->view->placeholder('title')->set('');



    }



    public function allAction()



    {



        $where = array('type' => 'news');



                



        $model = new Model_PlusData();



        $model->_name = 'data_stor';



        $adapter = $model->selectForPager($where);



        $paginator = new Zend_Paginator($adapter);



        $paginator->setItemCountPerPage(12);



        $page = $this->_request->getParam('page', 1);



        $paginator->setCurrentPageNumber($page);



        $this->view->paginator = $paginator;



		



        $this->view->placeholder('title')->set('');



    }











 public function faqAction()



    {



 



                



        $model = new Model_PlusData();



        $model->_name = 'faq';



        $adapter = $model->selectForPager($where);



        $paginator = new Zend_Paginator($adapter);



        $paginator->setItemCountPerPage(12);



        $page = $this->_request->getParam('page', 1);



        $paginator->setCurrentPageNumber($page);



        $this->view->paginator = $paginator;



		



        $this->view->placeholder('title')->set('');



    }









}





