<?php

/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 4/1/16
 * Time: 13:02
 */
class Project_data_provider extends CI_Model
{
    private $table;
    public $ci;

    function __construct()
    {
        parent::__construct();
        $this->table = "project";
        $this->ci = &get_instance();
    }

    public function save_project_info($data)
    {
        $this->db->insert($this->table, $data);
        if ($this->db->affected_rows() <= 0) {
            return false;
        }
        return true;
    }

    public function get_project_info($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id=$id LIMIT 1";
        $project_info_list = $this->db->query($sql)->result_array();
        if (count($project_info_list <= 0)) {
            return false;
        }
        return $project_info_list[0];
    }

}