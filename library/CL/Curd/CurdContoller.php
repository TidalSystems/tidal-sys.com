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







	







	







	       public function UpdateNumView($id) {







        $row = $this->find($id)->current();







        if ($row) {







            $result = $row->toArray();







        }







        $oldNum = $result['numviews'];







        if ($row) {







            $row->numviews = $oldNum + 1;







            $row->save();







            return $result;







        }







    }



























 protected function indexlogsAction()







    {



 



        $this->view->listValue = $this->listValue;







        $model = $this->dbmodelClass;







        $adapter = $model->selectForPager($this->selectOptions, 'timedate DESC' );











        $paginator = new Zend_Paginator($adapter);







        $paginator->setItemCountPerPage(100);







        $page = $this->_request->getParam('page', 1);







        $paginator->setCurrentPageNumber($page);







        $this->view->paginator = $paginator;







        $this->view->contName = $this->_request->getControllerName();







        $this->render('indexlogs', null, true);







    }











    protected function indexAction()











    {



        $form2 = new Form_Socialiconscode();



        $this->dbmodelClass2 = new Model_PlusData();



        $this->dbmodelClass2->_name = 'socialiconscode';



        $model2 = $this->dbmodelClass2;



 



       $this->view->form2 = $form2;



 



 if (isset($_POST['save2']) &&  $form2->isValid($_POST)   ) {



            $data2 = $form2->getValues();



            



            $res2 = $model2->edit('1', $data2);  



  $this->_helper->flashMessenger



                    ->addMessage('success')



                    ->addMessage('Save Done');



    $this->_redirect('admin/' . $this->_request->getControllerName() . '/index/');     



} 















 if (isset($_POST['save3']) &&  $form2->isValid($_POST)   ) {



            $data3 = $form2->getValues();



            



            $res3 = $model2->edit('2', $data3);  



  $this->_helper->flashMessenger



                    ->addMessage('success')



                    ->addMessage('Save Done');



    $this->_redirect('admin/' . $this->_request->getControllerName() . '/index/');     



} 







 







        if($this->getRequest()->isPost()) {







            $this->sortOrder();











            exit;







        }







        $this->view->listValue = $this->listValue;







        $model = $this->dbmodelClass;



if ($this->dbmodelClass->_name == 'ip' ){



        $adapter = $model->selectForPager($this->selectOptions, 'name asc');



}



elseif ( $this->dbmodelClass->_name == 'departments'){
        $adapter = $model->selectForPager($this->selectOptions, 'DepName asc');

}


elseif ( $this->dbmodelClass->_name == 'articles'){
        $adapter = $model->selectForPager($this->selectOptions, 'datepicker desc');

}


elseif ( $this->dbmodelClass->_name == 'news'){
        $adapter = $model->selectForPager($this->selectOptions, 'datepicker desc');

}






elseif ( $this->dbmodelClass->_name == 'logs'){



        $adapter = $model->selectForPager($this->selectOptions, 'id DESC');



}







elseif ( $this->dbmodelClass->_name == '3dparty'){



        $adapter = $model->selectForPager($this->selectOptions, 'title asc');



}







elseif ( $this->dbmodelClass->_name == 'cars_groups'){



        $adapter = $model->selectForPager($this->selectOptions, 'Country asc');



}







 elseif ( $this->dbmodelClass->_name == 'hotels'){



        $adapter = $model->selectForPager($this->selectOptions, 'countryid asc');



}







 elseif ( $this->dbmodelClass->_name == 'cars'){



        $adapter = $model->selectForPager($this->selectOptions, 'Country DESC');



}







  elseif ( $this->dbmodelClass->_name == 'testmonial'){



        $adapter = $model->selectForPager($this->selectOptions, 'datepicker DESC');



}







  elseif ( $this->dbmodelClass->_name == 'tags'){



        $adapter = $model->selectForPager($this->selectOptions, 'countryid DESC');



}



 elseif ( $this->dbmodelClass->_name == 'articles'){



        $adapter = $model->selectForPager($this->selectOptions, 'displayorder DESC');



}



 elseif ( $this->dbmodelClass->_name == 'stores'){



        $adapter = $model->selectForPager($this->selectOptions, 'AgencyName asc');



}



elseif ( $this->dbmodelClass->_name == 'media_coverage'){



        $adapter = $model->selectForPager($this->selectOptions, 'Date_ DESC');



}







elseif ( $this->dbmodelClass->_name == 'press'){



        $adapter = $model->selectForPager($this->selectOptions, 'MDate DESC');



}



elseif ( $this->dbmodelClass->_name == 'news_letters'){



        $adapter = $model->selectForPager($this->selectOptions, 'Date_ DESC');



}







else{



        $adapter = $model->selectForPager($this->selectOptions, 'displayorder asc');



}







        $paginator = new Zend_Paginator($adapter);







        $paginator->setItemCountPerPage(10000);







        $page = $this->_request->getParam('page', 1);







        $paginator->setCurrentPageNumber($page);







        $this->view->paginator = $paginator;







        $this->view->contName = $this->_request->getControllerName();







        $this->render('index', null, true);











 



 



    }















 protected function indexitemAction()







    {







        if($this->getRequest()->isPost()) {







            $this->sortOrder();







            exit;







        }







        $this->view->listValue = $this->listValue;







        $model = $this->dbmodelClass;







        $adapter = $model->selectForPager($this->selectOptions, 'displayorder asc');







        $paginator = new Zend_Paginator($adapter);







        $paginator->setItemCountPerPage(100);







        $page = $this->_request->getParam('page', 1);







        $paginator->setCurrentPageNumber($page);







        $this->view->paginator = $paginator;







        $this->view->contName = $this->_request->getControllerName();







        $this->render('indexitem', null, true);







    }



















 protected function indexmenuAction()







    {



 



        $this->view->listValue = $this->listValue;







        $model = $this->dbmodelClass;







        $adapter = $model->selectForPager($this->selectOptions, 'Name DESC' );











        $paginator = new Zend_Paginator($adapter);







        $paginator->setItemCountPerPage(100);







        $page = $this->_request->getParam('page', 1);







        $paginator->setCurrentPageNumber($page);







        $this->view->paginator = $paginator;







        $this->view->contName = $this->_request->getControllerName();







        $this->render('indexmenu', null, true);







    }







 protected function indexitemexAction()







    {







        if($this->getRequest()->isPost()) {







            $this->sortOrder();







            exit;







        }







        $this->view->listValue = $this->listValue;







        $model = $this->dbmodelClass;







        $adapter = $model->selectForPager($this->selectOptions, 'displayorder asc');







        $paginator = new Zend_Paginator($adapter);







        $paginator->setItemCountPerPage(100);







        $page = $this->_request->getParam('page', 1);







        $paginator->setCurrentPageNumber($page);







        $this->view->paginator = $paginator;







        $this->view->contName = $this->_request->getControllerName();







        $this->render('indexitemex', null, true);







    }























 protected function indexcityAction()







    {







        if($this->getRequest()->isPost()) {







            $this->sortOrder();







            exit;







        }







        $this->view->listValue = $this->listValue;







        $model = $this->dbmodelClass;







        $adapter = $model->selectForPager($this->selectOptions, 'displayorder asc');







        $paginator = new Zend_Paginator($adapter);







        $paginator->setItemCountPerPage(100);







        $page = $this->_request->getParam('page', 1);







        $paginator->setCurrentPageNumber($page);







        $this->view->paginator = $paginator;







        $this->view->contName = $this->_request->getControllerName();







        $this->render('indexcity', null, true);







    }



























 protected function indexitemsearchAction()







    {







        if($this->getRequest()->isPost()) {







            $this->sortOrder();







            exit;







        }







        $this->view->listValue = $this->listValue;







        $model = $this->dbmodelClass;







        $adapter = $model->selectForPager($this->selectOptions, 'displayorder asc');







        $paginator = new Zend_Paginator($adapter);







        $paginator->setItemCountPerPage(100);







        $page = $this->_request->getParam('page', 1);







        $paginator->setCurrentPageNumber($page);







        $this->view->paginator = $paginator;







        $this->view->contName = $this->_request->getControllerName();







        $this->render('indexitemsearch', null, true);







    }



















 protected function indexitemexsearchAction()







    {







        if($this->getRequest()->isPost()) {







            $this->sortOrder();







            exit;







        }







        $this->view->listValue = $this->listValue;







        $model = $this->dbmodelClass;







        $adapter = $model->selectForPager($this->selectOptions, 'displayorder asc');







        $paginator = new Zend_Paginator($adapter);







        $paginator->setItemCountPerPage(100);







        $page = $this->_request->getParam('page', 1);







        $paginator->setCurrentPageNumber($page);







        $this->view->paginator = $paginator;







        $this->view->contName = $this->_request->getControllerName();







        $this->render('indexitemexsearch', null, true);







    }







 protected function indexsearchAction()







    {







        if($this->getRequest()->isPost()) {







            $this->sortOrder();







            exit;







        }







        $this->view->listValue = $this->listValue;







        $model = $this->dbmodelClass;







        $adapter = $model->selectForPager($this->selectOptions, 'displayorder asc');







        $paginator = new Zend_Paginator($adapter);







        $paginator->setItemCountPerPage(100);







        $page = $this->_request->getParam('page', 1);







        $paginator->setCurrentPageNumber($page);







        $this->view->paginator = $paginator;







        $this->view->contName = $this->_request->getControllerName();







        $this->render('indexsearch', null, true);







    }



























 protected function indexitem7Action()







    {







        if($this->getRequest()->isPost()) {







            $this->sortOrder();







            exit;







        }







        $this->view->listValue = $this->listValue;







        $model = $this->dbmodelClass;







        $adapter = $model->selectForPager($this->selectOptions, 'displayorder asc');







        $paginator = new Zend_Paginator($adapter);







        $paginator->setItemCountPerPage(100);







        $page = $this->_request->getParam('page', 1);







        $paginator->setCurrentPageNumber($page);







        $this->view->paginator = $paginator;







        $this->view->contName = $this->_request->getControllerName();







        $this->render('indexitem7', null, true);







    }















 protected function indexitem7searchAction()







    {







        if($this->getRequest()->isPost()) {







            $this->sortOrder();







            exit;







        }







        $this->view->listValue = $this->listValue;







        $model = $this->dbmodelClass;







        $adapter = $model->selectForPager($this->selectOptions, 'displayorder asc');







        $paginator = new Zend_Paginator($adapter);







        $paginator->setItemCountPerPage(100);







        $page = $this->_request->getParam('page', 1);







        $paginator->setCurrentPageNumber($page);







        $this->view->paginator = $paginator;







        $this->view->contName = $this->_request->getControllerName();







        $this->render('indexitem7search', null, true);







    }











	



    protected function index2Action()







    {







        if($this->getRequest()->isPost()) {







            $this->sortOrder();







            exit;







        }







        $this->view->listValue = $this->listValue;







        $model = $this->dbmodelClass;







        $adapter = $model->selectForPager($this->selectOptions, 'displayorder asc');







        $paginator = new Zend_Paginator($adapter);







        $paginator->setItemCountPerPage(100);







        $page = $this->_request->getParam('page', 1);







        $paginator->setCurrentPageNumber($page);







        $this->view->paginator = $paginator;







        $this->view->contName = $this->_request->getControllerName();







        $this->render('index2', null, true);







    }































 protected function indexpageAction()







    {







        if($this->getRequest()->isPost()) {







            $this->sortOrder();







            exit;







        }







        $this->view->listValue = $this->listValue;







        $model = $this->dbmodelClass;







        $adapter = $model->selectForPager(array('level' => '1') , 'displayorder asc');







        $paginator = new Zend_Paginator($adapter);







        $paginator->setItemCountPerPage(100);







        $page = $this->_request->getParam('page', 1);







        $paginator->setCurrentPageNumber($page);







        $this->view->paginator = $paginator;







        $this->view->contName = $this->_request->getControllerName();







        $this->render('indexpage', null, true);







    }























 protected function indexinternalpageAction()







    {







        if($this->getRequest()->isPost()) {







            $this->sortOrder();







            exit;







        }







        $this->view->listValue = $this->listValue;







        $model = $this->dbmodelClass;







           $adapter = $model->selectForPager($this->selectOptions, 'displayorder asc');







        $paginator = new Zend_Paginator($adapter);







        $paginator->setItemCountPerPage(100);







        $page = $this->_request->getParam('page', 1);







        $paginator->setCurrentPageNumber($page);







        $this->view->paginator = $paginator;







        $this->view->contName = $this->_request->getControllerName();







        $this->render('indexinternalpage', null, true);







    }















 protected function indexrequestsAction()







    {







        if($this->getRequest()->isPost()) {







            $this->sortOrder();







            exit;







        }







        $this->view->listValue = $this->listValue;







        $model = $this->dbmodelClass;







           $adapter = $model->selectForPager($this->selectOptions, 'displayorder asc');







        $paginator = new Zend_Paginator($adapter);







        $paginator->setItemCountPerPage(100);







        $page = $this->_request->getParam('page', 1);







        $paginator->setCurrentPageNumber($page);







        $this->view->paginator = $paginator;







        $this->view->contName = $this->_request->getControllerName();







        $this->render('indexrequests', null, true);







    }































    protected function createAction()







    {



        $form = $this->formClass;

        $model = $this->dbmodelClass;

        $tablename= $this->dbmodelClass->_name ; 

        $this->view->contName = $this->_request->getControllerName();



        if ($this->getRequest()->isPost() && $form->isValid($_POST)) {

            $data = $form->getValues();

            foreach ($data as $i => $v) {

                if (is_null($data[$i]))

                    unset($data[$i]);

            }





            $res = $model->InsertRow(($data));

            if ($res = true) {

$lastID = $model->getAdapter()->lastInsertId();

$title = $data['title'];

                $this->_helper->flashMessenger

                    ->addMessage('success')

                    ->addMessage('Save Done');



if($this->view->contName == 'Products'){

$catid=  $this->_request->getParam('catid');

$this->_redirect('admin/' . $this->_request->getControllerName() . '/index?catid='.$catid);

}



else{

  $this->_redirect('admin/' . $this->_request->getControllerName() .'/index');

}



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



























    protected function createlpAction()







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







            if ($res = true) {







                $this->_helper->flashMessenger







                    ->addMessage('success')







                    ->addMessage('Save Done');







                $this->_redirect('admin/Landingpage/edit/id/'. $_GET['landingid'] .'?id='.$_GET['landingid']);







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

























  protected function createlp2Action()

    {

        $form = $this->formClass;

        $model = $this->dbmodelClass;

$branche =$_GET["branche"];

        if ($this->getRequest()->isPost() && $form->isValid($_POST)) {

            $data = $form->getValues();

            foreach ($data as $i => $v) {

                if (is_null($data[$i]))

                    unset($data[$i]);

            }

            $res = $model->InsertRow(($data));

            if ($res = true) {

                $this->_helper->flashMessenger

                    ->addMessage('success')

                    ->addMessage('save complete successfully');
if($branche == 'cat' ){
                $this->_redirect('admin/Servicescategories/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche']);
}

if($branche == 'subcat' ){
                $this->_redirect('admin/Servicessubcategories/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche'].'&catid='.$_GET['catid']);
}

if($branche == 'services' ){
                $this->_redirect('admin/Servicescategories/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche'].'&catid='.$_GET['catid']);
}

if($branche == 'page' ){
                $this->_redirect('admin/Pages/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche']);
}
 
if($branche == 'landing' ){
                $this->_redirect('admin/landingpage/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche'].'&catid='.$_GET['catid']);
}
if($branche == 'blogs' ){
                $this->_redirect('admin/Blogs/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche'].'&catid='.$_GET['catid']);
}
 

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


 protected function createlp3Action()







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







            if ($res = true) {







                $this->_helper->flashMessenger







                    ->addMessage('success')







                    ->addMessage('Save Done');




 
$this->_redirect('admin/Servicescategories/edit/id/'.$_GET["pageid"].'?id='.$_GET["pageid"] );






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



















    protected function createmenuAction()







    {







        $form = $this->formClass;







        $model = $this->dbmodelClass;



   $restaurantID = intval($this->_request->getParam('restaurantID'));



        if ($this->getRequest()->isPost() && $form->isValid($_POST)) {







            $data = $form->getValues();







            foreach ($data as $i => $v) {







                if (is_null($data[$i]))







                    unset($data[$i]);







            }







            $res = $model->InsertRow(($data));







            if ($res = true) {







                $this->_helper->flashMessenger







                    ->addMessage('success')







                    ->addMessage('Save Done');







                $this->_redirect('admin/' . $this->_request->getControllerName() . '/indexmenu?restaurantID='.$restaurantID);







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



















 protected function createpageAction()







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







                $this->_redirect('admin/' . $this->_request->getControllerName() . '/indexpage/');







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















 



















 protected function createitemAction()







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







                $this->_redirect('admin/index2');







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







        $this->render('createitem', null, true);







    }



























 protected function createitemexAction()







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







                $this->_redirect('admin/index2ex');







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







        $this->render('createitemex', null, true);







    }















 



 protected function createitem7Action()







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







                $this->_redirect('admin/index7');







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







        $this->render('createitem7', null, true);







    }















 protected function createitem3Action()







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







                $this->_redirect('admin/items3');







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







        $this->render('createitem3', null, true);







    }































 protected function createitem5Action()







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







                $this->_redirect('admin/items5');







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







        $this->render('createitem5', null, true);







    }



























 











 protected function createitem4Action()







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







                $this->_redirect('admin/items4');







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







        $this->render('createitem4', null, true);







    }



























 protected function createinternalpageAction()







    {



if($this->_request->getParam('serv'))



$serv2=  $this->_request->getParam('serv');



 $this->view->serv2 =  $this->_request->getParam('serv'); 



  















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







                $this->_redirect('admin/' . $this->_request->getControllerName() . '/indexinternalpage/serv/'. $serv2);







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







        $this->render('createinternalpage', null, true);







    }























































 protected function createblockAction()







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







        $this->render('createblock', null, true);







    }















    protected function editAction()







    {







  Zend_Registry::set('application', new Zend_Config_Ini(APPLICATION_PATH.'/configs/application.ini', 'production'));







             $config = Zend_Registry::get('application');



             $username =  $config->resources->db->params->username ;



             $password =  $config->resources->db->params->password ;



             $dbname =  $config->resources->db->params->dbname ;



             $conn=new mysqli("localhost",$username,$password ,$dbname );







        $model = $this->dbmodelClass;



 $tablename= $this->dbmodelClass->_name ; 



        $id = intval($this->_request->getParam('id'));



  $this->view->contName = $this->_request->getControllerName();







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











$title = $data['title'];











 foreach ($_FILES["pic2"]["error"] as $key => $error)



        {







            if ($error == UPLOAD_ERR_OK)



            {



                $extension = pathinfo($_FILES['pic2']['name'][$key]);



                $extension = $extension["extension"];



                $mydate=date("mdYHis");



                $mydate=$mydate."".$key;



                $mykey=$key;



                $_FILES['pic2']['name'][$key]=str_replace (" ", "_", $_FILES['pic2']['name'][$key]);



                $_FILES['pic2']['name'][$key]=str_replace ("%20", "_", $_FILES['pic2']['name'][$key]);



                $_FILES['pic2']['name'][$key]= $mydate."".$_FILES['pic2']['name'][$key];



                $name = $_FILES["pic2"]["name"][$key];



                $tmp_name = $_FILES["pic2"]["tmp_name"][$key];



                $path =APPLICATION_PATH . '/../MyUpload/';



                  Zend_Registry::set('application', new Zend_Config_Ini(APPLICATION_PATH.'/configs/application.ini', 'production'));



             $config = Zend_Registry::get('application');



             $username =  $config->resources->db->params->username ;



             $password =  $config->resources->db->params->password ;



             $dbname =  $config->resources->db->params->dbname ;



             $conn=new mysqli("localhost",$username,$password ,$dbname );



                mysqli_set_charset($conn,"utf8");



                if( move_uploaded_file($tmp_name,  "$path/$name"))



                {



                    $conn->query("insert into magazine_imgs (Destination,Img) values ( ".$id." , '".$name."' ) ");



                    $name="";



                }











            }



        }



 



           



















 foreach ($_FILES["pic2hotel"]["error"] as $key => $error)



        {







            if ($error == UPLOAD_ERR_OK)



            {



                $extension = pathinfo($_FILES['pic2hotel']['name'][$key]);



                $extension = $extension["extension"];



                $mydate=date("mdYHis");



                $mydate=$mydate."".$key;



                $mykey=$key;



                $_FILES['pic2hotel']['name'][$key]=str_replace (" ", "_", $_FILES['pic2hotel']['name'][$key]);



                $_FILES['pic2hotel']['name'][$key]=str_replace ("%20", "_", $_FILES['pic2hotel']['name'][$key]);



                $_FILES['pic2hotel']['name'][$key]= $mydate."".$_FILES['pic2hotel']['name'][$key];



                $name = $_FILES["pic2hotel"]["name"][$key];



                $tmp_name = $_FILES["pic2hotel"]["tmp_name"][$key];



                $path =APPLICATION_PATH . '/../MyUpload/';



                  Zend_Registry::set('application', new Zend_Config_Ini(APPLICATION_PATH.'/configs/application.ini', 'production'));







             $config = Zend_Registry::get('application');



             $username =  $config->resources->db->params->username ;



             $password =  $config->resources->db->params->password ;



             $dbname =  $config->resources->db->params->dbname ;



             $conn=new mysqli("localhost",$username,$password ,$dbname );



                if( move_uploaded_file($tmp_name,  "$path/$name"))



                {



                    $conn->query("insert into hotels_imgs (Hotel,Img) values ( ".$id." , '".$name."' ) ");



                    $name="";



                }











            }



        }



















 







 foreach ($_FILES["pic2gallery"]["error"] as $key => $error)



        {







            if ($error == UPLOAD_ERR_OK)



            {



                $extension = pathinfo($_FILES['pic2gallery']['name'][$key]);



                $extension = $extension["extension"];



                $mydate=date("mdYHis");



                $mydate=$mydate."".$key;



                $mykey=$key;



                $_FILES['pic2gallery']['name'][$key]=str_replace (" ", "_", $_FILES['pic2gallery']['name'][$key]);



                $_FILES['pic2gallery']['name'][$key]=str_replace ("%20", "_", $_FILES['pic2gallery']['name'][$key]);



                $_FILES['pic2gallery']['name'][$key]= $mydate."".$_FILES['pic2gallery']['name'][$key];



                $name = $_FILES["pic2gallery"]["name"][$key];



                $tmp_name = $_FILES["pic2gallery"]["tmp_name"][$key];



                $path =APPLICATION_PATH . '/../MyUpload/';



                  Zend_Registry::set('application', new Zend_Config_Ini(APPLICATION_PATH.'/configs/application.ini', 'production'));







             $config = Zend_Registry::get('application');



             $username =  $config->resources->db->params->username ;



             $password =  $config->resources->db->params->password ;



             $dbname =  $config->resources->db->params->dbname ;



             $conn=new mysqli("localhost",$username,$password ,$dbname );



                if( move_uploaded_file($tmp_name,  "$path/$name"))



                {



                    $conn->query("insert into gallery_imgs (Idgallery,Img) values ( ".$id." , '".$name."' ) ");



                    $name="";



                }











            }



        }











            $res = $model->edit($id, $data);







            if ($res) {



 











            $res = $model->edit($id, $data);



$this->session = new Zend_Session_Namespace('Default');



$request = Zend_Controller_Front::getInstance()->getRequest()->getRequestUri();



 $auth = Zend_Auth::getInstance();



        if($auth->hasIdentity()) {



$userInfo = Zend_Auth::getInstance()->getStorage()->read();



 $userid =  $userInfo->id;



}  











        



        $this->dbmodelClass2 = new Model_PlusData();



        $this->dbmodelClass2->_name = 'users';



        $model2 = $this->dbmodelClass2;







  						                                       



			 $toppages2item = $model2->selectForArray(array('id' => $userid ), array('displayorder' => 'ASC')  );



								foreach($toppages2item as $toppage2items){ 



$userfullname= $toppage2items->firstname.' '.$toppage2items->lastname ;



$date1= date("Y/m/d");



$time1=date("h:i:s");



		 	 



}







  







 $sql="INSERT INTO  logs (action,user,userid,actiondetails,tablename,createdate,createtime) VALUES ('Edit', '$userfullname' , '$userid' , ' <spam style=color:red> $title</spam> ' , '$tablename' , '$date1' , '$time1' ) ";



if ($conn->query($sql) === TRUE) {



    echo "New record created successfully";



} else {



    echo "Error: " . $sql . "<br>" . $conn->error;



};







 







for($i=0;$i<count($_POST["myspan"]);$i++)



			{



				$counter=$i+1;



              $alt = mysqli_real_escape_string($conn, $_POST['alt'][$i]);



              $alt2 = mysqli_real_escape_string($conn, $_POST['alt2'][$i]);



				$conn->query("update magazine_imgs set DisplayOrderGal=".$counter." , Alt='".$alt."' , Alt2='".$alt2."' where Id=".$_POST["myspan"][$i]);



             }











mysqli_set_charset($conn,"utf8");



for($i=0;$i<count($_POST["myspan"]);$i++)



			{







				$counter=$i+1;



				$conn->query("update regions_imgs set displayorder=".$counter." where Id=".$_POST["myspan"][$i]);



    }















for($i=0;$i<count($_POST["myspanip"]);$i++)



			{



				$counter=$i+1;



				$conn->query("update LandingPageSections set displayorder=".$counter." where id=".$_POST["myspanip"][$i]);



    }















for($i=0;$i<count($_POST["myspanipPa"]);$i++)



			{



				$counter=$i+1;



				$conn->query("update PageSections set displayorder=".$counter." where id=".$_POST["myspanipPa"][$i]);



    }















for($i=0;$i<count($_POST["myspanhotel"]);$i++)



			{



				$counter=$i+1;



     $alt = mysqli_real_escape_string($conn, $_POST['alt'][$i]);



			  



              $conn->query("update hotels_imgs set displayorder=".$counter." , Alt='".$alt."' where Id=".$_POST["myspanhotel"][$i]);



    }















for($i=0;$i<count($_POST["myspangallery"]);$i++)



			{



				$counter=$i+1;



     $alt = mysqli_real_escape_string($conn, $_POST['alt'][$i]);



			  



              $conn->query("update gallery_imgs set displayorder=".$counter." , Alt='".$alt."' where Id=".$_POST["myspangallery"][$i]);



    }















                $this->_helper->flashMessenger







                    ->addMessage('success')







                    ->addMessage('Save Done');



if($this->view->contName == 'Products'){



$catid=  $this->_request->getParam('catid');



$this->_redirect('admin/' . $this->_request->getControllerName() .'/index?catid='.$catid);



}



 



else{



                



 $this->_redirect('admin/' . $this->_request->getControllerName() .'/edit/id/' . $id.'?id='.$id );



}







 







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



if($this->view->contName == 'Servicessubcategories'){



$catid=  $this->_request->getParam('catid');



$this->_redirect('admin/' . $this->_request->getControllerName() .'/edit/id/' . $id.'?id='.$id.'&catid='.$catid );



}



 



else{



                



 $this->_redirect('admin/' . $this->_request->getControllerName() .'/edit/id/' . $id.'?id='.$id );



}        }







        $this->view->form = $form;







        $this->render('create', null, true);







    }



























    protected function editvillaAction()







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







 foreach ($_FILES["pic2"]["error"] as $key => $error)



        {







            if ($error == UPLOAD_ERR_OK)



            {



                $extension = pathinfo($_FILES['pic2']['name'][$key]);



                $extension = $extension["extension"];



                $mydate=date("mdYHis");



                $mydate=$mydate."".$key;



                $mykey=$key;



                $_FILES['pic2']['name'][$key]=str_replace (" ", "_", $_FILES['pic2']['name'][$key]);



                $_FILES['pic2']['name'][$key]=str_replace ("%20", "_", $_FILES['pic2']['name'][$key]);



                $_FILES['pic2']['name'][$key]= $mydate."".$_FILES['pic2']['name'][$key];



                $name = $_FILES["pic2"]["name"][$key];



                $tmp_name = $_FILES["pic2"]["tmp_name"][$key];



                $path =APPLICATION_PATH . '/../MyUpload/';



                  Zend_Registry::set('application', new Zend_Config_Ini(APPLICATION_PATH.'/configs/application.ini', 'production'));







             $config = Zend_Registry::get('application');



             $username =  $config->resources->db->params->username ;



             $password =  $config->resources->db->params->password ;



             $dbname =  $config->resources->db->params->dbname ;



             $conn=new mysqli("localhost",$username,$password ,$dbname );



                if( move_uploaded_file($tmp_name,  "$path/$name"))



                {



                    $conn->query("insert into villas_imgs (IdVilla,Img) values ( ".$id." , '".$name."' ) ");



                    $name="";



                }











            }



        }



            $res = $model->edit($id, $data);







            if ($res) {



   Zend_Registry::set('application', new Zend_Config_Ini(APPLICATION_PATH.'/configs/application.ini', 'production'));







             $config = Zend_Registry::get('application');



             $username =  $config->resources->db->params->username ;



             $password =  $config->resources->db->params->password ;



             $dbname =  $config->resources->db->params->dbname ;



             $conn=new mysqli("localhost",$username,$password ,$dbname );



for($i=0;$i<count($_POST["myspan"]);$i++)



			{



				$counter=$i+1;



				$conn->query("update villas_imgs set displayorder=".$counter." where Id=".$_POST["myspan"][$i]);



    }







                $this->_helper->flashMessenger







                    ->addMessage('success')







                    ->addMessage('Save Done');







                



                $this->_redirect('admin/' . $this->_request->getControllerName() .'/editvilla/id/' . $id.'?id='.$id );







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







             $this->_redirect('admin/' . $this->_request->getControllerName() .'/editvilla/id/' . $id.'?id='.$id );







        }







        $this->view->form = $form;







        $this->render('create', null, true);







    }



















  protected function editdiscountAction()







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







        $this->render('creatediscount', null, true);







    }











  protected function editmenuAction()







    {



   $restaurantID = intval($this->_request->getParam('restaurantID'));



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



            $countryid = $data['countryid'];



            foreach ($data as $i => $v) {







                if (is_null($data[$i]))







                    unset($data[$i]);







            }







            $res = $model->edit($id, $data);







            if ($res) {







                $this->_helper->flashMessenger







                    ->addMessage('success')







                    ->addMessage('Save Done');







                $this->_redirect('admin/' . $this->_request->getControllerName() . '/editmenu/id/' . $id.'?id='.$id.'&restaurantID='.$restaurantID  );







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







             $this->_redirect('admin/' . $this->_request->getControllerName() . '/editmenu/id/' . $id.'?id='.$id.'&restaurantID='.$restaurantID  );







        }







        $this->view->form = $form;







        $this->render('create', null, true);







    }



































  protected function editlpAction()







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



            $countryid = $data['countryid'];



            foreach ($data as $i => $v) {







                if (is_null($data[$i]))







                    unset($data[$i]);







            }







            $res = $model->edit($id, $data);







            if ($res) {







                $this->_helper->flashMessenger







                    ->addMessage('success')







                    ->addMessage('Save Done');







                $this->_redirect('admin/Landingpage/edit/id/'.$_GET["landingid"].'?id='.$_GET["landingid"] );







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







             $this->_redirect('admin/Landingpage/edit/id/'.$_GET["landingid"].'?id='.$_GET["landingid"] );







        }







        $this->view->form = $form;







        $this->render('create', null, true);







    }





























  
 protected function editlp2Action()

    {

        $model = $this->dbmodelClass;
$branche = $_GET['branche'];

        $id = intval($this->_request->getParam('id'));

        $EdieRow = $model->find($id)->current();

        if ($EdieRow) {

            $form = $this->ReBuildClass(array('EditRow' => $EdieRow->toArray()));

        } else {

            $form = $this->formClass;

        }

        if ($this->getRequest()->isPost() && $form->isValid($_POST)) {

            $data = $form->getValues();
            $countryid = $data['countryid'];
            foreach ($data as $i => $v) {

                if (is_null($data[$i]))

                    unset($data[$i]);

            }

            $res = $model->edit($id, $data);

            if ($res) {

                $this->_helper->flashMessenger

                    ->addMessage('success')

                    ->addMessage('Save Complete Successfully');

            
if($branche == 'cat' ){
                $this->_redirect('admin/Servicescategories/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche']);
}

if($branche == 'subcat' ){
                $this->_redirect('admin/Servicessubcategories/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche'].'&catid='.$_GET['catid']);
}

if($branche == 'services' ){
                $this->_redirect('admin/Servicescategories/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche'].'&catid='.$_GET['catid']);
}

if($branche == 'page' ){
                $this->_redirect('admin/Pages/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche']);
}


if($branche == 'landing' ){
                $this->_redirect('admin/landingpage/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche'].'&catid='.$_GET['catid']);
}

if($branche == 'blogs' ){
                $this->_redirect('admin/Blogs/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche'].'&catid='.$_GET['catid']);
}



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

    if($branche == 'cat' ){
                $this->_redirect('admin/Servicescategories/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche']);
}

if($branche == 'subcat' ){
                $this->_redirect('admin/Servicessubcategories/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche'].'&catid='.$_GET['catid']);
}

if($branche == 'services' ){
                $this->_redirect('admin/Servicescategories/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche'].'&catid='.$_GET['catid']);
}

if($branche == 'page' ){
                $this->_redirect('admin/Pages/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche']);
}



if($branche == 'landing' ){
                $this->_redirect('admin/landingpage/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche'].'&catid='.$_GET['catid']);
}

if($branche == 'blogs' ){
                $this->_redirect('admin/Blogs/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche'].'&catid='.$_GET['catid']);
}


        }

        $this->view->form = $form;

        $this->render('create', null, true);

    }














 protected function editlp3Action()







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



            $countryid = $data['countryid'];



            foreach ($data as $i => $v) {







                if (is_null($data[$i]))







                    unset($data[$i]);







            }







            $res = $model->edit($id, $data);







            if ($res) {







                $this->_helper->flashMessenger







                    ->addMessage('success')







                    ->addMessage('Save Done');






 
$this->_redirect('admin/Servicescategories/edit/id/'.$_GET["pageid"].'?id='.$_GET["pageid"] );





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







             $this->_redirect('admin/Servicessubcategories/edit/id/'.$_GET["serviceid"].'?id='.$_GET["serviceid"].'&catid='.$_GET["catid"] );







        }







        $this->view->form = $form;







        $this->render('create', null, true);







    }















    protected function edit3Action()







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







        $this->render('edit3', null, true);







    }



































    protected function edittextpackageAction()







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







                $this->_redirect('admin/' . $this->_request->getControllerName() . '/edittextpackage/id/1?id=1/');







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







            $this->_redirect('admin/' . $this->_request->getControllerName() . '/edittextpackage/id/1?id=1');







        }







        $this->view->form = $form;







           $this->render('create', null, true);







    }











  protected function edit5Action()







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







        $this->render('edit5', null, true);







    }















 protected function editboxsAction()







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







                $this->_redirect('admin/' . $this->_request->getControllerName() . '/editboxs/id/8/');







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







            $this->_redirect('admin/' . $this->_request->getControllerName() . '/editboxs/id/8/');







        }







        $this->view->form = $form;







        $this->render('createboxs', null, true);







    }















protected function editpopupAction()







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







                $this->_redirect('admin/' . $this->_request->getControllerName() . '/editpopup/id/8/');







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







            $this->_redirect('admin/' . $this->_request->getControllerName() . '/editpopup/id/8/');







        }







        $this->view->form = $form;







        $this->render('create', null, true);







    }















































protected function editofferclosemesgdefaultAction()







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







                $this->_redirect('admin/' . $this->_request->getControllerName() . '/editofferclosemesgdefault/id/8/');







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







            $this->_redirect('admin/' . $this->_request->getControllerName() . '/editofferclosemesgdefault/id/8/');







        }







        $this->view->form = $form;







        $this->render('create', null, true);







    }















protected function editpartyAction()







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







                $this->_redirect('admin/' . $this->_request->getControllerName() . '/editparty/id/8/');







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







            $this->_redirect('admin/' . $this->_request->getControllerName() . '/editparty/id/8/');







        }







        $this->view->form = $form;







        $this->render('create', null, true);







    }











  protected function editsocialAction()







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







                $this->_redirect('admin/' . $this->_request->getControllerName() . '/editsocial/id/2/');







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







            $this->_redirect('admin/' . $this->_request->getControllerName() . '/editsocial/id/2/');







        }







        $this->view->form = $form;







        $this->render('create', null, true);







    }



















 protected function edit2Action()







    {







  Zend_Registry::set('application', new Zend_Config_Ini(APPLICATION_PATH.'/configs/application.ini', 'production'));







             $config = Zend_Registry::get('application');



             $username =  $config->resources->db->params->username ;



             $password =  $config->resources->db->params->password ;



             $dbname =  $config->resources->db->params->dbname ;



             $conn=new mysqli("localhost",$username,$password ,$dbname );







        $model = $this->dbmodelClass;



 $tablename= $this->dbmodelClass->_name ; 



        $id = intval($this->_request->getParam('id'));



  $this->view->contName = $this->_request->getControllerName();







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











$title = $data['title'];



 







            $res = $model->edit($id, $data);







            if ($res) {



 











            $res = $model->edit($id, $data);



$this->session = new Zend_Session_Namespace('Default');



$request = Zend_Controller_Front::getInstance()->getRequest()->getRequestUri();



 $auth = Zend_Auth::getInstance();



        if($auth->hasIdentity()) {



$userInfo = Zend_Auth::getInstance()->getStorage()->read();



 $userid =  $userInfo->id;



}  







        



        $this->dbmodelClass2 = new Model_PlusData();



        $this->dbmodelClass2->_name = 'users';



        $model2 = $this->dbmodelClass2;







  						                                       



			 $toppages2item = $model2->selectForArray(array('id' => $userid ), array('displayorder' => 'ASC')  );



								foreach($toppages2item as $toppage2items){ 



$userfullname= $toppage2items->firstname.' '.$toppage2items->lastname ;



$date1= date("Y/m/d");



$time1=date("h:i:s");



		 	 



}







  







 $sql="INSERT INTO  logs (action,user,userid,actiondetails,tablename,createdate,createtime) VALUES ('Edit', '$userfullname' , '$userid' , ' <spam style=color:red> $title</spam> ' , '$tablename' , '$date1' , '$time1' ) ";



if ($conn->query($sql) === TRUE) {



    echo "New record created successfully";



} else {



    echo "Error: " . $sql . "<br>" . $conn->error;



};







 











mysqli_set_charset($conn,"utf8");



 















                $this->_helper->flashMessenger







                    ->addMessage('success')







                    ->addMessage('Save Done');







                



                $this->_redirect('admin/' . $this->_request->getControllerName() .'/edit2/id/' . $id.'?id='.$id );







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







             $this->_redirect('admin/' . $this->_request->getControllerName() .'/edit2/id/' . $id.'?id='.$id );







        }







        $this->view->form = $form;







        $this->render('create', null, true);







    }











  protected function editgalleryAction()







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







                $this->_redirect('admin/' . $this->_request->getControllerName() . '/editgallery/id/3?id='.$id);







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







            $this->_redirect('admin/' . $this->_request->getControllerName() . '/editgallery/id/3?id='.$id);







        }







        $this->view->form = $form;







        $this->render('create', null, true);







    }















protected function editinternalpageAction()







    {







        $model = $this->dbmodelClass;







        $id = intval($this->_request->getParam('id'));



      $pageid = intval($this->_request->getParam('pageid'));







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







                $this->_redirect('admin/' . $this->_request->getControllerName() . '/indexinternalpage/serv/'.$pageid);







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







            $this->_redirect('admin/' . $this->_request->getControllerName() . '/indexpage/');







        }







        $this->view->form = $form;







        $this->render('editinternalpage', null, true);







    }















































 protected function editpageAction()







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







                $this->_redirect('admin/' . $this->_request->getControllerName() . '/editpage/id/'. $id.'?id='.$id);







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







            $this->_redirect('admin/' . $this->_request->getControllerName() . '/editpage/id/'. $id.'?id='.$id);







        }







        $this->view->form = $form;







        $this->render('edit3', null, true);







    }







 







 protected function edit4Action()







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







                $this->_redirect('admin/' . $this->_request->getControllerName() . '/edit4/id/8/');







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







            $this->_redirect('admin/' . $this->_request->getControllerName() . '/edit4/id/8/');







        }







        $this->view->form = $form;







        $this->render('create', null, true);







    }























protected function edit7Action()







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







                $this->_redirect('admin/' . $this->_request->getControllerName() . '/edit7/id/2/');







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







            $this->_redirect('admin/' . $this->_request->getControllerName() . '/edit7/id/2/');







        }







        $this->view->form = $form;







        $this->render('create', null, true);







    }



















 protected function edititemAction()







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



		    $countryids = $form->getValue("countryid");







            foreach ($data as $i => $v) {







                if (is_null($data[$i]))







                    unset($data[$i]);







            }







            $res = $model->edit($id, $data);







            if ($res) {







                $this->_helper->flashMessenger







                    ->addMessage('success')







                    ->addMessage('Update Done');







                $this->_redirect('admin/' . $this->_request->getControllerName() .'/edititem/id/' . $id.'?idpage='.$id.'&countryid='. $countryids );



                







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







            







        }







        $this->view->form = $form;







        $this->render('edititem', null, true);







    }































 protected function edititemexAction()







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



		    $countryids = $form->getValue("countryid");







            foreach ($data as $i => $v) {







                if (is_null($data[$i]))







                    unset($data[$i]);







            }







            $res = $model->edit($id, $data);







            if ($res) {







                $this->_helper->flashMessenger







                    ->addMessage('success')







                    ->addMessage('Update Done');







                $this->_redirect('admin/' . $this->_request->getControllerName() .'/edititemex/id/' . $id.'?idpage='.$id.'&countryid='. $countryids );



                







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







            







        }







        $this->view->form = $form;







        $this->render('edititemex', null, true);







    }



























 protected function edititem7Action()







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



		    $countryids = $form->getValue("countryid");







            foreach ($data as $i => $v) {







                if (is_null($data[$i]))







                    unset($data[$i]);







            }







            $res = $model->edit($id, $data);







            if ($res) {







                $this->_helper->flashMessenger







                    ->addMessage('success')







                    ->addMessage('Update Done');







                $this->_redirect('admin/' . $this->_request->getControllerName() .'/edititem7/id/' . $id.'?idpage='.$id.'&countryid='. $countryids );



                







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







            







        }







        $this->view->form = $form;







        $this->render('edititem7', null, true);







    }



























 protected function edititem3Action()







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



             $countryids = $form->getValue("regionid");







            foreach ($data as $i => $v) {







                if (is_null($data[$i]))







                    unset($data[$i]);







            }







            $res = $model->edit($id, $data);







            if ($res) {







                $this->_helper->flashMessenger







                    ->addMessage('success')







                    ->addMessage('Update Done');







               



                 $this->_redirect('admin/' . $this->_request->getControllerName() .'/edititem3/id/' . $id.'?idpage='.$id.'&regionid='. $countryids );



  



                







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







            







        }







        $this->view->form = $form;







        $this->render('edititem3', null, true);







    }



























protected function edititem5Action()







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







                    ->addMessage('Update Done');







                $this->_redirect('admin/' . $this->_request->getControllerName() .'/edititem5/id/' . $id.'?id='.$id );



                







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







            







        }







        $this->view->form = $form;







        $this->render('edititem5', null, true);







    }



























 protected function edititem4Action()







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







                    ->addMessage('Update Done');







                $this->_redirect('admin/' . $this->_request->getControllerName() .'/edititem4/id/' . $id.'?id='.$id );



                







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







            







        }







        $this->view->form = $form;







        $this->render('edititem4', null, true);







    }















    protected function deleterequestsAction()







    {







        $this->_helper->viewRenderer->setNoRender();







        $this->_helper->layout->disableLayout();







        $id = intval($this->_request->getParam('id'));







        $model = $this->dbmodelClass;







        if (in_array($id, $this->_UnDelete)) {







            $this->_helper->flashMessenger







                ->addMessage('error')







                ->addMessage('Sorry We Can`t Delete This Item');







            return $this->_redirect('admin/' . $this->_request->getControllerName() . '/indexrequests/');







        }















        $data = $model->deleteRow($id);







        if ($data === true) {







            $this->_helper->flashMessenger







                ->addMessage('success')







                ->addMessage('Delete Done');







            $this->_redirect('admin/' . $this->_request->getControllerName() . '/indexrequests/');







        } else {







            $this->_redirect('admin/' . $this->_request->getControllerName() . '/indexrequests/');







        }







    }















 protected function deleteAction()







    {



  Zend_Registry::set('application', new Zend_Config_Ini(APPLICATION_PATH.'/configs/application.ini', 'production'));







             $config = Zend_Registry::get('application');



             $username =  $config->resources->db->params->username ;



             $password =  $config->resources->db->params->password ;



             $dbname =  $config->resources->db->params->dbname ;



             $conn=new mysqli("localhost",$username,$password ,$dbname );







        $this->_helper->viewRenderer->setNoRender();







        $this->_helper->layout->disableLayout();







        $id = intval($this->_request->getParam('id'));







       $this->view->contName = $this->_request->getControllerName();



        $model = $this->dbmodelClass;



        $tablename= $this->dbmodelClass->_name ; 







        $id = intval($this->_request->getParam('id'));

 



 



        if (in_array($id, $this->_UnDelete)) {







            $this->_helper->flashMessenger



                ->addMessage('error')



                ->addMessage('Sorry We Can`t Delete This Item');



            return $this->_redirect('admin/' . $this->_request->getControllerName() . '/index/');







        }















        $data = $model->deleteRow($id);







        if ($data === true) {















$this->session = new Zend_Session_Namespace('Default');



$request = Zend_Controller_Front::getInstance()->getRequest()->getRequestUri();



 $auth = Zend_Auth::getInstance();



        if($auth->hasIdentity()) {



$userInfo = Zend_Auth::getInstance()->getStorage()->read();



 $userid =  $userInfo->id;



}  







        



        $this->dbmodelClass2 = new Model_PlusData();



        $this->dbmodelClass2->_name = 'users';



        $model2 = $this->dbmodelClass2;







  						                                       



			 $toppages2item = $model2->selectForArray(array('id' => $userid ), array('displayorder' => 'ASC')  );



								foreach($toppages2item as $toppage2items){ 



$userfullname= $toppage2items->firstname.' '.$toppage2items->lastname ;



$date1= date("Y/m/d");



$time1=date("h:i:s");



		 	 



}







  $sql="INSERT INTO  logs (action,user,userid,actiondetails,tablename,createdate,createtime) VALUES ( 'Delete', '$userfullname' , '$userid' , ' <spam style=color:red> $title</spam>' , '$tablename' , '$date1' , '$time1' ) ";



if ($conn->query($sql) === TRUE) {



    echo "New record created successfully";



} else {



    echo "Error: " . $sql . "<br>" . $conn->error;



};



 







            $this->_helper->flashMessenger







                ->addMessage('success')







                ->addMessage('Delete Done');











if($this->view->contName == 'Products'){



$catid=  $this->_request->getParam('catid');



 $this->_redirect('admin/' . $this->_request->getControllerName() . '/index?&catid='.$catid );



}



 



else{



 



 $this->_redirect('admin/' . $this->_request->getControllerName() . '/index/');



}











           







        } else {







            $this->_redirect('admin/' . $this->_request->getControllerName() . '/index/');







        }







    }



























 protected function deletelpAction()







    {







        $this->_helper->viewRenderer->setNoRender();







        $this->_helper->layout->disableLayout();







        $id = intval($this->_request->getParam('id'));







        $model = $this->dbmodelClass;







        if (in_array($id, $this->_UnDelete)) {







            $this->_helper->flashMessenger







                ->addMessage('error')







                ->addMessage('Sorry We Can`t Delete This Item');







            return $this->_redirect('admin/Landingpage/edit/id/'.$_GET["landingid"].'?id='.$_GET["landingid"] );



           







        }















        $data = $model->deleteRow($id);







        if ($data === true) {







            $this->_helper->flashMessenger







                ->addMessage('success')







                ->addMessage('Delete Done');







            $this->_redirect('admin/Landingpage/edit/id/'.$_GET["landingid"].'?id='.$_GET["landingid"] );







        } else {







            $this->_redirect('admin/Landingpage/edit/id/'.$_GET["landingid"].'?id='.$_GET["landingid"] );







        }







    }





















   

 protected function deletelp2Action()

    {

        $this->_helper->viewRenderer->setNoRender();

        $this->_helper->layout->disableLayout();

        $id = intval($this->_request->getParam('id'));

$branche = $_GET['branche']; 
        $model = $this->dbmodelClass;

        if (in_array($id, $this->_UnDelete)) {

            $this->_helper->flashMessenger

                ->addMessage('error')

                ->addMessage('Sorry We Can`t Delete This Item');
 
if($branche == 'cat' ){
             return   $this->_redirect('admin/Servicescategories/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche']);
}

if($branche == 'subcat' ){
              return  $this->_redirect('admin/Servicessubcategories/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&catid='.$_GET['catid'].'&branche='.$_GET['branche']);
}

if($branche == 'services' ){
              return  $this->_redirect('admin/Servicescategories/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche']);
}

if($branche == 'page' ){
              return  $this->_redirect('admin/Pages/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche']);
}



if($branche == 'landing' ){
                $this->_redirect('admin/landingpage/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche'].'&catid='.$_GET['catid']);
}

if($branche == 'blogs' ){
                $this->_redirect('admin/Blogs/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche'].'&catid='.$_GET['catid']);
}

           

        }



        $data = $model->deleteRow($id);

        if ($data === true) {

            $this->_helper->flashMessenger

                ->addMessage('success')

                ->addMessage('Delete complete successfully');

         
if($branche == 'cat' ){
                $this->_redirect('admin/Servicescategories/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche']);
}

if($branche == 'subcat' ){
                $this->_redirect('admin/Servicessubcategories/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche'].'&catid='.$_GET['catid']);
}

if($branche == 'services' ){
                $this->_redirect('admin/Servicescategories/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche'].'&catid='.$_GET['catid']);
}


if($branche == 'page' ){
                $this->_redirect('admin/Pages/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche']);
}


if($branche == 'landing' ){
                $this->_redirect('admin/landingpage/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche'].'&catid='.$_GET['catid']);
}

if($branche == 'blogs' ){
                $this->_redirect('admin/Blogs/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche'].'&catid='.$_GET['catid']);
}


        } else {

     if($branche == 'cat' ){
                $this->_redirect('admin/Servicescategories/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche']);
}

if($branche == 'subcat' ){
                $this->_redirect('admin/Servicessubcategories/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche'].'&catid='.$_GET['catid']);
}


if($branche == 'services' ){
                $this->_redirect('admin/Servicescategories/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche'].'&catid='.$_GET['catid']);
}

if($branche == 'page' ){
                $this->_redirect('admin/Pages/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche']);
}



if($branche == 'landing' ){
                $this->_redirect('admin/landingpage/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche'].'&catid='.$_GET['catid']);
}

if($branche == 'blogs' ){
                $this->_redirect('admin/Blogs/edit/id/'. $_GET['pageid'] .'?id='.$_GET['pageid'].'&branche='.$_GET['branche'].'&catid='.$_GET['catid']);
}


        }

    }




















 protected function deletelp3Action()







    {







        $this->_helper->viewRenderer->setNoRender();







        $this->_helper->layout->disableLayout();







        $id = intval($this->_request->getParam('id'));







        $model = $this->dbmodelClass;







        if (in_array($id, $this->_UnDelete)) {







            $this->_helper->flashMessenger







                ->addMessage('error')







                ->addMessage('Sorry We Can`t Delete This Item');







            return $this->_redirect('admin/Servicessubcategories/edit/id/'.$_GET["serviceid"].'?id='.$_GET["serviceid"].'&catid='.$_GET['catid'] );



           







        }















        $data = $model->deleteRow($id);







        if ($data === true) {







            $this->_helper->flashMessenger







                ->addMessage('success')







                ->addMessage('Delete Done');







            $this->_redirect('admin/Servicessubcategories/edit/id/'.$_GET["serviceid"].'?id='.$_GET["serviceid"].'&catid='.$_GET['catid'] );







        } else {







            $this->_redirect('admin/Servicessubcategories/edit/id/'.$_GET["serviceid"].'?id='.$_GET["serviceid"].'&catid='.$_GET['catid'] );







        }







    }











 protected function deletemenuAction()







    {







    



   $restaurantID = intval($this->_request->getParam('restaurantID'));







        $this->_helper->viewRenderer->setNoRender();







        $this->_helper->layout->disableLayout();







        $id = intval($this->_request->getParam('id'));







        $model = $this->dbmodelClass;







        if (in_array($id, $this->_UnDelete)) {







            $this->_helper->flashMessenger







                ->addMessage('error')







                ->addMessage('Sorry We Can`t Delete This Item');







             header('Location: ' . $_SERVER['HTTP_REFERER']);



             exit;











        }















        $data = $model->deleteRow($id);







        if ($data === true) {







            $this->_helper->flashMessenger







                ->addMessage('success')







                ->addMessage('Delete Done');



  header('Location: ' . $_SERVER['HTTP_REFERER']);



             exit;











        } else {







            header('Location: ' . $_SERVER['HTTP_REFERER']);



             exit;











        }







    }











protected function deleteitemAction()







    {







        $this->_helper->viewRenderer->setNoRender();







        $this->_helper->layout->disableLayout();







        $id = intval($this->_request->getParam('id'));







        $model = $this->dbmodelClass;







        if (in_array($id, $this->_UnDelete)) {







            $this->_helper->flashMessenger







                ->addMessage('error')







                ->addMessage('Sorry We Can`t Delete This Item');







            return $this->_redirect('admin/index2/');







        }















        $data = $model->deleteRow($id);







        if ($data === true) {







            $this->_helper->flashMessenger







                ->addMessage('success')







                ->addMessage('Delete Done');







            $this->_redirect('admin/index2/');







        } else {







            $this->_redirect('admin/index2/');







        }







    }











































protected function deleteitemexAction()







    {







        $this->_helper->viewRenderer->setNoRender();







        $this->_helper->layout->disableLayout();







        $id = intval($this->_request->getParam('id'));







        $model = $this->dbmodelClass;







        if (in_array($id, $this->_UnDelete)) {







            $this->_helper->flashMessenger







                ->addMessage('error')







                ->addMessage('Sorry We Can`t Delete This Item');







            return $this->_redirect('admin/index2ex/');







        }















        $data = $model->deleteRow($id);







        if ($data === true) {







            $this->_helper->flashMessenger







                ->addMessage('success')







                ->addMessage('Delete Done');







            $this->_redirect('admin/index2ex/');







        } else {







            $this->_redirect('admin/index2ex/');







        }







    }















protected function deleteitem7Action()







    {







        $this->_helper->viewRenderer->setNoRender();







        $this->_helper->layout->disableLayout();







        $id = intval($this->_request->getParam('id'));







        $model = $this->dbmodelClass;







        if (in_array($id, $this->_UnDelete)) {







            $this->_helper->flashMessenger







                ->addMessage('error')







                ->addMessage('Sorry We Can`t Delete This Item');







            return $this->_redirect('admin/index7/');







        }















        $data = $model->deleteRow($id);







        if ($data === true) {







            $this->_helper->flashMessenger







                ->addMessage('success')







                ->addMessage('Delete Done');







            $this->_redirect('admin/index7/');







        } else {







            $this->_redirect('admin/index7/');







        }







    }







































    protected function createuserAction()



    {







  



        $form = new Form_Users();



        $model = $this->dbmodelClass;







       $tablename= $this->dbmodelClass->_name ; 



  $this->view->contName = $this->_request->getControllerName();











        if ($this->getRequest()->isPost() && $form->isValid($_POST)) {







            $data = $form->getValues();



             



            foreach ($data as $i => $v) {







                if (is_null($data[$i]))







                    unset($data[$i]);







            }







            $res = $model->InsertRow(($data));







            if ($res) {



$id = $model->getAdapter()->lastInsertId();



$title = $data['email'];







$this->session = new Zend_Session_Namespace('Default');



$request = Zend_Controller_Front::getInstance()->getRequest()->getRequestUri();



 $auth = Zend_Auth::getInstance();



        if($auth->hasIdentity()) {



$userInfo = Zend_Auth::getInstance()->getStorage()->read();



 $userid =  $userInfo->id;



}  







        



        $this->dbmodelClass2 = new Model_PlusData();



        $this->dbmodelClass2->_name = 'users';



        $model2 = $this->dbmodelClass2;







  						                                       



			 $toppages2item = $model2->selectForArray(array('id' => $userid ), array('displayorder' => 'ASC')  );



								foreach($toppages2item as $toppage2items){ 



$userfullname= $toppage2items->firstname.' '.$toppage2items->lastname ;



$date1= date("Y/m/d");



$time1=date("h:i:s");



		 	 



}







 



 











                $this->_helper->flashMessenger







                    ->addMessage('success')







                    ->addMessage('Save Done');







                $this->_redirect('admin/' . $this->_request->getControllerName() . '/indexuser/');







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







        $this->render('createuser', null, true);







    }



    



    



    



    



    



    







 protected function edituserAction()







    {







        



  Zend_Registry::set('application', new Zend_Config_Ini(APPLICATION_PATH.'/configs/application.ini', 'production'));







             $config = Zend_Registry::get('application');



             $username =  $config->resources->db->params->username ;



             $password =  $config->resources->db->params->password ;



             $dbname =  $config->resources->db->params->dbname ;



             $conn=new mysqli("localhost",$username,$password ,$dbname );







        $model = $this->dbmodelClass;



 $tablename= $this->dbmodelClass->_name ; 



        $id = intval($this->_request->getParam('id'));



  $this->view->contName = $this->_request->getControllerName();







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



$title = $data['email'];







$this->session = new Zend_Session_Namespace('Default');



$request = Zend_Controller_Front::getInstance()->getRequest()->getRequestUri();



 $auth = Zend_Auth::getInstance();



        if($auth->hasIdentity()) {



$userInfo = Zend_Auth::getInstance()->getStorage()->read();



 $userid =  $userInfo->id;



}  







        



        $this->dbmodelClass2 = new Model_PlusData();



        $this->dbmodelClass2->_name = 'users';



        $model2 = $this->dbmodelClass2;







  						                                       



			 $toppages2item = $model2->selectForArray(array('id' => $userid ), array('displayorder' => 'ASC')  );



								foreach($toppages2item as $toppage2items){ 



$userfullname= $toppage2items->firstname.' '.$toppage2items->lastname ;



$date1= date("Y/m/d");



$time1=date("h:i:s");



		 	 



}







  







 $sql="INSERT INTO  logs (action,user,userid,actiondetails,tablename,createdate,createtime) VALUES ('Edit', '$userfullname' , '$userid' , ' <spam style=color:red> $title</spam> ' , '$tablename' , '$date1' , '$time1' ) ";



if ($conn->query($sql) === TRUE) {



    echo "New record created successfully";



} else {



    echo "Error: " . $sql . "<br>" . $conn->error;



};







 







                $this->_helper->flashMessenger







                    ->addMessage('success')







                    ->addMessage('Update Done');







                $this->_redirect('admin/' . $this->_request->getControllerName() .'/edituser/id/' . $id.'?id='.$id );



                







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







            



 $this->_redirect('admin/' . $this->_request->getControllerName() .'/edituser/id/' . $id.'?id='.$id );



        }







        $this->view->form = $form;







        $this->render('createuser', null, true);







    }















    protected function deleteuserAction()







    {







   Zend_Registry::set('application', new Zend_Config_Ini(APPLICATION_PATH.'/configs/application.ini', 'production'));







             $config = Zend_Registry::get('application');



             $username =  $config->resources->db->params->username ;



             $password =  $config->resources->db->params->password ;



             $dbname =  $config->resources->db->params->dbname ;



             $conn=new mysqli("localhost",$username,$password ,$dbname );







        $this->_helper->viewRenderer->setNoRender();







        $this->_helper->layout->disableLayout();







        $id = intval($this->_request->getParam('id'));







       $this->view->contName = $this->_request->getControllerName();



        $model = $this->dbmodelClass;



        $tablename= $this->dbmodelClass->_name ; 







        $id = intval($this->_request->getParam('id'));



        $model = $this->dbmodelClass;



 $tite222 = $model->selectForArray(array('id' => $id ), array( )  ); foreach($tite222 as $tite222items){ 



$title= $tite222items->email; }











        if (in_array($id, $this->_UnDelete)) {







            $this->_helper->flashMessenger







                ->addMessage('error')







                ->addMessage('Sorry We Can`t Delete This Item');







            return $this->_redirect('admin/' . $this->_request->getControllerName() . '/indexuser/');







        }















        $data = $model->deleteRow($id);







        if ($data === true) {







$this->session = new Zend_Session_Namespace('Default');



$request = Zend_Controller_Front::getInstance()->getRequest()->getRequestUri();



 $auth = Zend_Auth::getInstance();



        if($auth->hasIdentity()) {



$userInfo = Zend_Auth::getInstance()->getStorage()->read();



 $userid =  $userInfo->id;



}  







        



        $this->dbmodelClass2 = new Model_PlusData();



        $this->dbmodelClass2->_name = 'users';



        $model2 = $this->dbmodelClass2;







  						                                       



			 $toppages2item = $model2->selectForArray(array('id' => $userid ), array('displayorder' => 'ASC')  );



								foreach($toppages2item as $toppage2items){ 



$userfullname= $toppage2items->firstname.' '.$toppage2items->lastname ;



$date1= date("Y/m/d");



$time1=date("h:i:s");



		 	 



}







  $sql="INSERT INTO  logs (action,user,userid,actiondetails,tablename,createdate,createtime) VALUES ( 'Delete', '$userfullname' , '$userid' , ' <spam style=color:red> $title</spam>' , '$tablename' , '$date1' , '$time1' ) ";



if ($conn->query($sql) === TRUE) {



    echo "New record created successfully";



} else {



    echo "Error: " . $sql . "<br>" . $conn->error;



};



 







            $this->_helper->flashMessenger







                ->addMessage('success')







                ->addMessage('Delete Done');







            $this->_redirect('admin/' . $this->_request->getControllerName() . '/indexuser/');







        } else {







            $this->_redirect('admin/' . $this->_request->getControllerName() . '/indexuser/');







        }







    }































 protected function indexuserAction()







    {







        if($this->getRequest()->isPost()) {







            $this->sortOrder();







            exit;







        }







        $this->view->listValue = $this->listValue;







        $model = $this->dbmodelClass;







        $adapter = $model->selectForPager($this->selectOptions, 'displayorder asc');







        $paginator = new Zend_Paginator($adapter);







        $paginator->setItemCountPerPage(100);







        $page = $this->_request->getParam('page', 1);







        $paginator->setCurrentPageNumber($page);







        $this->view->paginator = $paginator;







        $this->view->contName = $this->_request->getControllerName();







        $this->render('indexuser', null, true);







    }



    



    



    







protected function deletepageAction()







    {







        $this->_helper->viewRenderer->setNoRender();







        $this->_helper->layout->disableLayout();







        $id = intval($this->_request->getParam('id'));







        $model = $this->dbmodelClass;







        if (in_array($id, $this->_UnDelete)) {







            $this->_helper->flashMessenger







                ->addMessage('error')







                ->addMessage('Sorry We Can`t Delete This Item');







            return $this->_redirect('admin/' . $this->_request->getControllerName() . '/indexpage/');







        }















        $data = $model->deleteRow($id);







        if ($data === true) {







            $this->_helper->flashMessenger







                ->addMessage('success')







                ->addMessage('Delete Done');







            $this->_redirect('admin/' . $this->_request->getControllerName() . '/indexpage/');







        } else {







            $this->_redirect('admin/' . $this->_request->getControllerName() . '/indexpage/');







        }







    }







































protected function deleteinternalpageAction()







    {







        $this->_helper->viewRenderer->setNoRender();







        $this->_helper->layout->disableLayout();







        $id = intval($this->_request->getParam('id'));







        $model = $this->dbmodelClass;



 $row = $model->find($id)->current()->toArray();



 $pageid = $row['pageid'];







        if (in_array($id, $this->_UnDelete)) {







            $this->_helper->flashMessenger







                ->addMessage('error')







                ->addMessage('Sorry We Can`t Delete This Item');







            return $this->_redirect('admin/' . $this->_request->getControllerName() . '/indexpage/');







        }















        $data = $model->deleteRow($id);







        if ($data === true) {







            $this->_helper->flashMessenger







                ->addMessage('success')







                ->addMessage('Delete Done');







            $this->_redirect('admin/' . $this->_request->getControllerName() . '/indexinternalpage/serv/'.$pageid);







        } else {







            $this->_redirect('admin/' . $this->_request->getControllerName() .  '/indexinternalpage/serv/'.$pageid);







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



















   



















    protected function createdestinationsAction()







    {







        $form = $this->formClass;







        $model = $this->dbmodelClass;







        if ($this->getRequest()->isPost() && $form->isValid($_POST)) {







            $data = $form->getValues();







            foreach ($data as $i => $v) {







                if (is_null($data[$i]))







                    unset($data[$i]);







            }



   Zend_Registry::set('application', new Zend_Config_Ini(APPLICATION_PATH.'/configs/application.ini', 'production'));







             $config = Zend_Registry::get('application');



             $username =  $config->resources->db->params->username ;



             $password =  $config->resources->db->params->password ;



             $dbname =  $config->resources->db->params->dbname ;



             $conn=new mysqli("localhost",$username,$password ,$dbname );



            $res = $model->InsertRow(($data));



$idid = $res;







 



						$diff=($_POST["Days"]);



						for($i=0;$i<$diff;$i++)



							{



								$conn->query("insert into dest_days ( Det , Parent  ) values ( '' ,  ".$idid." ) ");	



							}















            if ($res = true) {







                $this->_helper->flashMessenger->addMessage('success')->addMessage('Save Done');







                $this->_redirect('admin/' . $this->_request->getControllerName() . '/indexdestinations/');







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







        $this->render('createdestinations', null, true);







    }



























 protected function indexdestinationsAction()







    {







        if($this->getRequest()->isPost()) {







            $this->sortOrder();







            exit;







        }







        $this->view->listValue = $this->listValue;







        $model = $this->dbmodelClass;







        $adapter = $model->selectForPager($this->selectOptions, 'displayorder asc');







        $paginator = new Zend_Paginator($adapter);







        $paginator->setItemCountPerPage(2000);







        $page = $this->_request->getParam('page', 1);







        $paginator->setCurrentPageNumber($page);







        $this->view->paginator = $paginator;







        $this->view->contName = $this->_request->getControllerName();







        $this->render('indexdestinations', null, true);







    }



























 



protected function deletedestinationsAction()







    {







        $this->_helper->viewRenderer->setNoRender();







        $this->_helper->layout->disableLayout();







        $id = intval($this->_request->getParam('id'));







        $model = $this->dbmodelClass;







        if (in_array($id, $this->_UnDelete)) {







            $this->_helper->flashMessenger







                ->addMessage('error')







                ->addMessage('Sorry We Can`t Delete This Item');







              $this->_redirect('admin/' . $this->_request->getControllerName() . '/indexdestinations/');







        }















        $data = $model->deleteRow($id);







        if ($data === true) {







            $this->_helper->flashMessenger







                ->addMessage('success')







                ->addMessage('Delete Done');







            $this->_redirect('admin/' . $this->_request->getControllerName() . '/indexdestinations/');







        } else {







            $this->_redirect('admin/' . $this->_request->getControllerName() . '/indexdestinations/');







        }







    }



















    public function uploadAction()







    {







        try {







            require APPLICATION_PATH . '/models/PictureCut.php';







            $pictureCut = PictureCut::createSingleton();







            if ($pictureCut->upload()) {







                print $pictureCut->toJson();







            } else {







                print $pictureCut->exceptionsToJson();







            }















        } catch (Exception $e) {







            print $e->getMessage();







            exit;







        }







        exit;







    }







}