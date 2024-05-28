<?php 

/**
 * 
 */
class Laporan extends CI_Controller
{
	
	public function index()
	{

		$dari = $this->input->post('dari');
		$sampai = $this->input->post('sampai');

		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/filter_laporan');
			$this->load->view('templates_admin/footer');
		}else{
		$data['laporan'] = $this->db->query("SELECT * FROM laporan tr, user mb, buku cs WHERE tr.id_user=mb.id_user AND tr.id_buku=cs.id_buku AND date(tr.tgl_pinjam) >= '$dari' AND date(tr.tgl_pinjam) <='$sampai' ")->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/tampilkan_laporan',$data);
			$this->load->view('templates_admin/footer');
		}
		
	}

	public function print_laporan()
	{
		$dari = $this->input->get('dari');
		$sampai = $this->input->get('sampai');
		$data['title'] = "Print Laporan Transaksi";
		

		$data['laporan'] = $this->db->query("SELECT * FROM laporan tr, user mb, buku cs WHERE tr.id_user=mb.id_user AND tr.id_buku=cs.id_buku AND date(tr.tgl_pinjam) >= '$dari' AND date(tr.tgl_pinjam) <='$sampai' ")->result();

		$this->load->view('templates_admin/header',$data);
		$this->load->view('admin/print_laporan',$data);
		echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>';
	}
	

	public function _rules()
	{
		$this->form_validation->set_rules('dari','Dari Tanggal','required');
		$this->form_validation->set_rules('sampai','Sampai Tanggal','required');
	}
}

?>