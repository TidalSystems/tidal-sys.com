<?php 

class CL_Curd_BaseContoller extends Zend_Controller_Action
{
    /*
     *  Db Handel
     */
    protected $Cat_Model;
    protected $Cat_PerPage = 20;
    protected $selectOptions;
    protected $cattype;
    protected  $Data_Model;


    /*
     * Html Handel
     */
     protected $DefaultTemplate = 'base';
     protected $PageTitle;
     protected $BlockName = 1;
     protected $htmlElement;
     /*
      * Translat vat
      */
     protected $translat_itemscat;


    public function preDispatch() {
        $this->view->addScriptPath(APPLICATION_PATH . '/views/scripts/'.$this->DefaultTemplate);
        $this->lang = $this->view->lang;
        $this->idGet = intval($this->_request->getParam('i'));
        $this->view->htmlElement = $this->htmlElement;
        $this->view->ControllerName = $this->_request->getControllerName();
    }
    public function init() {
        
        
    }

public function selectItem($id)
    {
        $select = $this->select();
        $select->setIntegrityCheck(false);
        $select->from(array('a' => $this->_name), array( 'a.*'));
        $select->join(array('b' => 'cats'), 'a.catid = b.id', array('b.catname' ), null);
        $select->where('a.id = ?' , $id);
        $data = $this->fetchRow($select);
        if ($data) {
            $res = $data->toArray();
        }
        
        return $res;

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
    public function showcatsAction()
    {
        $typName = $this->view->typName = $this->view->translate($this->translat_itemscat , LANG);
        $this->view->PageTitle = $typName .' '. $catName ;
        $modelCat =  $this->Cat_Model;
        $adapter = $modelCat->selectForPager(array('cattype'=>$this->cattype , 'lang'=>LANG));
        $paginator = new Zend_Paginator($adapter);
        $paginator->setItemCountPerPage($this->Cat_PerPage);
        $page = $this->_request->getParam('page', 1);
        $paginator->setCurrentPageNumber($page);
        $this->view->paginator = $paginator;
        if(count($paginator) == 0)
       {
           $this->nodata();
       }

        $this->render('showcats' ,null , true);
    }
    public function allcatAction()
    {

        $modelCat =  $this->Cat_Model;
        $CatInfo = $modelCat->find($this->idGet)->current();
        $typName = $this->view->typName = $this->view->translate($this->translat_itemscat , LANG);
        $catName = $this->view->CatName = $CatInfo->catname;

        $this->view->PageTitle = $typName .' '. $catName ;
        $this->view->BlockName = $this->BlockName;

        $model =  $this->Data_Model;
        $adapter = $model->selectForPager($this->_selectBuild());
        $paginator = new Zend_Paginator($adapter);
        $paginator->setItemCountPerPage($this->Cat_PerPage);
        $page = $this->_request->getParam('page', 1);
        $paginator->setCurrentPageNumber($page);
        $this->view->paginator = $paginator;

       if(count($paginator) == 0)
       {
           $this->nodata();
       }

        $this->render('itemscat' ,null , true);

    }
    public function itemscatAction()
    {

        $modelCat =  $this->Cat_Model;
        $CatInfo = $modelCat->find($this->idGet)->current();
        $typName = $this->view->typName = $this->view->translate($this->translat_itemscat , LANG);
        $catName = $this->view->CatName = $CatInfo->catname;
        
        $this->view->PageTitle = $typName .' '. $catName ;
        $this->view->BlockName = $this->BlockName;

        $model =  $this->Data_Model;
        $adapter = $model->selectForPager($this->_selectBuild());
        $paginator = new Zend_Paginator($adapter);
        $paginator->setItemCountPerPage($this->Cat_PerPage);
        $page = $this->_request->getParam('page', 1);
        $paginator->setCurrentPageNumber($page);
        $this->view->paginator = $paginator;
        


       if(count($paginator) == 0 || $CatInfo->cattype != $this->cattype)
       {
           $this->_helper->viewRenderer->setNoRender();
           $this->nodata();
       }
       else
       {
           $this->render('itemscat' ,null , true);
       }

        
    }
    
    
    protected function _selectBuild()
    {
        $array1 = $this->selectOptions;
        $array2 = array('lang' => $this->lang , 'catid'=>$this->idGet);
        return  array_merge((array) $array1 , (array) $array2);
    }
    public function nodata()
    {
        echo '<div class="cat"><div class="noData">';
        echo $this->view->translate('global.nodata' , LANG);
        echo '</div></div>';
    }
}