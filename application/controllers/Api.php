<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller
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

    public function register_api()
    {
        $type = $this->input->post('type');
        $mail = $this->input->post('mail');
        $name = $this->input->post('name');
        $password = $this->input->post('password');
        $user_info = create_user_info($type, $mail, $name, $password);
        $res_user = $this->user_data_provider->save_user_info($user_info);
        if ($type == TEAM) {
            $team_info = create_team_base_info($res_user, $name);
            $res_team = $this->team_data_provider->save_team_info($team_info);
        }
        $this->data["result"] = "注册成功";
        $this->data["url"] = LOGIN_PAGE;
        $this->parser->parse("tips_redirect_page", $this->data);
    }

    public function login_api()
    {
        $type = $this->input->post('type');
        $mail = $this->input->post('mail');
        $password = $this->input->post('password');
        $user_info = $this->user_data_provider->get_user_info($type, $mail, $password);
        if (!$user_info) {
            $this->data["result"] = "用户不存在或密码错误";
            $this->data["url"] = LOGIN_PAGE;
        } else {
            if ($type == INDIVIDUAL) {
                $this->data["result"] = "登陆成功";
                $this->data["url"] = INDIVIDUAL_PAGE;
            } else if ($type == TEAM) {
                $this->data["result"] = "登陆成功";
                $this->data["url"] = TEAM_PAGE;
            }
        }
        $this->parser->parse("tips_redirect_page", $this->data);
    }

    public function edit_api()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $content = $this->input->post('content');
        $team_info = create_team_info($id, $name, $content);
        $res = $this->team_data_provider->update_team_info($team_info);
        $this->data["result"] = "修改成功";
        $this->data["url"] = TEAM_PAGE . "?id=" . $id;
        $this->parser->parse("tips_redirect_page", $this->data);
    }

    public function member_add_api()
    {
        $individual_id = $this->input->post('individual_id');
        $team_id = $this->input->post('team_id');
        $team_member_info = create_team_member_info($individual_id, $team_id);
        $res = $this->member_data_provider->save_team_member_info($team_member_info);
        echo YES;
    }

    public function member_search_api()
    {
        $id = $this->input->post('id');
        $mail = $this->input->post('mail');
        $user_list = $this->user_data_provider->search_user_info($mail);
        $this->data["user_list"] = $user_list;
        $this->data["id"] = $id;
//        echo json_encode($user_info_list, JSON_UNESCAPED_UNICODE);
        $this->parser->parse("member_find", $this->data);
    }

    public function project_save_api()
    {
        $team_id = $this->input->post('team_id');
        $project_name = $this->input->post('project_name');
        $user_name = $this->input->post('user_name');
        $user_phone = $this->input->post('user_phone');
        $time = $this->input->post('time');
        $content = $this->input->post('content');
        $project_info = create_project_info($team_id, $project_name, $user_name, $user_phone, $time, $content);
        $res = $this->project_data_provider->save_project_info($project_info);
        $this->data["result"] = "添加成功";
        $this->data["url"] = TEAM_PAGE . "?id=" . $team_id;
        $this->parser->parse("tips_redirect_page", $this->data);
    }

    public function project_add_api()
    {
        $individual_id = $this->input->post('individual_id');
        $project_id = $this->input->post('project_id');
        $project_member_info = create_team_member_info($individual_id, $project_id);
        $res = $this->member_data_provider->save_project_member_info($project_member_info);

    }

}