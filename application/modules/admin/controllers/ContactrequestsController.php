<?php class Admin_ContactrequestsController extends CL_Curd_CurdContoller{    
public function init()  

  {        
 $this->dbmodelClass = new Model_PlusData();       
 $this->dbmodelClass->_name = 'Contactrequests';     

 $this->listValue = array('email'=>'Email' , 'created_on'=>'Created on'  , 'phone'=>'Phone' ,);       
 $this->formClass = new Form_Contactrequests();       
 $this->view->typename = 'Contact Requests';  
 $this->view->typename2 = 'Contactrequests';   
 $this->view->Sort = 'no';   
}  
 
 public function indexAction() {        
 parent::indexAction();    
}   
 public function createAction() {       
 parent::createAction();    
}   

 public function editAction() {        
 parent::editAction();    
}   
 public function deleteAction() {        
 parent::deleteAction();    
}  
  public function searchAction()    {      
  $this->view->Custom = 'Orders';      
  $this->view->form = new Form_RequestSearch(array('type'=>1));       
 $form = $this->formClass;        $this->formClass = $this->view->form ;       
 if($this->_request->getParam('catid')){            $prams = $this->_getAllParams();      
      $arrRemovePrams = array('save');            foreach($prams as $key=>$value)            {    
            if(!in_array($key, $arrRemovePrams) && $value) {                  
  if($form->getElement($key))                    {                     
   $form->getElement($key)->setValue($value);                              
  $selectOp[$key] = $value;                        }                    }             }                        $this->selectOptions = array_merge((array) $this->selectOptions ,(array) $selectOp);             $this->view->listValue = $this->listValue;            $model = $this->dbmodelClass;            $adapter = $model->selectForPager($this->selectOptions);            $paginator = new Zend_Paginator($adapter);            $paginator->setItemCountPerPage(20);            $page = $this->_request->getParam('page', 1);            $paginator->setCurrentPageNumber($page);            $this->view->paginator = $paginator;            $this->view->contName = $this->_request->getControllerName();            $this->render('index' ,null , true);          }    }}