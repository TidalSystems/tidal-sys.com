<?php  class SearchController extends Zend_Controller_Action {
	public function indexAction()


	{


		$this->_forward('v');


	}


	


    public function vAction()


    {


    	 

                

 


    }


   


 public function regionsAction()
    {
        $model = new Model_PlusData();
        $model->_name = 'hotels_imgs';
        $select = $model->select();
        $select->from($model->_name);
       

        if($this->_getParam('cat') OR isset($_REQUEST['cat']))
            $where['Hotel'] = (int)$this->_getParam('cat');

        
        $list = array();
 

        foreach ($model->selectForArray($where ) as $values)
        {
 
 
            array_push($list, array('id'=>$values['Id'],'region'=>$values['Img'] ));
           


        }
        
        echo json_encode($list);
        exit;
    }







 public function regionstempAction()
    {
        $model = new Model_PlusData();
        $model->_name = 'category';
        $select = $model->select();
        $select->from($model->_name);
        if($this->_getParam('temp') OR isset($_REQUEST['temp']))
            $where['id'] = (int)$this->_getParam('cat');
        
        $list = array();
        foreach ($model->selectForArray($where ) as $values)
        {
            array_push($list, array('id'=>$values['id'],'region'=>$values['highlightid']));
        }
        
        echo json_encode($list);
        exit;
    }


   
}





