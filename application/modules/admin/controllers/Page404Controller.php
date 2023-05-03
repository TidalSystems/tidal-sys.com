<?php 

class Admin_Page404Controller extends Zend_Controller_Action

{

    public function init()

    {

      $this->view->typename = '404 page';



    }

    public function preDispatch()

    {

            $this->session = new  Zend_Session_Namespace('Default');

    }

    public function indexAction()

    {

        $form = new Form_Page404();

        $model = new Model_Page404();

        $confData = $model->optionselect('siteConf2' ,$this->view->lang);

        if($this->getRequest()->isPost() && $form->isValid($_POST))

        {

            $formData = $form->getValues();

            $model-> updateoneop('siteConf2' , $formData ,$this->view->lang);


   Zend_Registry::set('application', new Zend_Config_Ini(APPLICATION_PATH.'/configs/application.ini', 'production'));

             $this->config = Zend_Registry::get('application');
             $username =  $this->config->resources->db->params->username ;
             $password =  $this->config->resources->db->params->password ;
             $dbname =  $this->config->resources->db->params->dbname ;

$conn=new mysqli("localhost",$username,$password ,$dbname );

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
$time1=date("h:i:s");
		 	 
}

  

 $sql="INSERT INTO  logs (action,user,userid,actiondetails,tablename,createdate,createtime) VALUES ('Edit', '$userfullname' , '$userid' , ' <spam style=color:red> 404 page</spam> ' , '404 page' , '$date1' , '$time1' ) ";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
};

 




            $this->_helper->flashMessenger

                        ->addMessage('success')

                        ->addMessage('Save Done');

            $this->_redirect('admin/Page404/');

        }

        if($confData)

        {

            $form->populate($confData);

        }

        $this->view->form = $form ;

    }

    






 

}