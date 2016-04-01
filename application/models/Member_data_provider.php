<?php

/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 4/1/16
 * Time: 12:47
 */
class Member_data_provider extends CI_Model
{
    private $table;
    public $ci;

    function __construct()
    {
        parent::__construct();
        $this->table = "member";
        $this->ci = &get_instance();
    }

    public function save_member_info($data)
    {
        $this->db->insert($this->table, $data);
        if ($this->db->affected_rows() <= 0) {
            return false;
        }
        return true;
    }


}