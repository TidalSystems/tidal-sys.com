<?php

class  Admin_PolicyController extends CL_Curd_CurdContoller{   
 public function init() 

   {        
   $this->dbmodelClass        = new Model_PlusData();       
 $this->dbmodelClass->_name = 'defaultpolicy';

   $this->listValue = array(      'title'=>'Title',       'displayorder'=>'Display Order'   );     

  $this->formClass = new Form_Policy();       
 $this->view->typename      = 'Children Policy';    
}  

  public function indexAction()    
{  
 $this->view->Custom = 'option';
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