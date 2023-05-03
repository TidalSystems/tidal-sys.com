<?php


class Admin_MaillistController extends CL_Curd_CurdContoller {







    public function init() {



        $this->dbmodelClass = new Model_PlusData();

        $this->dbmodelClass->_name = 'maillist';
        $this->listValue = array('name' => 'name', 'created_on' => 'Date',);
        $this->formClass = new Form_Maillist();
        $this->view->typename = 'Mailling List';



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







    public function sendmailAction() {



        $PHPprotectV31 = new Form_SendMail();



        if ($this->getRequest()->isPost() && $PHPprotectV31->isValid($_POST)) {



            $PHPprotectV32 = $PHPprotectV31->getValues();



            $PHPprotectV197 = $this->dbmodelClass->selectForArray();



            $PHPprotectV22 = new Func_SendMail();



            $PHPprotectV13 = new Model_Option();



            $PHPprotectV198 = $PHPprotectV13->optionselect('mailConf');



            foreach ($PHPprotectV197 as $PHPprotectV129) {



                $PHPprotectV25 = $PHPprotectV129['email'];



                $PHPprotectV26 = $PHPprotectV32['title'];



                $PHPprotectV29 = $PHPprotectV32['text'];



                $PHPprotectV22->SendMail($PHPprotectV25, $PHPprotectV26, $PHPprotectV29, $PHPprotectV198['email'], $PHPprotectV198['homepage']);



            } $this->_helper->flashMessenger->addMessage('success')->addMessage('Send Done');



            $this->_redirect('admin/' . $this->_request->getControllerName() . '/index/');



        } elseif ($this->getRequest()->isPost() && !$PHPprotectV31->isValid($_POST)) {



            $this->_helper->flashMessenger->addMessage('error')->addMessage('Error ');



        } $this->view->form = $PHPprotectV31;



    }







}



