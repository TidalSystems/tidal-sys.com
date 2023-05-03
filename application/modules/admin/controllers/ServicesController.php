<?php
class Admin_ServicesController extends CL_Curd_CurdContoller
{
   public function init()

    {

        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'Services';
        $this->listValue = array('title'=>'Title' ,'displayorder'=>'Order' ,  'showhome' => 'Show in Home' );
        $this->formClass = new Form_Services();
        $this->view->typename = 'Services';
        $this->view->typename2 = 'Services';

    }


    public function indexAction() {
      $this->view->Custom = 'Services';
        parent::indexAction();

    }



 public function regions2Action()

    {
        $model = new Model_PlusData();
        $model->_name = 'ServicesSubCategories';
        $select = $model->select();
        $select->setIntegrityCheck(false);
        $select->from($model->_name);
        $where = array();
        if($this->_getParam('country') OR isset($_REQUEST['country']))
            $where['catID'] = (int)$this->_getParam('country');
        $list = array();
        foreach ($model->selectForArray($where) as $values)

        {
            array_push($list, array('id'=>$values['id'],'region2'=>$values['title']));
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







