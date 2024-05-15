<?php 

	class Alert extends CI_Controller{
		public function __construct(){
			parent::__construct();

			if ($this->session->userdata('level') != '2'){
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Anda Belum Login lah!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<script>
				window.onload = () => {
					setTimeout(() => {
					    var alertElement = document.getElementsByClassName("alert")[0]; // Ambil elemen alert
					    if (alertElement) { // Periksa apakah ada elemen alert
						   alertElement.parentNode.removeChild(alertElement); // Hapus elemen alert dari DOM
					    }
					}, 1000); // 5000 milidetik = 5 detik
				 };
	 </script>
				');
				
				redirect('auth/login');
			}
		}

		public function index()
		{
			$this->load->view('templates_user/header');
			$this->load->view('templates_user/sidebar');
			$this->load->view('user/alert');
			$this->load->view('templates_user/footer');
		}
	}
?>