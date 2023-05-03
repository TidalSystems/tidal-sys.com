<?php

class  Admin_PackagetypeController extends CL_Curd_CurdContoller{   

 public function init() 

   {        

 $this->dbmodelClass  = new Model_PlusData();       

 $this->dbmodelClass->_name = 'packagetype';



 $this->listValue = array('title'=>'Title','displayorder'=>'Display Order');     



  $this->formClass = new Form_Packagetype();       

  $this->view->typename      = 'Categories';    

}  



  public function indexAction()    

{  

 $this->view->Custom = 'Package Type';

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