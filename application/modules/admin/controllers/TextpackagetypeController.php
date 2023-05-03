<?php



class  Admin_TextpackagetypeController extends CL_Curd_CurdContoller{   

 public function init() 



   {        

 $this->dbmodelClass  = new Model_PlusData();       

 $this->dbmodelClass->_name = 'textpackagetype';



 $this->listValue = array('title'=>'Title' );     



  $this->formClass = new Form_Textpackagetype();       

  $this->view->typename      = 'Text Package Type';    

}  



  public function indexAction()    

{  

 $this->view->Custom = 'Text Package Type';

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