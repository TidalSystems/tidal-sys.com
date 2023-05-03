<?php class Admin_SupportController extends CL_Curd_CurdContoller

{

   public function init()

    {



        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'Support';

        $this->listValue = array('title'=>'Title En' , 'titleAr'=>'title Ar' , 'SupportCatid'=>'Category' );

        $this->formClass = new Form_Support();

        $this->view->typename = 'Support';

        $this->view->typename2 = 'Support';



    }







public function regions2Action()



    {

        $model = new Model_PlusData();

        $model->_name = 'ProductsSubCategories';

        $select = $model->select();

        $select->setIntegrityCheck(false);

        $select->from($model->_name);

        $where = array();

        if($this->_getParam('country') OR isset($_REQUEST['country']))

            $where['Catid'] = (int)$this->_getParam('country');

        $list = array();

        foreach ($model->selectForArray($where , array('title' => 'ASC') ) as $values)



        {

            array_push($list, array('id'=>$values['id'],'region2'=>$values['title']));

        }

        echo json_encode($list);

        exit;

    }





    public function indexAction() {

      $this->view->Custom = 'Support';

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















