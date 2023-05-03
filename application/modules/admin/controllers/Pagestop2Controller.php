<?php

 



class Admin_Pagestop2Controller extends CL_Curd_CurdContoller

{

    public function init()

    {

        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'pages';

        $this->listValue = array('title'=>'Title'    , 'data5'=>'From' , 'displayorder'=>'Display Order'   );

        $this->formClass = new Form_PagesTop();

        $this->view->typename = 'Pages';

    }

     

    public function indexinternalpageAction() {

if($this->_request->getParam('serv'))
$serv2=  $this->_request->getParam('serv');
 
$this->view->serv2 =  $this->_request->getParam('serv');
 
 
$this->selectOptions = array_merge((array) $this->selectOptions, array('pageid'=>$this->_request->getParam('serv')));



 




        $this->view->Custom = 'pages';
        $this->view->form = new Form_PagesTop();
        
        parent::indexinternalpageAction();
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

    public function searchAction()

    {

       $this->view->Custom = 'pages';

        $this->view->form = new Form_PagesTop();

        $form = $this->formClass;

        $this->formClass = new Form_PagesTop();

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



