<?php



class PageController extends CL_Curd_BaseContoller {



    public function init() {



    }



    public function vAction()



   {



       //DataReplace







        $id = intval($this->_request->getParam('i' , 0));



        $permalink88 = $this->_request->getParam('permalink88' , '');



        $idl = intval($this->_request->getParam('v'));



        $model = new Model_PlusData();



        $model->_name  = 'Pages';



        $where = array();



        if($id)



            $where['id'] = $id;



        if($permalink88)



            $where['pagurl'] = $permalink88;







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

 
 





 









 if ($id == '900'){







        $brouchureform = new Form_Requestsbrouchure();



        $model2200b = new Model_Requestbrouchure();



 



      if (isset($_POST['save9']) &&  $brouchureform->isValid($_POST)   ) {



            $data = $brouchureform->getValues();



            $res20b = $model2200b->InsertRow(array_filter($data));



$SendMail = new Func_SendMail();



  



           $message = $this->view->partial(



                       'templates/brouchurerequest.html',



                        $data  );



 $images = explode('||',trim($ccemails,'|'));



            foreach($images as $index=>$photo){



if(trim($ccemails)){



$result = $SendMail->SendMail($photo , $subjectemail, $message , $subjectemail );



}



}







         $this->view->messageVi = $confiramtion;



}



     $this->view->brouchureform = $brouchureform;



}























 if ($id == '44'){







        $carrerrequest = new Form_Requestcareer();



        $model2200c = new Model_Requestcareer();



 



      if (isset($_POST['submitjob']) &&  $carrerrequest->isValid($_POST)   ) {



            $data = $carrerrequest->getValues();



            $res20c = $model2200c->InsertRow(array_filter($data));







         $this->view->messageVi = $confiramtion;



}



     $this->view->carrerrequest = $carrerrequest;



}







 















 if ($id == '9'){







        $newsletterform = new Form_Requestnewsletter();



        $model220n = new Model_Requestnewsletter();







           $modelcscs = new Model_Option();



           $emailCon = $modelcscs->optionselect('mailConf');



           $to = $emailCon['email'];



           $title = 'Fairouz Travel - Newsletter ';







 



      if (isset($_POST['save10']) &&  $newsletterform->isValid($_POST)   ) {



            $data = $newsletterform->getValues();



            $res20n = $model220n->InsertRow(array_filter($data));



        $SendMail = new Func_SendMail();



  



           $message = $this->view->partial(



                       'templates/newsrequest.html',



                        $data  );



 







         $this->view->messageVi = "Thanks";



       $result = $SendMail->SendMail($to, $title, $message);



}



     $this->view->newsletterform = $newsletterform;



}



 











        $model->_name = 'Testimonials';



        $adapter2 = $model->selectForPager(array( ), ('datepicker DESC'));



        $paginator2 = new Zend_Paginator($adapter2);



        $paginator2->setItemCountPerPage(5);



        $page = $this->_request->getParam('page', 1);



        $paginator2->setCurrentPageNumber($page);



        $this->view->paginator2 = $paginator2;



 





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











