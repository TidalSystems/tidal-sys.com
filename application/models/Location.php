<?php

class Model_Location  extends Zend_Db_Table_Abstract {

    protected $_name = 'Location';

    public function optionselect($optionname , $lang = 'null') {

        $select = $this->select();

        $select->where('optionname = ?', $optionname);

        $select->where('lang = ?', $lang);

        $data = $this->fetchRow($select);

        $key = unserialize($data['value']);

        return $key;

    }

    public function updateoneop($optionname, $values , $lang = 'null') {

        $select = $this->select();

        $select->where('optionname = ?', $optionname);

        $select->where('lang = ?', $lang);

        $row = $this->fetchRow($select);

        if ($row) {

            $row->value = serialize($values);

            $row->save();

        } else {

            $row = $this->createRow();

            $row->optionname = $optionname;

            $row->value = serialize($values);

            $row->lang = $lang;

            $row->save();

        }

        return true;

    }

}