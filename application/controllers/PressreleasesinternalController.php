 <?php

class PressreleasesinternalController extends CL_Curd_BaseContoller {
    public function init() {

    }

    public function vAction()

    {
        //DataReplace



        $id = intval($this->_request->getParam('i' , 0));
        $permalinarticel2press = $this->_request->getParam('permalinarticel2press' , '');

        $idl = intval($this->_request->getParam('v'));


        $model = new Model_PlusData();
        $model->_name  = 'press';

        $where = array();
   
        if($id)

            $where['id'] = $id;
 

       if($permalinarticel2press)
 
             $where['pagurl'] =  $permalinarticel2press ;
        $data = $model->selectForArray($where);

        $this->view->Page = $data;




                $id = $data[0]->id; 

		    $this->view->ceotitle = $data[0]->seotitle;
 $this->view->ceokeywords = $data[0]->seokeywords;
 $this->view->ceodescription = $data[0]->seodescription;
 
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





