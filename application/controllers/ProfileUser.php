<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfileUser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        cek_role();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('user/profile', $data);
        $this->load->view('templates/user_footer');
    }
}
