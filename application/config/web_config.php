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
define("LOGIN_PAGE", "page/login_page/");
define("REGISTER_PAGE", "page/register_page/");
define("INDIVIDUAL_PAGE", "page/individual_page/");
define("TEAM_PAGE", "page/team_page/");
define("MEMBER_ADD_PAGE", "page/member_add_page/");
define("MEMBER_FIND_PAGE", "page/member_find_page/");
define("PROJECT_ADD_PAGE", "page/project_add_page/");
define("PROJECT_SHOW_PAGE", "page/project_show_page/");
define("EDIT_PAGE", "page/edit_page/");

// 操作
define("REGISTER_API", "api/register_api/");
define("LOGIN_API", "api/login_api/");
define("EDIT_API", "api/edit_api/");