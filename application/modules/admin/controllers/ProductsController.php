<?php
class Admin_ProductsController extends CL_Curd_CurdContoller
{
   public function init()
    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'products';
        $this->listValue = array('title'=>'Title' , 'catid' => 'Category', 'displayorder' => 'Order');
        $this->formClass = new Form_Products();
        $this->view->typename = 'Products';
        $this->view->typename2 = 'Products';
    }

    public function indexAction() { 
      $this->view->Custom = 'Products';
   
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
                        $this->view->Custom = 'Portfolio';       
					    $this->view->form = new Form_PortfolioSearch();        
						$this->view->form = new Form_PortfolioSearch(array( ));        
						$form = $this->formClass;        
						$this->formClass = $this->view->form ;        
					    if($this->_request->getParam('PortfolioCatid')){            
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

  

