<?php
class Admin_DistrictsController extends CL_Curd_CurdContoller
{
    public function init()

    {
        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'districts';
        $this->listValue = array('Name'=>'Title' , 'countryid'=>'Country' , 'displayorder'=>'Display Order '   );
        $this->formClass = new Form_Districts();
        $this->view->typename = 'Districts';

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

  





