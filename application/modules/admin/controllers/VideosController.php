<?php
class Admin_VideosController extends CL_Curd_CurdContoller

{

    public function init()

    {

        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'videos';

        $this->listValue = array('title'=>'Title En' , 'titleAr'=>'Title Ar' , 'displayorder'=>'Display Order'  );

        $this->formClass = new Form_Videos();

       $this->view->typename = 'Videos';

       $this->view->typename2 = 'Videos';


    }

public function regionsAction()

    {
        $model = new Model_PlusData();
        $model->_name = 'destinaions';
        $select = $model->select();
        $select->setIntegrityCheck(false);
        $select->from($model->_name);
        $where = array();
        if($this->_getParam('city') OR isset($_REQUEST['city']))
            $where['countryid'] = (int)$this->_getParam('city');   
        $list = array();
        foreach ($model->selectForArray($where , array('Name' => 'ASC') ) as $values)
       {
if($values['TravelIdeas'] == '0' && $values['Active'] == '0'){
            array_push($list, array('id'=>$values['id'],'region'=>$values['Name']));
}
        }
        echo json_encode($list);
        exit;
    }


    public function indexAction() {

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



