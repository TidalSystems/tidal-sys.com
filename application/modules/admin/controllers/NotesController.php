<?php

class  Admin_NotesController extends CL_Curd_CurdContoller{   
 public function init() 

   {        
   $this->dbmodelClass        = new Model_PlusData();       
 $this->dbmodelClass->_name = 'defaultnotes';

   $this->listValue = array(      'title'=>'Title',       'displayorder'=>'Display Order'   );     

  $this->formClass = new Form_Notes();       
 $this->view->typename      = 'Notes';    
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