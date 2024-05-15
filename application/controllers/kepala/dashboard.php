<?php 

    class Dashboard extends CI_Controller{

        public function __construct(){
            parent::__construct();

            if ($this->session->userdata('level') != '3'){
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  Anda Belum Login!
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>');
                redirect('auth/login');
            }
        }
        
        public function index()
        {
            $data2['favorite'] = $this->perpus_model->get_data_favorite();
            $this->load->view('templates_kepala/header');
            $this->load->view('templates_kepala/sidebar');
            $this->load->view('kepala/dashboard');
            $this->load->view('statistik', $data2);
            $this->load->view('templates_kepala/footer');
        }
    }
?>