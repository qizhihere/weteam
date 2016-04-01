<?php

/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 4/1/16
 * Time: 09:02
 */
class User_data_provider extends CI_Model
{
    private $table;
    public $ci;

    function __construct()
    {
        parent::__construct();
        $this->table = "user";
        $this->ci = &get_instance();
    }

    public function save_user_info($data)
    {
        $this->db->insert($this->table, $data);
        if ($this->db->affected_rows() <= 0) {
            return false;
        }
        return true;
    }
}