<?php
class Admin_VillaController extends CL_Curd_CurdContoller
{
    public function init()
    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'villas';
        $this->listValue = array('Title'=>'Title'  , 'districtid'=>'District ' , 'displayorder'=>'Display Order '   );
        $this->formClass = new Form_Villa();
        $this->view->typename = 'Villa Rentals';
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
        $model->_name = 'districts';
        $select = $model->select();
        $select->setIntegrityCheck(false);
        $select->from($model->_name);
        $where = array();
        if($this->_getParam('country') OR isset($_REQUEST['country']))
            $where['countryid'] = (int)$this->_getParam('country');
        $list = array();
        foreach ($model->selectForArray($where) as $values)

        {
            array_push($list, array('id'=>$values['id'],'region2'=>$values['Name']));
        }
        echo json_encode($list);
        exit;
    }



    public function indexAction() {
     $this->view->Custom = 'Villa';
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



    
                         }
  


