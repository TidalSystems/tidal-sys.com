<?php

 

class Admin_Items4Controller extends CL_Curd_CurdContoller

{

    public function init()

    {

        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'items4';

        $this->listValue = array('title'=>'Title' , 'displayorder'=>'Display Orde ' );        
        $this->formClass = new Form_Items4();       
        $this->view->typename = 'Special Offer'; 

    }

    public function indexAction() {

     $this->view->Custom = 'items4';
  

        parent::indexAction();

    }

    public function createAction() {

        parent::createAction();

    }

 public function regionsAction()
    {
        $model = new Model_PlusData();
        $model->_name = 'city';
        $select = $model->select();
        $select->setIntegrityCheck(false);
        $select->from($model->_name);
        $where = array();
        if($this->_getParam('city') OR isset($_REQUEST['city']))
            $where['countryid'] = (int)$this->_getParam('city');
        
        $list = array();
        foreach ($model->selectForArray($where) as $values)
        {
            array_push($list, array('id'=>$values['id'],'region'=>$values['title']));
        }
        
        echo json_encode($list);
        exit;
    }

    public function edititem4Action() {

        parent::edititem4Action();



    }

    public function deleteAction() {

 

 

        parent::deleteAction();

    }



 public function searchAction()   
 {       
                        $this->view->Custom = 'items3';       
					    $this->view->form = new Form_City2Search();        
						$this->view->form = new Form_City2Search(array('type'=>1));        
						$form = $this->formClass;        
						$this->formClass = $this->view->form ;        
					    if($this->_request->getParam('cityid')){            
					    $prams = $this->_getAllParams();           
					    $arrRemovePrams = array('save');            
						foreach($prams as $key=>$value)           
						 {               
					    if(!in_array($key, $arrRemovePrams) && $value) {                    
						  if($form->getElement($key))                    
						  {                        
						  $form->getElement($key)->setValue($value);
						  $selectOp[$key] = $value; 
						                         }                    }             }                        
                          $this->selectOptions = array_merge((array) $this->selectOptions ,(array) $selectOp);          
												    $this->view->listValue = $this->listValue;           
													 $model = $this->dbmodelClass;          
													   $adapter = $model->selectForPager($this->selectOptions);            
													   	parent::indexAction(); 
													                                    }          
                          else           	
                          parent::indexAction();   
                          }}
  






