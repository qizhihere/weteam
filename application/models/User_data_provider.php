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

    public function get_user_info($type, $mail, $password)
    {
        $sql = "SELECT * FROM $this->table WHERE type=$type AND mail='$mail' AND password='$password' LIMIT 1";
        $user_info_list = $this->db->query($sql)->result_array();
        if (count($user_info_list) <= 0) {
            return false;
        }
        return $user_info_list[0];
    }

    public function get_user_info_by_id($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id=$id LIMIT 1";
        $user_info_list = $this->db->query($sql)->result_array();
        if (count($user_info_list) <= 0) {
            return false;
        }
        return $user_info_list[0];
    }

    public function search_user_info($mail)
    {
        $sql = "SELECT * FROM $this->table WHERE mail='$mail'";
        $user_info_list = $this->db->query($sql)->result_array();
        if (count($user_info_list) <= 0) {
            return false;
        }
        return $user_info_list;
    }

}