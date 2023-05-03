<?php

class VillaController extends CL_Curd_BaseContoller {


    public function init() {


    }

    public function vAction()

    {



        //DataReplace



        $id = intval($this->_request->getParam('i' , 0));

        $permalinkpackage1v = $this->_request->getParam('permalinkpackage1v' , '');
        $permalinkpackage2v = $this->_request->getParam('permalinkpackage2v' , '');
        


        $idl = intval($this->_request->getParam('v'));



        $model2 = new Model_PlusData();
        $model2->_name  = 'country';
 
        $model = new Model_PlusData();
        $model->_name  = 'villas';
        $where = array();
   $x= ' ';

        if($id)

            $where['id'] = $id;

        if($permalinkpackage1v)

            $x  = $permalinkpackage1v;

 
       if($permalinkpackage2v)
 
             $where['pagurl'] =  $permalinkpackage2v ;




        $data = $model->selectForArray($where);



        $this->view->Page = $data;


		    $this->view->ceotitle = $data[0]->seotitle;
 $this->view->ceokeywords = $data[0]->seokeywords;
 $this->view->ceodescription = $data[0]->seodescription;


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



        $this->view->id = $id;



        



        $this->view->placeholder('title')->set('');



       



    

        $form = new Form_Tailor();



        if($this->_request->isPost() && $form->isValid($_POST)) {    



           



           $SendMail = new Func_SendMail();



           $model = new Model_Option();



           $SiteCon = $model->optionselect('siteConf' , 'en');



           $emailCon = $model->optionselect('mailConf');



           



           $to = $emailCon['email'];



           $title = 'Tailor made tours Reservation';



           $dataForm = $form->getValues();



           $message = $this->view->partial(



                        'templates/contactstailer.html',



                        $dataForm



                        );



           $result = $SendMail->SendMail($to, $title, $message);



            if($result) 



            {



               $this->view->messageVi = 'We have received your Tour, Thank you for choosing Your Tour ';
$form->reset();


            }



        }



        else if($this->_request->isPost() && !$form->isValid($_POST))   



        {



          



            $this->view->messageVi = 'Error All Fildes is Required';



        }



       



        $this->view->form = $form;



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





