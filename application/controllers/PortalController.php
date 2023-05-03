<?php

class PortalController extends Zend_Controller_Action

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



public function refreshAction()

{

$form = new Form_Register();

$captcha = $form->getElement('captchaField')->getCaptcha();

$data = array();

$data['id']  = $captcha->generate();

$data['src'] = $captcha->getImgUrl() .

$captcha->getId() .

$captcha->getSuffix();

$this->_helper->json($data);

}



public function loginAction() {

$form = new Form_LoginPortal();

$form->setAction(LANG_URL.'portal/login');

if (isset($_POST['loginbutton']) && $form->isValid($_POST)) {

$data = $form->getValues();

$db = Zend_Db_Table::getDefaultAdapter();

$authAdapter = new Zend_Auth_Adapter_DbTable($db, 'Restaurants', 'email' , 'password');

 $authAdapter->setIdentity($data['email']);
 $authAdapter->setCredential(($data['password']));

$select   =   $authAdapter->getDbSelect();
$result = $authAdapter->authenticate();

if ($result->isValid() ) {

$auth = Zend_Auth::getInstance();

$storage = $auth->getStorage();

$storage->write($authAdapter->getResultRowObject(array('id', 'email', 'role')));

$this->_redirect('portal/dashboard');

}

else {

$this->view->message = 'Wrong Password ';

}

}
$this->view->form = $form;
}



public function confirmAction() {

$form = new Form_LoginPortal();

$form->setAction(LANG_URL.'portal/confirm');

if (isset($_POST['loginbutton']) && $form->isValid($_POST)) {

$data = $form->getValues();

$db = Zend_Db_Table::getDefaultAdapter();

$authAdapter = new Zend_Auth_Adapter_DbTable($db, 'usersPortal','email','password','inactive','username','firstname2','lastname2'  );

$authAdapter->setIdentity($data['email']);

$authAdapter->setCredential(md5($data['password']));

$select         =   $authAdapter->getDbSelect();

$select->where('`inactive` = 1');

$result = $authAdapter->authenticate();

if ($result->isValid() ) {

$auth = Zend_Auth::getInstance();

$storage = $auth->getStorage();

$storage->write($authAdapter->getResultRowObject(array('id', 'email', 'role' , 'slug' , 'username' ,'firstname2','lastname2' )));

$this->_redirect('portal/dashboard');

}

else {

$this->view->message = 'Wrong Password ';

}

}

$this->view->form = $form;

}



public function logoutAction()

{

$authAdapter = Zend_Auth::getInstance();

$authAdapter->clearIdentity();

$this->_redirect('portal/login');

}



public function successAction()

{

$authAdapter = Zend_Auth::getInstance();

$authAdapter->clearIdentity();

}



public function registerAction()

{

$auth = Zend_Auth::getInstance();

}



public function profile2Action()

{

$sluginfo = Zend_Auth::getInstance()->getStorage()->read();

$this->view->sluginfo = $sluginfo->slug;

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

$form = new Form_User();

$form->setAction(LANG_URL.'user/profile');

$model = new Model_User();

$EdieRow = $model->find($id)->current();

$photosource = $EdieRow['photo'];

$this->view->photo = $photosource;

if ($this->_request->isPost() && $form->isValid($_POST)) {

$data = $form->getValues() ;

foreach ($data as $i => $v) {

if (is_null($data[$i]))

unset($data[$i]);

}

$res = $model->edit($id,($data));

if ($res) {

$this->_helper->flashMessenger

->addMessage('success')

->addMessage('Profile Saved ');

$this->_redirect('user/profile');

} else {

$this->view->msgtext = $this->view->translate('profile.wrong' , LANG);

$this->view->msgtext = 'error';

}

}

if($EdieRow)

{

$form->populate($EdieRow->toArray());

}

$this->view->form = $form;

}



public function dashboardAction()

{

$auth = Zend_Auth::getInstance();

if($auth->hasIdentity())

{

$identity = $auth->getIdentity();
$id = strtolower($identity->id);


$sluginfo = Zend_Auth::getInstance()->getStorage()->read();
$this->view->id = $sluginfo->id;

} else {

$this->_forward('login');
$id= '';

} 
 
$model = new Model_UserPortal();

$EdieRow = $model->find($id)->current();



if ($this->_request->isPost() && $form->isValid($_POST)) {
$data = $form->getValues() ;

foreach ($data as $i => $v) {

if (is_null($data[$i]))

unset($data[$i]);

}

$res = $model->edit($id,($data));

if ($res) {

$this->_helper->flashMessenger

->addMessage('success')

->addMessage('Profile Saved ');

$this->_redirect('user/profile');

} else {

$this->view->msgtext = $this->view->translate('profile.wrong' , LANG);

$this->view->msgtext = 'error';

}

}

 

}




public function customizeAction()

{

$auth = Zend_Auth::getInstance();

if($auth->hasIdentity())

{

$identity = $auth->getIdentity();

$id = strtolower($identity->id);

}

else

{

$this->_forward('login');

$id= '';

}

$form = new Form_User();

$form->setAction(LANG_URL.'user/profile');

$model = new Model_UserPortal();

$EdieRow = $model->find($id)->current();

$useremail = $EdieRow['email'];

$this->view->useremail = $useremail;

$firstname = $EdieRow['firstname2'];

$this->view->userfirstname = $firstname;

}










public function pdfAction()

{

$auth = Zend_Auth::getInstance();

if($auth->hasIdentity())

{

$identity = $auth->getIdentity();

$id = strtolower($identity->id);

}

else

{

$this->_forward('login');

$id= '';

}

$form = new Form_User();

$form->setAction(LANG_URL.'user/profile');

$model = new Model_UserPortal();

$EdieRow = $model->find($id)->current();

$useremail = $EdieRow['email'];

$this->view->useremail = $useremail;

$firstname = $EdieRow['firstname2'];

$this->view->userfirstname = $firstname;

}



public function pdf2Action()

{

$auth = Zend_Auth::getInstance();

if($auth->hasIdentity())

{

$identity = $auth->getIdentity();

$id = strtolower($identity->id);

}

else

{

$this->_forward('login');

$id= '';

}

$form = new Form_User();

$form->setAction(LANG_URL.'user/profile');

$model = new Model_UserPortal();

$EdieRow = $model->find($id)->current();

$useremail = $EdieRow['email'];

$this->view->useremail = $useremail;

$firstname = $EdieRow['firstname2'];

$this->view->userfirstname = $firstname;

}



public function whitepdfAction()

{

$auth = Zend_Auth::getInstance();

if($auth->hasIdentity())

{

$identity = $auth->getIdentity();

$id = strtolower($identity->id);

}

else

{

$this->_forward('login');

$id= '';

}

$form = new Form_User();

$form->setAction(LANG_URL.'user/profile');

$model = new Model_UserPortal();

$EdieRow = $model->find($id)->current();

$useremail = $EdieRow['email'];

$this->view->useremail = $useremail;

$firstname = $EdieRow['firstname2'];

$this->view->userfirstname = $firstname;

}



public function whitepdf2Action()

{

$auth = Zend_Auth::getInstance();

if($auth->hasIdentity())

{

$identity = $auth->getIdentity();

$id = strtolower($identity->id);

}

else

{

$this->_forward('login');

$id= '';

}

$form = new Form_User();

$form->setAction(LANG_URL.'user/profile');

$model = new Model_UserPortal();

$EdieRow = $model->find($id)->current();

$useremail = $EdieRow['email'];

$this->view->useremail = $useremail;

$firstname = $EdieRow['firstname2'];

$this->view->userfirstname = $firstname;

}



public function announcmentsAction()

{

$auth = Zend_Auth::getInstance();

if($auth->hasIdentity())

{

$identity = $auth->getIdentity();

$id = strtolower($identity->id);

}

else

{

$this->_forward('login');

$id= '';

}

$form = new Form_User();

$form->setAction(LANG_URL.'user/profile');

$model = new Model_UserPortal();

$EdieRow = $model->find($id)->current();

$useremail = $EdieRow['email'];

$this->view->useremail = $useremail;

$firstname = $EdieRow['firstname2'];

$this->view->userfirstname = $firstname;

}



public function duplicateAction()

{

$auth = Zend_Auth::getInstance();

if($auth->hasIdentity())

{

$identity = $auth->getIdentity();

$id = strtolower($identity->id);

}

else

{

$this->_forward('login');

$id= '';

}

$form = new Form_User();

$form->setAction(LANG_URL.'user/profile');

$model = new Model_UserPortal();

$EdieRow = $model->find($id)->current();

$useremail = $EdieRow['email'];

$this->view->useremail = $useremail;

$firstname = $EdieRow['firstname2'];

$this->view->userfirstname = $firstname;

}



public function editpdf2Action()

{

$auth = Zend_Auth::getInstance();

if($auth->hasIdentity())

{

$identity = $auth->getIdentity();

$id = strtolower($identity->id);

}

else {

$this->_forward('login');

$id= ''; 

}

$form = new Form_User();

$form->setAction(LANG_URL.'user/profile');

$model = new Model_UserPortal();

$EdieRow = $model->find($id)->current();

$useremail = $EdieRow['email'];

$this->view->useremail = $useremail;

$firstname = $EdieRow['firstname2'];

$this->view->userfirstname = $firstname;

}



public function editpdfAction()

{

$auth = Zend_Auth::getInstance();

if($auth->hasIdentity())

{

$identity = $auth->getIdentity();

$id = strtolower($identity->id);

}

else

{

$this->_forward('login');

$id= '';

}

$form = new Form_User();

$form->setAction(LANG_URL.'user/profile');

$model = new Model_UserPortal();

$EdieRow = $model->find($id)->current();

$useremail = $EdieRow['email'];

$this->view->useremail = $useremail;

$firstname = $EdieRow['firstname2'];

$this->view->userfirstname = $firstname;

}



public function pdfcreatedAction()

{

$auth = Zend_Auth::getInstance();

if($auth->hasIdentity())

{

$identity = $auth->getIdentity();

$id = strtolower($identity->id);

}

else

{

$this->_forward('login');

$id= '';

}

$form = new Form_User();

$form->setAction(LANG_URL.'user/profile');

$model = new Model_UserPortal();

$EdieRow = $model->find($id)->current();

$useremail = $EdieRow['email'];

$this->view->useremail = $useremail;

$firstname = $EdieRow['firstname2'];

$this->view->userfirstname = $firstname;

$Formpdf = new Form_Formpdf();      

if (isset($_POST['savepdf']) && $Formpdf->isValid($_POST)) {

$data = $Formpdf->getValues();

$sendFunc = new Func_SendMail2();

$to = $data['to'];

$content = $data['message'];

$pdf = $data['pdf'];

$message = '<div style="text-align:left" >'.$content.'</div><br/><br/><div style="text-align:center" ><a style="background: #9b0000;

margin: 20px;padding: 10px;color: #fff;" href="https://www.centralholidays.com/pdf/' .$pdf.'.pdf " >Download Brochure</a></div><br>';

$title = $data['subject'];

$from = $data['from']; 

$from2 = $data['fromname'];

$result =	$sendFunc->SendMail2($to, $title, $message, $from , $from2);

if($result) 

{

$this->view->messageVi = "Email Sent";

}

}

$this->view->Formpdf = $Formpdf;

}



public function famtripsAction()

{

$auth = Zend_Auth::getInstance();

if($auth->hasIdentity())

{

$identity = $auth->getIdentity();

$id = strtolower($identity->id);

}

else

{         

header('Location: /portal/login');

$id= '';

}

$form = new Form_User();

$form->setAction(LANG_URL.'user/profile');

$model = new Model_UserPortal();

$EdieRow = $model->find($id)->current();

$useremail = $EdieRow['email'];

$this->view->useremail = $useremail;

$firstname = $EdieRow['firstname2'];

$this->view->userfirstname = $firstname;

$Formpdf = new Form_Formpdf();      

if (isset($_POST['savepdf']) && $Formpdf->isValid($_POST)) {

$data = $Formpdf->getValues();

$sendFunc = new Func_SendMail2();

$to = $data['to'];

$content = $data['message'];

$pdf = $data['pdf'];

$message = '<div style="text-align:left" >'.$content.'</div><br/><br/><div style="text-align:center" ><a style="background: #9b0000;

margin: 20px;padding: 10px;color: #fff;" href="https://www.centralholidays.com/pdf/' .$pdf.'.pdf " >Download Brochure</a></div><br>';

$title = $data['subject'];

$from = $data['from']; 

$from2 = $data['fromname'];

$result =	$sendFunc->SendMail2($to, $title, $message, $from , $from2);

if($result) 

{

$this->view->messageVi = "Email Sent";

}

}

$this->view->Formpdf = $Formpdf;

}



public function connectAction()

{

$emailInfo = Zend_Auth::getInstance()->getStorage()->read();

$this->view->useremail = $emailInfo->email;

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

$form = new Form_Connect();

$form->setAction(LANG_URL.'user/connect');

$model = new Model_User();

$EdieRow = $model->find($id)->current();

if ($this->_request->isPost() && $form->isValid($_POST)) {

$data = $form->getValues();

$res = $model->edit($id,array_filter($data));

if ($res) {

$this->_helper->flashMessenger

->addMessage('success')

->addMessage('Connect  Saved ');

$this->_redirect('user/connect');

} else {

$this->view->msgtext = $this->view->translate('connect.wrong' , LANG);

$this->view->msgtext = 'error';

}

}

if($EdieRow)

{

$form->populate($EdieRow->toArray());

}

$this->view->form = $form;

}



public function vediosAction()

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

$form = new Form_Video();

$form->setAction(LANG_URL.'user/vedios');

$model = new Model_User();

$EdieRow = $model->find($id)->current();

if ($this->_request->isPost() && $form->isValid($_POST)) {

$data = $form->getValues();

foreach ($data as $i => $v) {

if (is_null($data[$i]))

unset($data[$i]);

}

$res = $model->edit($id,($data));

if ($res) {

$this->_helper->flashMessenger

->addMessage('success')

->addMessage('Vedio  Saved ');

$this->_redirect('user/vedios');

} else {

$this->view->msgtext = $this->view->translate('vedios.wrong' , LANG);

$this->view->msgtext = 'error';

}

}

if($EdieRow)

{

$form->populate($EdieRow->toArray());

}

$this->view->form = $form;

}



public function booksAction() 

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

$form = new Form_Books();

$form->setAction(LANG_URL.'user/books');

$model = new Model_User();

$EdieRow = $model->find($id)->current();

if ($this->_request->isPost() && $form->isValid($_POST)) {

$data = $form->getValues();

foreach ($data as $i => $v) {

if (is_null($data[$i]))

unset($data[$i]);

}

$res = $model->edit($id,($data));

if ($res) {

$this->_helper->flashMessenger

->addMessage('success')

->addMessage('Book  Saved ');

$this->_redirect('user/books');

} else {

$this->view->msgtext = $this->view->translate('books.wrong' , LANG);

$this->view->msgtext = 'error';

}

}

if($EdieRow)

{

$form->populate($EdieRow->toArray());

}

$this->view->form = $form;

}



public function expoAction() 

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

$form = new Form_Books();

$form->setAction(LANG_URL.'user/books');

$model = new Model_User();

$EdieRow = $model->find($id)->current();

if ($this->_request->isPost() && $form->isValid($_POST)) {

$data = $form->getValues();

foreach ($data as $i => $v) {

if (is_null($data[$i]))

unset($data[$i]);

}

$res = $model->edit($id,($data));

if ($res) {

$this->_helper->flashMessenger

->addMessage('success')

->addMessage('Book  Saved ');

$this->_redirect('user/books');

} else {

$this->view->msgtext = $this->view->translate('books.wrong' , LANG);

$this->view->msgtext = 'error';

}

}

if($EdieRow)

{

$form->populate($EdieRow->toArray());

}

$this->view->form = $form;

}



public function rightAction() 

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

$form = new Form_Right();

$form->setAction(LANG_URL.'user/right');

$model = new Model_User();

$EdieRow = $model->find($id)->current();

if ($this->_request->isPost() && $form->isValid($_POST)) {

$data = $form->getValues();

foreach ($data as $i => $v) {

if (is_null($data[$i]))

unset($data[$i]);

}

$res = $model->edit($id,($data));

if ($res) {

$this->_helper->flashMessenger

->addMessage('success')

->addMessage('Right Images Saved ');

$this->_redirect('user/right');

} else {

$this->view->msgtext = $this->view->translate('rigth.wrong' , LANG);

$this->view->msgtext = 'error';

}

}

if($EdieRow)

{

$form->populate($EdieRow->toArray());

}

$this->view->form = $form;

}



public function leftAction() 

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

$form = new Form_Left();

$form->setAction(LANG_URL.'user/left');

$model = new Model_User();

$EdieRow = $model->find($id)->current();

if ($this->_request->isPost() && $form->isValid($_POST)) {

$data = $form->getValues();

foreach ($data as $i => $v) {

if (is_null($data[$i]))

unset($data[$i]);

}

$res = $model->edit($id,($data));

if ($res) {

$this->_helper->flashMessenger

->addMessage('success')

->addMessage('Left Images Saved ');

$this->_redirect('user/left');

} else {

$this->view->msgtext = $this->view->translate('left.wrong' , LANG);

$this->view->msgtext = 'error';

}

}

if($EdieRow)

{

$form->populate($EdieRow->toArray());

}

$this->view->form = $form;

}



public function photohomepageAction() 

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

$form = new Form_Photohomepage();

$form->setAction(LANG_URL.'user/photohomepage');

$model = new Model_User();

$EdieRow = $model->find($id)->current();

if ($this->_request->isPost() && $form->isValid($_POST)) {

$data = $form->getValues();

foreach ($data as $i => $v) {

if (is_null($data[$i]))

unset($data[$i]);

}

$res = $model->edit($id,($data));

if ($res) {

$this->_helper->flashMessenger

->addMessage('success')

->addMessage('Images Saved ');

$this->_redirect('user/photohomepage');

} else {

$this->view->msgtext = $this->view->translate('left.wrong' , LANG);

$this->view->msgtext = 'error';

}

}

if($EdieRow)

{

$form->populate($EdieRow->toArray());

}

$this->view->form = $form;

}



public function frontAction() 

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

$form = new Form_Front();

$form->setAction(LANG_URL.'user/front');

$model = new Model_User();

$EdieRow = $model->find($id)->current();

if ($this->_request->isPost() && $form->isValid($_POST)) {

$data = $form->getValues();

foreach ($data as $i => $v) {

if (is_null($data[$i]))

unset($data[$i]);

}

$res = $model->edit($id,($data));

if ($res) {

$this->_helper->flashMessenger

->addMessage('success')

->addMessage('Front Images Saved ');

$this->_redirect('user/front');

} else {

$this->view->msgtext = $this->view->translate('front.wrong' , LANG);

$this->view->msgtext = 'error';

}

}

if($EdieRow)

{

$form->populate($EdieRow->toArray());

}

$this->view->form = $form;

}



public function wallAction() 

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

$form = new Form_Left();

$form->setAction(LANG_URL.'user/left');

$model = new Model_User();

$EdieRow = $model->find($id)->current();

if ($this->_request->isPost() && $form->isValid($_POST)) {

$data = $form->getValues();

foreach ($data as $i => $v) {

if (is_null($data[$i]))

unset($data[$i]);

}

$res = $model->edit($id,($data));

if ($res) {

$this->_helper->flashMessenger

->addMessage('success')

->addMessage('Left Images Saved ');

$this->_redirect('user/left');

} else {

$this->view->msgtext = $this->view->translate('left.wrong' , LANG);

$this->view->msgtext = 'error';

}

}

if($EdieRow)

{

$form->populate($EdieRow->toArray());

}

$this->view->form = $form;

}



public function pressAction()

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

$form = new Form_Press();

$form->setAction(LANG_URL.'user/press');

$model = new Model_User();

$EdieRow = $model->find($id)->current();

if ($this->_request->isPost() && $form->isValid($_POST)) {

$data = $form->getValues();

foreach ($data as $i => $v) {

if (is_null($data[$i]))

unset($data[$i]);

}

$res = $model->edit($id,($data));

if ($res) {

$this->_helper->flashMessenger

->addMessage('success')

->addMessage('Press Release  Saved ');

$this->_redirect('user/press');

} else {

$this->view->msgtext = $this->view->translate('press.wrong' , LANG);

$this->view->msgtext = 'error';

}

}

if($EdieRow)

{

$form->populate($EdieRow->toArray());

}

$this->view->form = $form;

}



public function securityAction()

{

$userInfo = Zend_Auth::getInstance()->getStorage()->read();

$this->view->userid = $userInfo->id;

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

$form = new Form_Security();

$form->setAction(LANG_URL.'user/security');

$model = new Model_User();

$EdieRow = $model->find($id)->current();

if ($this->_request->isPost() && $form->isValid($_POST)) {

$data = $form->getValues();

foreach ($data as $i => $v) {

if (is_null($data[$i]))

unset($data[$i]);

}

$res = $model->edit($id,($data));

if ($res) {

$this->_helper->flashMessenger

->addMessage('success')

->addMessage('Security  Saved ');

$this->_redirect('user/security');

} else {

$this->view->msgtext = $this->view->translate('press.wrong' , LANG);

$this->view->msgtext = 'error';

}

}

if($EdieRow)

{

$form->populate($EdieRow->toArray());

}

$this->view->form = $form;

}



public function awardsAction()

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

$form = new Form_Awards();

$form->setAction(LANG_URL.'user/awards');

$model = new Model_User();

$EdieRow = $model->find($id)->current();

if ($this->_request->isPost() && $form->isValid($_POST)) {

$data = $form->getValues();

foreach ($data as $i => $v) {

if (is_null($data[$i]))

unset($data[$i]);

}

$res = $model->edit($id,($data));

if ($res) {

$this->_helper->flashMessenger

->addMessage('success')

->addMessage('Awards  Saved ');

$this->_redirect('user/awards');

} else {

$this->view->msgtext = $this->view->translate('awards.wrong' , LANG);

$this->view->msgtext = 'error';

}

}

if($EdieRow)

{

$form->populate($EdieRow->toArray());

}

$this->view->form = $form;

}



public function forgetAction()

{

$model = new Model_PlusData(); $model->_name  = 'emailmessage';$where = array();

$where['id'] = '1'; 

$data = $model->selectForArray($where);

$Messforget = $data[0]->Messforget;     

$form = new Form_Forgetpassword(); 

$form->setAction(LANG_URL.'portal/forget');

if (isset($_POST['savegetpassword']) && $form->isValid($_POST)) {

$modelUser = new Model_UserPortal();

$IdData = $modelUser->getUserByEmail($form->getValue("email"));

if ($IdData->id ) {

$sendFunc = new Func_SendMail();

$to = $IdData->email;

$model = new Model_PlusData();

$model->_name  = "emailout";

$toppages = $model->selectForArray(array("id" => "1"), array( )  );

foreach($toppages as $index =>$item) { 

$emailheader =   str_replace("../../../../..","https://www.centralholidays.com", $item->emailheader);

$emailheaderstyle =  $item->style1;

$emailads =   str_replace("../../../../..","https://www.centralholidays.com", $item->emailads);

$emailadsstyle =  $item->style2;

$emailadstext =  $item->adstext;

$emailadsurl =  $item->adsurl;

$emailfooter =   str_replace("../../../../..","https://www.centralholidays.com", $item->emailfooter);

$subjectline =    $item->registeremailsubject ;

$currentyear =   date("Y") ;

} 

$model = new Model_PlusData();

$model->_name  = "emailoutforget";

$toppages = $model->selectForArray(array("id" => "1"), array( )  );

foreach($toppages as $index =>$item2) { 

$forgetpasswordemail =     str_replace("../../../../..","https://www.centralholidays.com", $item2->forgetpasswordemail);

if(trim($item2->icons)) {$icons = $item2->icons ; } 

else{

$icons = "bgwhite.jpg" ; 

};

$iconalign = $item2->iconalign;

$subjectline =    $item2->forgetpasswordsubject ;

$from2 =    $item2->from2 ;

} 

$message = '<div  style="text-align:' .$emailheaderstyle.'" ><img  src="https://www.centralholidays.com/MyUpload/' .$emailheader.' "  /></div><br/><div  style="text-align:' .$iconalign.'" ><img  src="https://www.centralholidays.com/MyUpload/' .$icons.'"/></div><br/>Dear <span style="font-weight:bold">' .  $IdData->firstname2 . ' ' .  $IdData->lastname2 . ',</span><br/><span style=""> ' .$forgetpasswordemail.' </span><br/><p style="text-align: left;margin-bottom: 30px;"> <a style="font-size: 16px;" target="_blank" href="https://www.centralholidays.com/portal/newpassword?email='.$IdData->email.'&code='.$IdData->code.'" >Reset your password here ...</a></p><br/><div  style="text-align:center" >'.$emailadstext.'</div><br/><div  style="text-align:' .$emailadsstyle.'" ><a href="'.$emailadsurl.'" ><img  src="https://www.centralholidays.com/MyUpload/' .$emailads.'"/></a></div><br><div style="text-align:center"> ' .$emailfooter.' </div><br><div style="text-align:center"> Copyright  <span style="">'.$currentyear.' </span> Central Holidays.com. All rights reserved. </div><div>

';

$title = $subjectline ;

$from = $from2; 

$sendFunc->SendMail($to, $title, $message, $from);

$this->view->message = $Messforget;

} else {

$this->view->message = 'WeÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã‚Â ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬ÃƒÂ¢Ã¢â‚¬Å¾Ã‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€šÃ‚Â ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¾Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã¢â‚¬Â¦Ãƒâ€šÃ‚Â¡ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€¦Ã‚Â¡ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã‚Â ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬ÃƒÂ¢Ã¢â‚¬Å¾Ã‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€¦Ã‚Â¡ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã¢â‚¬Â¦Ãƒâ€šÃ‚Â¡ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€šÃ‚Â¦ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¡ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã¢â‚¬Â¦Ãƒâ€šÃ‚Â¡ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€¦Ã‚Â¡ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã‚Â ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬ÃƒÂ¢Ã¢â‚¬Å¾Ã‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€¦Ã‚Â¡ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã¢â‚¬Â¦Ãƒâ€šÃ‚Â¡ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€šÃ‚Â¦ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¾ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã¢â‚¬Â¦Ãƒâ€šÃ‚Â¡ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€¦Ã‚Â¡ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢re sorry, we canÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã‚Â ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬ÃƒÂ¢Ã¢â‚¬Å¾Ã‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€šÃ‚Â ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¾Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã¢â‚¬Â¦Ãƒâ€šÃ‚Â¡ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€¦Ã‚Â¡ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã‚Â ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬ÃƒÂ¢Ã¢â‚¬Å¾Ã‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€¦Ã‚Â¡ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã¢â‚¬Â¦Ãƒâ€šÃ‚Â¡ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€šÃ‚Â¦ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¡ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã¢â‚¬Â¦Ãƒâ€šÃ‚Â¡ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€¦Ã‚Â¡ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã‚Â ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬ÃƒÂ¢Ã¢â‚¬Å¾Ã‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€¦Ã‚Â¡ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã¢â‚¬Â¦Ãƒâ€šÃ‚Â¡ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€šÃ‚Â¦ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¾ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã¢â‚¬Â¦Ãƒâ€šÃ‚Â¡ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€¦Ã‚Â¡ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢t find an account associated with that email.';

}

}

else if ($this->getRequest()->isPost() && !$form->isValid($_POST)) {

$this->view->message = ' ';

}

$this->view->form = $form;

}



public function newpasswordAction()

{

$form = new Form_Newpassword();

$form->setAction(LANG_URL.'portal/newpassword');

if (isset($_POST['savenewpassword']) && $form->isValid($_POST)) {

$data = $form->getValues();

$model = new Model_PlusData();

$model->_name  = 'usersPortal';

$toppages = $model->selectForArray(array('email' => $data['email']), array('displayorder' => 'ASC') ,1 );

foreach($toppages as $index =>$item){

$item->password =  md5($data['password']);

$item->confirm_password = $data['confirm_password'];

$item->save();

$this->view->message = 'Password Rest DONE';

$this->_redirect('portal/login');

}

}

$this->view->form = $form;

}



public function resendAction()

{

$model = new Model_PlusData(); $model->_name  = 'emailmessage';$where = array();

$where['id'] = '1'; 

$data = $model->selectForArray($where);

$Messactive = $data[0]->Messactive;

$formresend = new Form_Resend(); 

$formresend->setAction(LANG_URL.'user/resend');

if (isset($_POST['resendsave']) && $formresend->isValid($_POST)) {

$modelUser = new Model_UserPortal();

$IdData = $modelUser->getUserByEmail($formresend->getValue("email"));

if ($IdData->id ) {

$sendFunc = new Func_SendMail();

$to = $IdData->email;

$registeremailww= $IdData->email;

$model = new Model_PlusData();

$model->_name  = "emailout";

$toppages = $model->selectForArray(array("id" => "1"), array( )  );

foreach($toppages as $index =>$item) { 
if($item->emailheader != ' '){
$emailheader =   str_replace("../../../../..","https://www.centralholidays.com", $item->emailheader);
}
else{
$emailheader = 'onepixelwhite.jpg';
}
$emailheaderstyle =  $item->style1;

$emailads =   str_replace("../../../../..","https://www.centralholidays.com", $item->emailads);

$emailadsstyle =  $item->style2;

$emailadstext =  $item->adstext;

$emailadsurl =  $item->adsurl;

$emailfooter =   str_replace("../../../../..","https://www.centralholidays.com", $item->emailfooter);

$subjectline =    $item->registeremailsubject ;

$currentyear =   date("Y") ;

} 

$model = new Model_PlusData();

$model->_name  = "emailoutreg";

$toppages = $model->selectForArray(array("id" => "1"), array( )  );

foreach($toppages as $index =>$item2) { 

$registeremail =   str_replace("../../../../..","https://www.centralholidays.com", $item2->registeremail);

$icons = $item2->icons;

$iconalign = $item2->iconalign;

$subjectline =    $item2->registeremailsubject ;

$from2 =    $item2->from2 ;

} 

$message = '

<div style="line-height:  " >

<div  style="text-align:' .$emailheaderstyle.'" ><img  src="https://www.centralholidays.com/MyUpload/' .$emailheader.' "  /></div><br/><div  style="text-align:' .$iconalign.'" ><img  src="https://www.centralholidays.com/MyUpload/' .$icons.'"/></div><p style="text-align: center;margin-bottom: 30px;"> <a style="font-size: 18px;background:#df1b23;color: #fff;text-decoration: none;padding: 10px;" target="_blank" href="https://www.centralholidays.com/portal/confirm?email='.$IdData->email.'&code='.$IdData->code.'" >Verify Email Address</a></p><br><div  style="text-align:center" >'.$emailadstext.'</div><br/><div  style="text-align:' .$emailadsstyle.'" ><a href="'.$emailadsurl.'" ><img  src="https://www.centralholidays.com/MyUpload/' 

.$emailads.'"/></a></div><br><div style="text-align:center"> ' .$emailfooter.' </div><br><div style="text-align:ce

nter"> Copyright <span style="">'.$currentyear.' </span> Central Holidays. All rights reserved. </div><div>

';

$title = $subjectline ;

$from = $from2; 

$sendFunc->SendMail($to, $title, $message, $from);

$this->view->message = $Messactive;

$formresend ->reset();

} else {

$this->view->message = 'Not find an account associated with that email.';

}

}

else if ($this->getRequest()->isPost() && !$formresend->isValid($_POST)) {

$this->view->message = ' ';

}

$this->view->form = $formresend;

}





public function completregisterAction()

{

$auth = Zend_Auth::getInstance();

if($auth->hasIdentity())

{

$identity = $auth->getIdentity();

$id = strtolower($identity->id);

}

else

{

$this->_forward('login');

$id='';

}

$form = new Form_Usersportal();

$form->setAction(LANG_URL.'portal/completregister');

$model = new Model_UserPortal();

$EdieRow = $model->find($id)->current();

$useremail = $EdieRow['email'];

$this->view->useremail = $useremail;

if (isset($_POST['save2']) && $form->isValid($_POST)) {

$data = $form->getValues();

$res = $model->edit44($id,($data));

$modelx = new Model_PlusData(); $modelx->_name  = 'emailmessage';$wherex = array();
$wherex['id'] = '1'; 
$datax = $modelx->selectForArray($wherex);
$Messcomplet = $datax[0]->Messcompletprofile;

if ($res) {

$this->view->messageVi =  $Messcomplet.'<a href="https://www.centralholidays.com/portal/dashboard" > Click here to go to your Dashboard </a> ';

} else {

$this->view->msgtext = $this->view->translate('profile.wrong' , LANG);

$this->view->msgtext = 'error';

}

}

}



















public function profileAction()

{

$auth = Zend_Auth::getInstance();

if($auth->hasIdentity())

{

$identity = $auth->getIdentity();

$id = strtolower($identity->id);

}

else

{

$this->_forward('login');

$id='';

}

$form = new Form_Usersportal();

$form->setAction(LANG_URL.'portal/profile');

$model = new Model_UserPortal();

$EdieRow = $model->find($id)->current();

$useremail = $EdieRow['email'];

$idid = $EdieRow['id'];

$this->view->useremail = $useremail;

if (isset($_POST['save2']) && $form->isValid($_POST)) {

$data = $form->getValues();

$res = $model->edit44($id,($data));

if ($res) {

$this->view->messageVi =  'Update Complet';

} else {

$this->view->msgtext = $this->view->translate('profile.wrong' , LANG);

$this->view->msgtext = 'error';

}

  

}

  $this->view->form = $form;

}









public function listingsAction()

{

$userInfo = Zend_Auth::getInstance()->getStorage()->read();

$this->view->userid = $userInfo->id;;

$this->view->firstname = $userInfo->firstname2;

$this->view->lastname = $userInfo->lastname2;

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

$model = new Model_PlusData();

$model->_name = 'items';

$select = $model->select();

$select->setIntegrityCheck(false);

$select->from($model->_name);

$select->joinLeft(array('ca' => 'cat'), 'ca.id = items.catid', array('ca.title AS category'), null);

$select->where('items.user_id = ?', $id);

if($this->_getParam('category'))

$select->where('items.catid = ?', $this->_getParam('category'));

if($this->_getParam('type'))

$select->where('items.type = ?', $this->_getParam('type'));

if($this->_getParam('minimum'))

$select->where('items.price >= ?', $this->_getParam('minimum'));

if($this->_getParam('maximum'))

$select->where('items.price <= ?', $this->_getParam('maximum'));

$adapter = new Zend_Paginator_Adapter_DbTableSelect($select);

$paginator = new Zend_Paginator($adapter);

$paginator->setItemCountPerPage(100000);

$page = $this->_request->getParam('page', 1);

$paginator->setCurrentPageNumber($page);

$this->view->paginator = $paginator;

}



public function inboxAction()

{

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

if($this->_getParam('city'))

$select->where('items.city_id = ?', $this->_getParam('city'));

if($this->_getParam('region'))

$select->where('items.region_id = ?', $this->_getParam('region'));

if($this->_getParam('category'))

$select->where('items.catid = ?', $this->_getParam('category'));

if($this->_getParam('type'))

$select->where('items.type = ?', $this->_getParam('type'));

if($this->_getParam('minimum'))

$select->where('items.price >= ?', $this->_getParam('minimum'));

if($this->_getParam('maximum'))

$select->where('items.price <= ?', $this->_getParam('maximum'));

$adapter = new Zend_Paginator_Adapter_DbTableSelect($select);

$paginator = new Zend_Paginator($adapter);

$paginator->setItemCountPerPage(12);

$page = $this->_request->getParam('page', 1);

$paginator->setCurrentPageNumber($page);

$this->view->paginator = $paginator;

}

}



