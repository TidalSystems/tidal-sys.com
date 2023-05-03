<?php

class ReqController extends Zend_Controller_Action {

    public function vAction() {
        $is_ajax = isset($_GET['is_ajax']);

        $id = intval($this->_request->getParam('i'));
        $model = new Model_PlusData();
        $model->_name = 'items';
        $this->view->item = $model->find($id)->current();
        if (!$this->view->item)
            exit;

        $model = new Model_PlusData();
        $model->_name = 'requests';
        $form = new Form_Request();
        $_POST['itemid'] = $id;
        if ($this->getRequest()->isPost() && $form->isValid($_POST)) {
            $data = $form->getValues();
            $data['itemid'] = $id;
            $data['created_on'] = date('Y-m-d H:i:s');
            $data['status'] = 'حديثة';
            $res = $model->InsertRow(array_filter($data));
            if ($is_ajax) {
                echo json_encode(array('success' => TRUE, 'message' => (constant('LANG') == 'ar' ? 'تم الإرسال بنجاح' : 'We received your contact, and will reply soon.')));
                exit;
            } else {
                $this->_helper->flashMessenger
                        ->addMessage('success')
                        ->addMessage('تم الإرسال.');
                $this->_redirect('item/v/i/' . $id);
            }
        } elseif ($this->getRequest()->isPost() && !$form->isValid($_POST)) {
            $error = array();
            $validMail = new Zend_Validate_EmailAddress();

            if (!$_POST['email']) {
                $error['email'] = array(constant('LANG') == 'ar' ? 'املأ البريد الإلكتروني' : 'Email field is required.');
            } elseif (!$validMail->isValid($_POST['email'])) {
                $error['email'] = array(constant('LANG') == 'ar' ? 'البريد الإلكتروني غير سليم' : 'Invalid Email.');
            }

            if (!$_POST['name'])
                $error['name'] = array(constant('LANG') == 'ar' ? 'الإسم مطلوب' : 'Name field is required.');

            if (!$_POST['phone'])
                $error['phone'] = array(constant('LANG') == 'ar' ? 'التليفون مطلوب' : 'Phone field is required.');

            if (!$_POST['amount'])
                $error['amount'] = array(constant('LANG') == 'ar' ? 'الكمية مطلوبة' : 'Amount field is required.');


            if ($is_ajax) {
                echo json_encode(array('success' => FALSE, 'error' => ($error ? $error : (constant('LANG') == 'ar' ? 'جميع الحقول مطلوبة' : 'All fields are required'))));
                exit;
            } else {
                $this->_helper->flashMessenger
                        ->addMessage('error')
                        ->addMessage(constant('LANG') == 'ar' ? 'من فضلك تأكد من البيانات المدخلة' : 'All fields are required');
                $this->_redirect($_SERVER['HTTP_REFERER']);
            }
        }

        $model = new Model_PlusData();
        $model->_name = 'cat';
        $this->view->CatData = $model->find($this->view->item->catid)->current();
    }

}
