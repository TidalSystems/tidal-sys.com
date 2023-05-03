<?php

class Model_Requestnewsletter extends CL_Curd_CurdModel {

    protected $_name = 'requestnewsletter';

    

    public function InsertRow($data) {

        $func_lang = new Func_Lang();
        $lang = $func_lang->getLang();
        $row = $this->createRow();
        $row->setFromArray($data);
        $row->save();
        $id = $this->_db->lastInsertId();
        return $id;

    }

    public function edit($id, $data ) {

        $row = $this->find($id)->current();

        if ($row) {

            if($data['password'])

            {

                $data['password'] = ($data['password']);

            }

            $row->setFromArray($data);

            $row->save();

            return true;

        }

    }







  public function getUserByEmail($Email) {



        $select = $this->select();



        $select->where('email = ?', $Email);



        $row = $this->fetchRow($select);



        return $row;



    }





    public function selectForPager($where = null, $order = 'id desc')



    {



        $select = $this->select();



        if ($order != 'id desc') {



            $cols = $select->getTable()->_getCols();



            $newOrder = trim(substr($order, 0, stripos($order, ' ')));



            $order = in_array($newOrder, $cols) ? $order : 'id desc';



        }



        $select->order($order);



        if ($where != null) {



            foreach ($where as $key => $values) {



                $select->where($key . ' = ?', $values);



            }



        }



      $select->where('id IN(?)',range(6,500) );



        $adapter = new Zend_Paginator_Adapter_DbTableSelect($select);



        return $adapter;



    }



    





     public function selectForArray($where = null , $order = null , $limit= null, $add_lang = TRUE) {

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



}