<?php

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('level') != '1') {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Anda Belum Login!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				  </button>
				</div>'
 
			);
				$this->session->unset_tempdata('pesan', 3); // Menghapus flash data 'pesan' setelah 3 detik

			redirect('auth/login');
		}
	}

	public function index()
	{
		$data['count_user'] = $this->perpus_model->get_count_user();
		$data['count_buku'] = $this->perpus_model->get_count_buku();
		$data['count_rak'] = $this->perpus_model->get_count_rak();
		$data['count_laporan'] = $this->perpus_model->get_count_laporan();
		$data2['favorite'] = $this->perpus_model->get_data_favorite();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('statistik', $data2);
		$this->load->view('templates_admin/footer');
	}
}
