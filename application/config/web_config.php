<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 1/21/16
 * Time: 22:38
 */
// 版本
$config["v"] = 1;

// 默认
define("YES", 1);
define("NO", 0);

// 类别
define("INDIVIDUAL", 1);
define("TEAM", 2);

// 页面
define("LOGIN_PAGE", "home/login_page/");
define("REGISTER_PAGE", "home/register_page/");
define("INDIVIDUAL_PAGE", "home/individual_page/");
define("TEAM_PAGE", "home/team_page/");
define("MEMBER_ADD_PAGE", "home/member_add_page/");
define("MEMBER_FIND_PAGE", "home/member_find_page/");
define("PROJECT_ADD_PAGE", "home/project_add_page/");
define("PROJECT_SHOW_PAGE", "home/project_show_page/");
define("EDIT_PAGE", "home/edit_page/");