<?php

class Index_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function indexList()
    {
        return $this->db->select('SELECT * FROM user',
                array());
    }

    public function indexSingleList($userid)
    {
        return $this->db->select('SELECT * FROM user WHERE userid = :userid',
            array('userid' => $userid));
    }
}
