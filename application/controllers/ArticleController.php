<?php



class ArticleController extends CL_Curd_BaseContoller {

    public function init() {





    }



    public function vAction()



    {



        //DataReplace







        $id = intval($this->_request->getParam('i' , 0));



         $permalinarticeevent = $this->_request->getParam('permalinarticeevent' , '');

 





        $idl = intval($this->_request->getParam('v'));



 

 

        $model = new Model_PlusData();

        $model->_name  = 'Blogs';

        $where = array();

    



        if($id)



            $where['id'] = $id;



        

       if($permalinarticeevent)

 

             $where['pagurl'] =  $permalinarticeevent ;









        $data = $model->selectForArray($where);







        $this->view->Page = $data;

  

                $id = $data[0]->id; 





 $this->view->ceotitle = $data[0]->seotitle;

 $this->view->ceokeywords = $data[0]->seokeywords;

 $this->view->ceodescription = $data[0]->seodescription;

 




       $from = new Form_Contactrequests();
        
 
 $modelcscs = new Model_Defaulseo();

           $emailCon = $modelcscs->optionselect('siteConf2' ,  'en');

           $to = $emailCon['email'];

      if (isset($_POST['save7']) &&  $from->isValid($_POST)   ) {

            $data = $from->getValues();

   $SendMail = new Func_SendMail();



           $message = $this->view->partial(

                       'templates/contactUs.html',

                        $data  );

$result = $SendMail->SendMail($to ,"Request For WebSite", $message , "Request For WebSite" );

        $this->view->messageVi = "Thanks for Request ";
 
}
 $this->view->from = $from;

 
 



       //$model->UpdateNumView( $id );



        $modelBlock = new Model_PlusData();







        $modelBlock->_name  = 'pages_blocks';







        $whereBlock = array('pageid'=>$id);







        $limito = $idl;







        $this->view->limiV = $idl;







        $order = array('displayorder'=>'ASC');







        $dataBlock = $modelBlock->selectForArray($whereBlock , $order, $limito);







        $this->view->Blocks = $dataBlock;







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











