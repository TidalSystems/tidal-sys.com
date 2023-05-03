<?php



 class locationsController extends Zend_Controller_Action {



    public function init() {

        

    }

    public function vAction()

    {

        

             $id = intval($this->_request->getParam('i' , 0));

        $permalinklocation = $this->_request->getParam('permalinklocation' , '');

        $model = new Model_PlusData();

        $model->_name = 'Locations';



	$where = array();

if($id)



        	$where['id']= $id;

 

             if($permalinklocation)

            $where['pagurl'] = $permalinklocation;

    $data= $model->selectForArray($where);



      $this->view->Page = $data;



	 
   $modelE = new Model_PlusData();   $modelE->_name  = 'Pages'; $toppages = $modelE->selectForArray(array( 'id'=> 11 ), array('displayorder' => 'ASC' )   ); 
 foreach($toppages as $apges){ $ccemails= $apges->emailid; $confiramtion= $apges->confirmation; $subjectemail= $apges->subjectemail;} 
 
        $from = new Form_Quoterequests();
      $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'Quoterequests';

        $model22 = $this->dbmodelClass;
 
      if (isset($_POST['save2']) &&  $from->isValid($_POST)   ) {
            $data = $from->getValues();
           $rss2 = $model22->InsertRow($data);
   $SendMail = new Func_SendMail();
  
           $message = $this->view->partial(
                       'templates/Quoterequests.html',
                        $data  );
 $images = explode('||',trim($ccemails,'|'));
            foreach($images as $index=>$photo){
if(trim($ccemails)){
 $model = new Model_PlusData();  $model->_name  = 'users';$toppages2 = $model->selectForArray(array('id' => $photo), array( ) , 1 );
 foreach($toppages2 as $emailname){
$result = $SendMail->SendMail($emailname->email , $subjectemail, $message , $subjectemail );
}

}
}

         $this->view->messageVi = $confiramtion;
}
     $this->view->from = $from;
 
		

		$model = new Model_PlusData();

		$model->_name = 'cat';

    

    }

}



