<?php

/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 4/1/16
 * Time: 12:47
 */
class Member_data_provider extends CI_Model
{
    private $team_table;
    private $project_table;
    public $ci;

    function __construct()
    {
        parent::__construct();
        $this->team_table = "team_member";
        $this->project_table = "project_member";
        $this->ci = &get_instance();
    }

    public function save_team_member_info($data)
    {
        $this->db->insert($this->team_table, $data);
        if ($this->db->affected_rows() <= 0) {
            return false;
        }
        return true;
    }

    public function save_project_member_info($data)
    {
        $this->db->insert($this->project_table, $data);
        if ($this->db->affected_rows() <= 0) {
            return false;
        }
        return true;
    }

    public function get_team_member_list($team_id)
    {
        $sql = "SELECT * FROM $this->team_table WHERE team_id=$team_id";
        $team_member_list = $this->db->query($sql)->result_array();
        return $team_member_list;
    }

}