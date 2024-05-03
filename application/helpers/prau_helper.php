<?php

function cek_login()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    }
}

function cek_role()
{
    $ci = get_instance();
    $url = $ci->uri->segment(1);
    $array = array(0 => 'admin', 1 => 'adminulasanuser', 2 => 'adminulasanweb', 3 => 'editgaleri', 4 => 'editjalur', 5 => 'galeri', 6 => 'historyedit', 7 => 'kalender', 8 => 'pesanandata');

    if (array_search($url, $array) & $ci->session->userdata('role_id') == 2) {
        redirect('user');
    }
}
