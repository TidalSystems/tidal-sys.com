<?php  class ClientController extends CL_Curd_BaseContoller {
    public function init() {


    }

    public function vAction()

    {
 
        $id = intval($this->_request->getParam('i' , 0));
         $permcat999c = $this->_request->getParam('permcat999c' , '');
 
        $idl = intval($this->_request->getParam('v'));

 
 
        $model = new Model_PlusData();
        $model->_name  = 'projects';
        $where = array();
    

        if($id)
            $where['id'] = $id;

        
       if($permcat999c)
 
             $where['pagurl'] =  $permcat999c ;
        $data = $model->selectForArray($where);



        $this->view->Page = $data;
                $id = $data[0]->id; 

    
 



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

 
 




    }



 



 




 



}





