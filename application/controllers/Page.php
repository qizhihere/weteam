<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_data_provider');
        $this->load->model('team_data_provider');
        $this->load->model('member_data_provider');
        $this->load->model('project_data_provider');
        $this->data = array();
    }

    public function index()
    {
        $this->parser->parse("test", $this->data);
    }

    public function login_page()
    {
        $this->parser->parse("login", $this->data);
    }

    public function register_page()
    {
        $this->parser->parse("register", $this->data);
    }

    public function individual_page()
    {
        $id = $this->input->get("id");
        $user_info = $this->user_data_provider->get_user_info_by_id($id);
        if (!$user_info) {
            exit("用户不存在");
        }
        $this->data["user_info"] = $user_info;
        $this->parser->parse("individual", $this->data);
    }

    public function team_page()
    {
        $id = $this->input->get("id");
        $team_info = $this->team_data_provider->get_team_info($id);
        if (!$team_info) {
            exit("用户不存在");
        }
        $user_list = array();
        $team_member_list = $this->member_data_provider->get_team_member_list($id);
        foreach ($team_member_list as $team_member_info) {
            $user_list[] = $this->user_data_provider->get_user_info_by_id($team_member_info["individual_id"]);
        }
        $project_list = $this->project_data_provider->get_project_list();
        $this->data["team_info"] = $team_info;
        $this->data["user_list"] = $user_list;
        $this->data["project_list"] = $project_list;
        $this->parser->parse("team", $this->data);
    }

    public function member_add_page()
    {
        $id = $this->input->get("id");
        $this->data["id"] = $id;
        $this->parser->parse("member_add", $this->data);
    }

    public function member_find_page()
    {
        $this->parser->parse("member_find", $this->data);
    }

    public function project_add_page()
    {
        $id = $this->input->get("id");
        $this->data["id"] = $id;
        $this->parser->parse("project_add", $this->data);
    }

    public function project_show_page()
    {
        $id = $this->input->get("id");
        $this->data["project_info"] = $this->project_data_provider->get_project_info($id);
        $this->parser->parse("project_show", $this->data);
    }

    public function edit_page()
    {
        $id = $this->input->get("id");
        $this->data["team_info"] = $this->team_data_provider->get_team_info($id);
        $this->parser->parse("edit", $this->data);
    }

    public function tips_redirect_page()
    {
        $this->parser->parse("tips_redirect_page", $this->data);
    }

}
