<?php
class Admin_TagsController extends CL_Curd_CurdContoller

{

    public function init()

    {

        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'tags';

        $this->listValue = array('Name'=>'Name' , 'countryid'=>'Country');

        $this->formClass = new Form_Tags();

        $this->view->typename = 'Tags';

    }

    public function indexAction() {

        $this->view->Custom = 'tags';
 $this->view->form = new Form_CitySearch();  



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

    



 public function searchAction()   

 {       

                        $this->view->Custom = 'tags';       

					    $this->view->form = new Form_CitySearch();        

						$this->view->form = new Form_CitySearch(array('type'=>1));        

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

  