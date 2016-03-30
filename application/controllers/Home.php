<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->data = array();
    }

    public function index()
    {
        $this->parser->parse("test", $this->data);
    }

    public function register()
    {
        $this->parser->parse("register", $this->data);
    }

    public function login()
    {
        $this->parser->parse("login", $this->data);
    }

    public function individual()
    {
        $this->parser->parse("individual", $this->data);
    }

    public function team()
    {
        $this->parser->parse("team", $this->data);
    }

    public function add_member()
    {
        $this->parser->parse("add_member", $this->data);
    }

    public function find_member()
    {
        $this->parser->parse("find_member", $this->data);
    }

    public function create_project()
    {
        $this->parser->parse("create_project", $this->data);
    }

    public function about_project()
    {
        $this->parser->parse("about_project", $this->data);
    }

    public function edit()
    {
        $this->parser->parse("edit", $this->data);
    }

}
