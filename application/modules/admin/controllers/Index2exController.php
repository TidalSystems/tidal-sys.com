<?php



class Admin_Index2exController extends Zend_Controller_Action {



    public function init() {

        

    }



    public function indexAction() {

        

    }



    public function testAction() {

        

    }



    public function adminAction() {

        $this->view->typename = 'Administrator';

        $userForm = new Form_Admin();

        $userModel = new Model_admin();

        $userForm->getElement('password')->setRequired(false);



        $password = clone $userForm->getElement('password');

        $password->addValidator(new CL_Validate_IdenticalField('password', 'Password'))

                ->setLabel('Re-enter Password :- ')

                ->setName('password_again');

        $userForm->removeElement('submit');

        $userForm->loadSubmit();

        $userForm->addElement($password);

        $id = 1;

        $currentUser = $userModel->find($id)->current();

        if ($currentUser) {

            $userResult = $currentUser->toArray();

        } if ($this->getRequest()->isPost() && $userForm->isValid($_POST)) {

            $userModel->edit($id, $userForm->getValues(), $imagemedia);

            $userForm->reset();

            $this->_helper->flashMessenger->addMessage('success')->addMessage('Save Done');

            $this->_redirect('admin/index/admin');

        } elseif ($this->getRequest()->isPost() && !$userForm->isValid($_POST)) {

            

        } if ($currentUser) {

            $userForm->populate($userResult);

        } else {

            

        } $this->view->form = $userForm;

    }



    public function loginAction() {

        $userForm = new Form_Admin();

        if ($this->_request->isPost() && $userForm->isValid($_POST)) {

            $data = $userForm->getValues();

            $db = Zend_Db_Table::getDefaultAdapter();

            $authAdapter = new Zend_Auth_Adapter_DbTable($db, 'users', 'username', 'password');

            $authAdapter->setIdentity($data['username']);

            $authAdapter->setCredential(md5($data['password']));

            $result = $authAdapter->authenticate();

            if ($result->isValid()) {

                $auth = Zend_Auth::getInstance();

                $storage = $auth->getStorage();

                $storage->write($authAdapter->getResultRowObject(array('id', 'username', 'role')));

                return $this->_redirect('admin/index');

            } else {

                $this->_helper->flashMessenger->addMessage('error')->addMessage('Wrong ID Or Password');

                $this->_redirect('admin/index/login');

            }

        } $this->view->form = $userForm;

    }



    public function logoutAction() {

        $authAdapter = Zend_Auth::getInstance();

        $authAdapter->clearIdentity();

        $this->_redirect('admin/index/login');

    }



    public function reportAction() {

        $modelLevel = new Model_Levels();

        $this->view->reportData = $modelLevel->allInOne();

    }



    public function userReportAction() {

        $level = $this->_request->getParam('l');

        $type = $this->_request->getParam('t');

    }



}

