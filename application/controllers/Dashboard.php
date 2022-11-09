<?php
defined('BASEPATH') OR exit ('No Direct Script access allowed');

class Dashboard extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        // cek session yang login,
        // jika session status tidak sama dengan session telah login, berarti pengguna belum login
        // maka halaman akan di alihkan kembali ke halaman login.
        if($this->session->userdata('status')!="telah_login"){
            redirect(base_url().'login?alert=belumlogin');
        }
    }
    public function index()
    {
        $this->load->view('dashboard/v_index');
    }
}