<?php 

class Admin_Page301Controller extends Zend_Controller_Action

{

    public function init()

    {

      $this->view->typename = '301 page';



    }

    public function preDispatch()

    {

            $this->session = new  Zend_Session_Namespace('Default');

    }

    public function indexAction()

    {

        $form = new Form_Page301();

        $model = new Model_Page301();

        $confData = $model->optionselect('siteConf2' ,$this->view->lang);

        if($this->getRequest()->isPost() && $form->isValid($_POST))

        {

            $formData = $form->getValues();

            $model-> updateoneop('siteConf2' , $formData ,$this->view->lang);


$conn=new mysqli("localhost","New-Backend","New-Backend" ,"New-Backend");


$this->session = new Zend_Session_Namespace('Default');
$request = Zend_Controller_Front::getInstance()->getRequest()->getRequestUri();
 $auth = Zend_Auth::getInstance();
        if($auth->hasIdentity()) {
$userInfo = Zend_Auth::getInstance()->getStorage()->read();
 $userid =  $userInfo->id;
}  

        
        $this->dbmodelClass2 = new Model_PlusData();
        $this->dbmodelClass2->_name = 'users';
        $model2 = $this->dbmodelClass2;

  						                                       
			 $toppages2item = $model2->selectForArray(array('id' => $userid ), array('displayorder' => 'ASC')  );
								foreach($toppages2item as $toppage2items){ 
$userfullname= $toppage2items->firstname.' '.$toppage2items->lastname ;
$date1= date("Y/m/d");
$time1=date("h:i:sa");
		 	 
}

  

 $sql="INSERT INTO  logs (action,user,userid,actiondetails,tablename,createdate,createtime) VALUES ('Edit', '$userfullname' , '$userid' , ' <spam style=color:red> 301 page</spam> ' , '301 page' , '$date1' , '$time1' ) ";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
};

 




            $this->_helper->flashMessenger

                        ->addMessage('success')

                        ->addMessage('Save Done');

            $this->_redirect('admin/Page301/');

        }

        if($confData)

        {

            $form->populate($confData);

        }

        $this->view->form = $form ;

    }

    






 

}