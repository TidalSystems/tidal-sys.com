<?php class Admin_DepositController extends CL_Curd_CurdContoller{    public function init() 

   {        
 $this->dbmodelClass = new Model_PlusData();       
 $this->dbmodelClass->_name = 'deposit';

 $this->listValue = array('title'=>'Title',   'displayorder'=>'Display Order'   );      
    

  $this->formClass = new Form_Deposit();       
 $this->view->typename = 'Deposit Package';    
}  

  public function indexAction()    
{  
 $this->view->Custom = 'comment';
      parent::indexAction();    
}  
 public function createAction()  

  { 
       parent::createAction();   
 }  
public function editAction()    
{       
 parent::editAction();   
 }   

 public function deleteAction()    
{        

parent::deleteAction();    

}
}