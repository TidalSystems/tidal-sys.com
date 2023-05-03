<?php class Admin_Items7Controller extends CL_Curd_CurdContoller{    public function init()    {      

 $this->dbmodelClass = new Model_PlusData();       

$this->dbmodelClass->_name = 'items7';       

 $this->listValue = array('title'=>'Title' , 'displayorder'=>'Display Orde '  , 'data55'=>'From Country  ' , 'data5'=>'From City ');        

$this->formClass = new Form_Items7();       

$this->view->typename = 'Optional Tours';    

}   

 public function indexitem7Action() {

  

if($this->_request->getParam('serv'))

$serv2=  $this->_request->getParam('serv');

 

$this->view->serv2 =  $this->_request->getParam('serv');





      

$this->view->Custom = 'items7';       



 

 $this->view->form = new Form_Items7Search();  

      

    parent::indexitem7Action();    

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



	  



 public function indexitem7searchAction() {        

$this->view->Custom = 'items7';       



 

 $this->view->form = new Form_Items7Search();  

      

    parent::indexitem7searchAction();    

	} 





	public function createitem7Action() {    

	  parent::createitem7Action(); 

		     }   

		   public function edititem7Action() {     

		   parent::edititem7Action();   

		    }  

			public function deleteitem7Action() {    

				    parent::deleteitem7Action();    

					}   

					

					

					    public function searchAction()    {       

                        $this->view->Custom = 'items7';       

					    $this->view->form = new Form_Items7Search();        

						$this->view->form = new Form_Items7Search(array('type'=>1));        

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

													   	parent::indexitem7searchAction(); 

													                                    }          

                          else           	

                          parent::indexitem7searchAction();   

                          }}

  