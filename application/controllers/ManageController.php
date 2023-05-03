<?php
class ManageController extends Zend_Controller_Action
{
    public function init()
    {
        $auth = Zend_Auth::getInstance();
        $this->view->identity = $auth->getIdentity();
    }
    public function preDispatch()
    {
         $this->session = new  Zend_Session_Namespace('Default');
    }
    public function loginAction() {
        $form = new Form_LogToMail();
        $form->removeElement('email');
        $form->setAction(LANG_URL.'mamage/login');
        $form->getElement('save')->setValue('Login')
                ->setLabel('Enter');
        if ($this->getRequest()->isPost() && $form->isValid($_POST)) {
            $data = $form->getValues();
            $db = Zend_Db_Table::getDefaultAdapter();
            $authAdapter = new Zend_Auth_Adapter_DbTable($db, 'users','username','password');
            $authAdapter->setIdentity($data['username']);
            $authAdapter->setCredential(($data['password']));
            $result = $authAdapter->authenticate();
            if ($result->isValid()) {
                $auth = Zend_Auth::getInstance();
                $storage = $auth->getStorage();
                $storage->write($authAdapter->getResultRowObject(array('id', 'username', 'role')));
                $this->_redirect('/manage/listings');
            }
else{
 
                $this->view->message = 'Wrong Usernam or Password';
 
}
        }
        $this->view->form = $form;
    }



    public function logoutAction()
    {
        $authAdapter = Zend_Auth::getInstance();
        $authAdapter->clearIdentity();
        $this->_redirect('');
    }
    /*public function registerAction()
    {
        $auth = Zend_Auth::getInstance();
        if($auth->hasIdentity())
        {
            $this->_redirect('');
        }
        $this->view->PageTitle = $this->view->translate('login.profile' , LANG);
        $form = new Form_Register();
        $form->getElement('save')->setValue('تسجيل')
                ->setLabel('تسجيل');
        $form->setAction(LANG_URL.'user/register');
        $model = new Model_User();

        
        if ($this->_request->isPost() && $form->isValid($_POST)) {
            $data = $form->getValues();
            $res = $model->InsertRow(array_filter($data));
            $this->session->msgtext = $this->view->translate('profile.editDone' , LANG);
            $this->session->msgtype = 'success';
            $this->_redirect('user/login');
        }
        $this->view->form = $form;
    }*/
    public function profileAction()
    {
        $auth = Zend_Auth::getInstance();
        if(IS_LOGINED)
        {
            $identity = $auth->getIdentity();
            $id = strtolower($identity->id);
        }
        else
        {
            $this->_forward('login');
        }
        $this->view->PageTitle = $this->view->translate('login.profile' , LANG);
        $form = new Form_User();
        $form->setAction(LANG_URL.'user/profile');
        $form->getElement('username')->setAttrib('disabled', 'disabled');
        $form->getElement('password')->setRequired(false);
        $form->getElement('username')->setRequired(false);
        $model = new Model_User();
        $EdieRow = $model->find($id)->current();

        
        if ($this->_request->isPost() && $form->isValid($_POST)) {
            $data = $form->getValues();
            unset($data['username']);
            $res = $model->edit($id,array_filter($data));
            if ($res) {
                $this->session->msgtext = $this->view->translate('profile.editDone' , LANG);
                $this->session->msgtype = 'success';
                $this->_redirect('index/');
            } else {
                $this->view->msgtext = $this->view->translate('profile.wrong' , LANG);
                $this->view->msgtype = 'error';
            }
        }
        if($EdieRow)
        {
            $form->populate($EdieRow->toArray());
        }
        $this->view->form = $form;
    }
    
    public function listAction()
    {
        $model = new Model_PlusData();
        $model->_name = 'users';
        $select = $model->select();
        $select->setIntegrityCheck(false);
        $select->from($model->_name);
        $select->where('users.name_'.LANG.' IS NOT NULL');
        
        $adapter = new Zend_Paginator_Adapter_DbTableSelect($select);

        $paginator = new Zend_Paginator($adapter);
        $paginator->setItemCountPerPage(12);
        $page = $this->_request->getParam('page', 1);
        $paginator->setCurrentPageNumber($page);
        $this->view->paginator = $paginator;
    }
    
    public function workAction()
    {
        $model = new Model_PlusData();
        
        $model->_name = 'users';
        $this->view->user = $model->find($this->_request->getParam('i', 0))->current();        
        
        if(!$this->view->user)
            $this->_forward('list');
        
        $model->_name = 'items';
        $select = $model->select();
        $select->setIntegrityCheck(false);
        $select->from($model->_name);
        $select->where('items.user_id = ?', $this->_request->getParam('i', 0));
        $select->where('items.active = ?', 1);
        
        $adapter = new Zend_Paginator_Adapter_DbTableSelect($select);

        $paginator = new Zend_Paginator($adapter);
        $paginator->setItemCountPerPage(12);
        $page = $this->_request->getParam('page', 1);
        $paginator->setCurrentPageNumber($page);
        $this->view->paginator = $paginator;
    }
    public function listingsAction()
    {
$userInfo = Zend_Auth::getInstance()->getStorage()->read();
$this->view->userid = $userInfo->id;;
 

        $auth = Zend_Auth::getInstance();
        if($auth->hasIdentity())
        {
            $identity = $auth->getIdentity();
            $id = strtolower($identity->id);
        }
        else
        {
            $this->_forward('login');
        }
        
           
    }
    
    public function inboxAction()
    {
        $auth = Zend_Auth::getInstance();
        if(IS_LOGINED)
        {
            $identity = $auth->getIdentity();
            $id = strtolower($identity->id);
        }
        else
        {
            $this->_forward('login');
        }
        $model = new Model_PlusData();
        $model->_name = 'items';
        $select = $model->select();
        $select->setIntegrityCheck(false);
        $select->from($model->_name);
        $select->joinLeft(array('c' => 'cities'), 'c.id = items.city_id', array('c.name AS city'), null);
        $select->joinLeft(array('r' => 'regions'), 'r.id = items.region_id', array('r.region'), null);
        $select->joinLeft(array('ca' => 'cat'), 'ca.id = items.catid', array('ca.title AS category'), null);
        $select->where('items.user_id = ?', $id);
        $select->where('items.id IN (SELECT item_id FROM user_contacts)');
        
        $adapter = new Zend_Paginator_Adapter_DbTableSelect($select);

        $paginator = new Zend_Paginator($adapter);
        $paginator->setItemCountPerPage(12);
        $page = $this->_request->getParam('page', 1);
        $paginator->setCurrentPageNumber($page);
        $this->view->paginator = $paginator;
    }

}


