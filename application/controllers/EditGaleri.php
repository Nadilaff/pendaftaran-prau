<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EditGaleri extends CI_Controller
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

        $this->load->view('admin/edit_galeri', $data);
        $this->load->view('templates/admin_footer');
    }
}
