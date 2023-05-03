<?php

class Admin_MediaController extends CL_Curd_CurdContoller
{
    public function init()
    {
        $this->dbmodelClass = new Model_PlusData();
        $this->dbmodelClass->_name = 'media_coverage';
        $this->listValue = array('Name'=>'Media Name',  'Date_'=>'Date');
        $this->formClass = new Form_Media();
        $this->view->typename = 'Media Coverage';
    }
    public function indexAction() {
 
        parent::indexAction();
    }
    public function createblockAction() {
        parent::createblockAction();
    }
    public function editAction() {
        parent::editAction();

    }
    public function deleteAction() {
        parent::deleteAction();
    }
    public function searchAction()
    {
        $this->view->Custom = 'blocks';
        $this->view->form = new Form_BlockSearch();
        $form = $this->formClass;
        $this->formClass = new Form_BlockSearch();
        if($this->_request->getParam('pageid')){
            $prams = $this->_getAllParams();
            $arrRemovePrams = array('save');
            foreach($prams as $key=>$value)
            {
                if(!in_array($key, $arrRemovePrams) && $value) {
                    if($form->getElement($key))
                    {
                        $form->getElement($key)->setValue($value);
                                $selectOp[$key] = $value;
                        }
                    }
             }
            
            $this->selectOptions = array_merge((array) $this->selectOptions ,(array) $selectOp); 
            $this->view->listValue = $this->listValue;
            $model = $this->dbmodelClass;
            $adapter = $model->selectForPager($this->selectOptions);
            $paginator = new Zend_Paginator($adapter);
            $paginator->setItemCountPerPage(20);
            $page = $this->_request->getParam('page', 1);
            $paginator->setCurrentPageNumber($page);
            $this->view->paginator = $paginator;
            $this->view->contName = $this->_request->getControllerName();
            $this->render('index' ,null , true);
          }
      
      
        
    }

}

