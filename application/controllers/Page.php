<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("project_data_provider");
        $this->load->model("team_data_provider");
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
        $this->parser->parse("individual", $this->data);
    }

    public function team_page()
    {
        $this->parser->parse("team", $this->data);
    }

    public function member_add_page()
    {
        $this->parser->parse("member_add", $this->data);
    }

    public function member_find_page()
    {
        $this->parser->parse("member_find", $this->data);
    }

    public function project_add_page()
    {
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

}
