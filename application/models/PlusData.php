<?php
class Model_PlusData extends CL_Curd_CurdModel {
public $_name;

    public function selectForSearch($key)
    {
        $select = $this->select();
        $select->setIntegrityCheck(false);
        $select->from(array('a' => 'pages_blocks'), array('a.id as blockid'));
        $select->join(array('b' => 'pages'), 'a.pageid = b.id', array('b.*'), null);
        $select->where('a.title like ?' , $key.'%');
        $select->orWhere('a.data like ?' , $key.'%');
        $data = $this->fetchAll($select);
        return $data;
    }
    
    
}