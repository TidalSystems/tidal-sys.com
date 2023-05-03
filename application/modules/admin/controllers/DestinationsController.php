<?php
 
class Admin_DestinationsController extends CL_Curd_CurdContoller
{
    public function init()
    {
        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'destinaions';
        $this->listValue = array('Name'=>'Title'  ,    'countryid'=>'Country ' ,  );
 
         $this->formClass = new Form_Destinations();

        $this->view->typename = 'Destinations';
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
            array_push($list, array('id'=>$values['id'],'region2'=>$values['country_name']));
        }
        echo json_encode($list);
        exit;
    }




public function regions22Action()

    {

$allcountry = array();
								$model = new Model_PlusData();
						        $model->_name  = 'destinaions';						                                       
						        $toppages2 = $model->selectForArray(array( 'TravelIdeas' => '0',  'DestType2' => '0'), array('displayorder' => 'ASC')  );
								foreach($toppages2 as $toppage23){
 $allcountry []= $toppage23->countryid ;
}


        $model = new Model_PlusData();
        $model->_name = 'country';
        $select = $model->select();
        $select->setIntegrityCheck(false);
        $select->from($model->_name);
        $where = array ();
        if($this->_getParam('country') OR isset($_REQUEST['country'] ))
            $where['regionid'] = (int)$this->_getParam('country') ;   
        $list = array();
        foreach ($model->selectForArray($where) as $values)
       {
if (in_array($values['id'] , $allcountry)){
            array_push($list, array('id'=>$values['id'],'region2'=>$values['country_name']));
}
        }
        echo json_encode($list);
        exit;
    }

    public function indexdestinationsAction() {
     $this->view->Custom = 'Destinations';
 $this->view->form = new Form_CitySearch();  

        parent::indexdestinationsAction();
    }
    public function createdestinationsAction() {
        parent::createdestinationsAction();
    }
    public function c() {
        parent::editdestinationsAction();

    }
    public function deletedestinationsAction() {
 
  
        parent::deletedestinationsAction();
    }




 public function searchAction()   

 {       

                        $this->view->Custom = 'Destinations';       

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

													   	parent::indexdestinationsAction(); 

													                                    }          

                          else           	

                          parent::indexdestinationsAction();   

                          }}

  



