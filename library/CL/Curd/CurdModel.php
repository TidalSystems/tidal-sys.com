<?php



class CL_Curd_CurdModel extends Zend_Db_Table_Abstract {



   protected $_name;

    

   public function InsertRow($data) {

        $lang = Func_Lang::getLang();

        $data['lang'] = $lang;

        if(!isset($data['pageid']) OR $data['pageid'] != 0)

        {

            $data['level'] = 2;

        }

        else

        {

             $data['level'] = 1;

        }

        $row = $this->createRow();

        $row->setFromArray($data);

        $row->save();

        $id = $this->_db->lastInsertId();

        return $id;

    }






 public function InsertRowlog($data) {

        $lang = Func_Lang::getLang();

        $data['lang'] = $lang;

        $row = $this->createRow();

        $row->setFromArray($data);

        $row->save();

        $id = $this->_db->lastInsertId();

        return $id;

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
	
	
    public function edit($id, $data ) {

        $row = $this->find($id)->current();

        if ($row) {

            if($data['pageid'] != 0)

            {

                $data['level'] = 2;

            }

            else

            {

                 $data['level'] = 1;

            }

            $row->setFromArray($data);

            $row->save();

            return true;

        }

    }





	
    public function editlogs($id, $data ) {

        $row = $this->find($id)->current();

        if ($row) {

            $row->setFromArray($data);

            $row->save();

            return true;

        }

    }

    public function selectForPager($where = null , $order = 'id desc') {

        $select = $this->select();

        $select->order($order);

        $lang = Func_Lang::getLang();

        $select->where('lang = ?' , $lang) ;

        if($where != null)

        {

            foreach ($where as $key=>$values)

            {

               $select->where($key.' = ?' , $values) ;

            }

        }

    

        $adapter = new Zend_Paginator_Adapter_DbTableSelect($select);

        return $adapter;

    }

     public function selectForArray($where = null , $order = null , $limit= null) {

        $select = $this->select();

        $lang = Func_Lang::getLang();

        $select->where('lang = ?' , $lang) ;

        if($where != null)

        {

            foreach ($where as $key=>$values)

            {

               $select->where($key.' = ?' , $values) ;

            }

        }

        if($order != null)

        {

            foreach ($order as $key=>$values)

            {

               $select->order($key.' '. $values) ;

            }

        }

        if($limit != null)

        {

            $select->limit($limit);

        }

        

        $adapter = $this->fetchAll($select);

        return $adapter;

    }

     public function countRow($where = null) {

        $select = $this->select();

        $lang = Func_Lang::getLang();

        $select->where('lang = ?' , $lang) ;

        if($where != null)

        {

            foreach ($where as $key=>$values)

            {

               $select->where($key.' = ?' , $values) ;

            }

        }

        $adapter = $this->fetchAll($select)->count();

        return $adapter;

    }

    public function deleteRow($id)

    {

        $row = $this->find($id)->current();

        if($row)

        {

            $row->delete();

            return TRUE;

        }

        else

        {

            return FALSE;

        }

    }



}