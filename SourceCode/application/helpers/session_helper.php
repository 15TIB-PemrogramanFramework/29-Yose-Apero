<?php


defined('BASEPATH') OR exit('No direct script access allowed');
function admin_logged_in()
{
    $CI =& get_instance();
    $is_logged_in = $CI->session->userdata('username_admin');
    if(!isset($is_logged_in) || $is_logged_in != true)
    {
        redirect("Home_Admin/index");
    }     
}
function member_logged_in()
{
    $CI =& get_instance();
    $is_logged_in = $CI->session->userdata('username');
    if(!isset($is_logged_in) || $is_logged_in != true)
    {
        redirect("Home_Member/index");
    }
}


?>