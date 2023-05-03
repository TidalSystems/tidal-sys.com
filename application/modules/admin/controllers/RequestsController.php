<?php class Admin_RequestsController extends CL_Curd_CurdContoller{    
public function init()  

  {        
 $this->dbmodelClass = new Model_PlusData();       
 $this->dbmodelClass->_name = 'requests';     

 $this->listValue = array('email2'=>'Email Address'   , 'FIRSTNAME2'=>'First Name' , 'LASTNAME2'=>'Last Name' );         
 $this->formClass = new Form_Request();       
 $this->view->typename = 'Requests A Quote';    
}  
 
 public function indexAction() { 
 $this->view->Custom = 'Requests A Quote';       
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