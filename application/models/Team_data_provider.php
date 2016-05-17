<?php

/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 4/1/16
 * Time: 09:02
 */
class Team_data_provider extends CI_Model
{
    private $table;
    public $ci;

    function __construct()
    {
        parent::__construct();
        $this->table = "team";
        $this->ci = &get_instance();
    }

    public function save_team_info($data)
    {
        $this->db->insert($this->table, $data);
        if ($this->db->affected_rows() <= 0) {
            return false;
        }
        return true;
    }

    public function get_team_info($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id=?";
        $team_info_list = $this->db->query($sql, $id)->result_array();
        if (count($team_info_list) <= 0) {
            return false;
        }
        return $team_info_list[0];
    }

    public function update_team_info($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->set($data);
        $this->db->update($this->table);
        if ($this->db->affected_rows() <= 0) {
            return false;
        }
        return true;
    }

}