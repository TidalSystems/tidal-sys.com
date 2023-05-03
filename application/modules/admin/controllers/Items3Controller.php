<?php


class Admin_Items3Controller extends CL_Curd_CurdContoller



{



    public function init()



    {



        $this->dbmodelClass = new Model_PlusData();



        $this->dbmodelClass->_name = 'items3';



        $this->listValue = array('title'=>'Title' , 'displayorder'=>'Display Orde '  , 'data55'=>'From ');        

        $this->formClass = new Form_Items3();       

        $this->view->typename = 'Cruises'; 



    }



    public function indexAction() {



     $this->view->Custom = 'items3';

 $this->view->form = new Form_City3Search();  



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










public function regions2Action()

    {

        $model = new Model_PlusData();

        $model->_name = 'country';

        $select = $model->select();

        $select->setIntegrityCheck(false);

        $select->from($model->_name);

        $where = array();

        if($this->_getParam('country') OR isset($_REQUEST['country']))

            $where['regionid'] = (int)$this->_getParam('country');

        

        $list = array();

        foreach ($model->selectForArray($where) as $values)

        {

            array_push($list, array('id'=>$values['id'],'region2'=>$values['data']));

        }

        

        echo json_encode($list);

        exit;

    }



    public function editAction() {

        parent::editAction();



    }





    public function edititem3Action() {



        parent::edititem3Action();







    }



    public function deleteAction() {



 



 



        parent::deleteAction();



    }







 public function searchAction()   

 {       

                        $this->view->Custom = 'items3';       

					    $this->view->form = new Form_City3Search();        

						$this->view->form = new Form_City3Search(array('type'=>1));        

						$form = $this->formClass;        

						$this->formClass = $this->view->form ;        

					    if($this->_request->getParam('regionid')){            

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

  













