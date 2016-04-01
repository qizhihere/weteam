<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_data_provider');
        $this->load->model('team_data_provider');
        $this->data = array();
    }

    public function register_api()
    {
        $type = $this->input->post('type');
        $mail = $this->input->post('mail');
        $name = $this->input->post('name');
        $password = $this->input->post('password');
        $user_info = create_user_info($type, $mail, $name, $password);
        $res_user = $this->user_data_provider->save_user_info($user_info);
        if ($type == TEAM) {
            $team_info = create_team_info($res_user, $name);
            $res_team = $this->team_data_provider->save_team_info($team_info);
        }
        echo YES;
    }

    public function login_api()
    {
        $type = $this->input->post('type');
        $mail = $this->input->post('mail');
        $password = $this->input->post('password');
        $user_info = $this->user_data_provider->get_user_info($type, $mail, $password);
        if ($user_info) {
            echo YES;
        } else {
            echo NO;
        }
    }

    public function edit_team_api()
    {
        $data['id'] = $this->input->post('id');
        $data['name'] = $this->input->post('name');
        $data['content'] = $this->input->post('content');
        $res = $this->team_data_provider->update_team_info($data);
        echo YES;
    }

}