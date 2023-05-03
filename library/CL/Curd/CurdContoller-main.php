<?php

class CL_Curd_CurdContoller extends Zend_Controller_Action
{
    /*
    *  Db Handel
    */
    protected $dbmodelClass;
    protected $selectOptions = array();

    /*
     *  Form Handel
     */

    protected $formClass;
    protected $FormOptions = array();
    /*
     * Html Handel
     */
    protected $CustomformClass;
    protected $DefaultTemplate = 'curd';
    protected $listValue = array();
    protected $LangBar;
    protected $lang;
    protected $Formoptions;

    public function preDispatch()
    {

        $this->view->addScriptPath(APPLICATION_PATH . '/modules/admin/views/scripts/' . $this->DefaultTemplate);
    }

    public function init()
    {
    }

    protected function indexAction()
    {
        if($this->getRequest()->isPost()) {
            $this->sortOrder();
            exit;
        }
        $this->view->listValue = $this->listValue;
        $model = $this->dbmodelClass;
        $adapter = $model->selectForPager($this->selectOptions, 'displayorder asc');
        $paginator = new Zend_Paginator($adapter);
        $paginator->setItemCountPerPage(20);
        $page = $this->_request->getParam('page', 1);
        $paginator->setCurrentPageNumber($page);
        $this->view->paginator = $paginator;
        $this->view->contName = $this->_request->getControllerName();
        $this->render('index', null, true);
    }

    protected function createAction()
    {
        $form = $this->formClass;
        $model = $this->dbmodelClass;
        if ($this->getRequest()->isPost() && $form->isValid($_POST)) {
            $data = $form->getValues();
            foreach ($data as $i => $v) {
                if (is_null($data[$i]))
                    unset($data[$i]);
            }
            $res = $model->InsertRow(($data));
            if ($res) {
                $this->_helper->flashMessenger
                    ->addMessage('success')
                    ->addMessage('Save Done');
                $this->_redirect('admin/' . $this->_request->getControllerName() . '/index/');
            } else {
                $this->_helper->flashMessenger
                    ->addMessage('error')
                    ->addMessage('Error Some Fildes is Required');
            }
        } elseif ($this->getRequest()->isPost() && !$form->isValid($_POST)) {
            $this->_helper->flashMessenger
                ->addMessage('error')
                ->addMessage('Error Some Fildes is Required');
        }
        $this->view->form = $form;
        $this->render('create', null, true);
    }

    protected function editAction()
    {
        $model = $this->dbmodelClass;
        $id = intval($this->_request->getParam('id'));
        $EdieRow = $model->find($id)->current();
        if ($EdieRow) {
            $form = $this->ReBuildClass(array('EditRow' => $EdieRow->toArray()));
        } else {
            $form = $this->formClass;
        }
        if ($this->getRequest()->isPost() && $form->isValid($_POST)) {
            $data = $form->getValues();
            foreach ($data as $i => $v) {
                if (is_null($data[$i]))
                    unset($data[$i]);
            }
            $res = $model->edit($id, $data);
            if ($res) {
                $this->_helper->flashMessenger
                    ->addMessage('success')
                    ->addMessage('Save Done');
                $this->_redirect('admin/' . $this->_request->getControllerName() . '/index/');
            } else {

            }
        } elseif ($this->getRequest()->isPost() && !$form->isValid($_POST)) {
            $this->_helper->flashMessenger
                ->addMessage('error')
                ->addMessage('Error Some Fildes is Required');
        }
        if ($EdieRow) {
            $form->populate($EdieRow->toArray());
        } else {
            $this->_redirect('admin/' . $this->_request->getControllerName() . '/index/');
        }
        $this->view->form = $form;
        $this->render('create', null, true);
    }

    protected function deleteAction()
    {
        $this->_helper->viewRenderer->setNoRender();
        $this->_helper->layout->disableLayout();
        $id = intval($this->_request->getParam('id'));
        $model = $this->dbmodelClass;
        if (in_array($id, $this->_UnDelete)) {
            $this->_helper->flashMessenger
                ->addMessage('error')
                ->addMessage('Sorry We Can`t Delete This Item');
            return $this->_redirect('admin/' . $this->_request->getControllerName() . '/index/');
        }

        $data = $model->deleteRow($id);
        if ($data === true) {
            $this->_helper->flashMessenger
                ->addMessage('success')
                ->addMessage('Delete Done');
            $this->_redirect('admin/' . $this->_request->getControllerName() . '/index/');
        } else {
            $this->_redirect('admin/' . $this->_request->getControllerName() . '/index/');
        }
    }

    public function ReBuildClass($options)
    {
        $array1 = $this->FormOptions;
        $array2 = $options;
        return new $this->formClass(array_merge((array)$array1, (array)$array2));
    }

    public function sortOrder()
    {
        if(!$ids = $this->getRequest()->getParam('sortOrder')) {
            return;
        }
        $model = $this->dbmodelClass;
        foreach ($ids as $key => $id) {
            $row = $model->find($id)->current()->toArray();
            if(!isset($row['displayorder'])) break;
            if(!isset($row['pageid'])) $row['pageid'] = 0;
            $row['displayorder'] = $key+1;
            $object = $model->edit($id, $row);
        }
        echo json_encode(array(
            'success' => true
        ), true);
    }
}