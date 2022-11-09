<?php
defined('BASEPATH') OR exit ('No Direct Script access allowed');
class Web extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){
        $data['inclue']= 'v_layanan.php'; 
       
        $this->load->view('v_index', $data);
        
}

    public function about(){
        
        $this->load->view('v_navbar');
        $this->load->view('v_layanan');

}
    public function tentang(){
        
        $this->load->view('tentang/v_navbar1');
        $this->load->view('tentang/v_tentang');
    }
}