<?php
class Admin_CategoryController extends CL_Curd_CurdContoller

{

    public function init()

    {

        $this->bdbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'category';

        $this->listValue = array('Title'=>'Title' ,  'displayorder'=>'Display Order' );

        $this->formClass = new Form_Category();

        $this->view->typename = 'Category';

    }

    public function indexAction() {

        $this->view->Custom = 'Category';

        parent::indexAction();

    }


   public function regionsAction()

    {

        $model = new Model_PlusData();
        $model->_name = 'tags';
        $select = $model->select();
        $select->setIntegrityCheck(false);
        $select->from($model->_name);
        $where = array();
        if($this->_getParam('city') OR isset($_REQUEST['city']))
            $where['countryid'] = (int)$this->_getParam('city');
        $list = array();
        foreach ($model->selectForArray($where ,  array('Name' => 'ASC')) as $values   )
        {
            array_push($list, array('id'=>$values['id'],'region'=>$values['Name']));
        }
        echo json_encode($list);
        exit;
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



