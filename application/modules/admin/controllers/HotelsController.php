<?php
 
class Admin_HotelsController extends CL_Curd_CurdContoller
{
    public function init()
    {
        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'hotels';
        $this->listValue = array('Name'=>'Title' ,   'City'=>'City'   ,   'countryid'=>'Country' );
        $this->formClass = new Form_Hotels();
        $this->view->typename = 'Hotels';
    }

public function regionsAction()

    {
        $model = new Model_PlusData();
        $model->_name = 'country';
        $select = $model->select();
        $select->setIntegrityCheck(false);
        $select->from($model->_name);
        $where = array();
        if($this->_getParam('city') OR isset($_REQUEST['city']))
            $where['countryid'] = (int)$this->_getParam('city');
        $list = array();
        foreach ($model->selectForArray($where ,  array('title' => 'ASC')) as $values   )

        {
            array_push($list, array('id'=>$values['id'],'region'=>$values['title']));

        }
        echo json_encode($list);
        exit;
    }


    public function regions2Action()

    {
        $model = new Model_PlusData();
        $model->_name = 'city';
        $select = $model->select();
        $select->setIntegrityCheck(false);
        $select->from($model->_name);
        $where = array();
        if($this->_getParam('country') OR isset($_REQUEST['country']))
            $where['countryid'] = (int)$this->_getParam('country');
        $list = array();
        foreach ($model->selectForArray($where) as $values)

        {
            array_push($list, array('id'=>$values['id'],'region2'=>$values['title']));
        }
        echo json_encode($list);
        exit;
    }



    public function indexAction() {
     $this->view->Custom = 'Hotels';
    $this->view->form = new Form_HotelsSearch();  
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
                        $this->view->Custom = 'Hotels';       
					    $this->view->form = new Form_HotelsSearch();        
						$this->view->form = new Form_HotelsSearch(array('type'=>1));        
						$form = $this->formClass;        
						$this->formClass = $this->view->form ;        
					    if($this->_request->getParam('countryid')){            
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

  

