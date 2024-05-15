<?php
class Perpus_model extends CI_model
{
	public function get_data($table)
	{
		return $this->db->get($table);
	}

	public function get_buku_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('buku');
		$this->db->like('title', $keyword);
		$this->db->or_like('kode_buku', $keyword);
		$this->db->or_like('thn_buku', $keyword);
		return $this->db->get()->result();
	}

	public function get_user_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->like('nrp', $keyword);
		$this->db->or_like('username', $keyword);
		$this->db->or_like('nama', $keyword);
		return $this->db->get()->result();
	}

	// public function get_pengembalian_keyword($keyword)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('laporan');
	// 	$this->db->or_like('id_user', $keyword);
	// 	return $this->db->get()->result();
	// }

	public function get_pengembalian_search_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('laporan');
		$this->db->like('status', $keyword);
		$this->db->or_like('id_user', $keyword);
		$this->db->or_like('id_buku', $keyword);
		$this->db->or_like('tgl_pinjam', $keyword);
		$this->db->or_like('tgl_kembali', $keyword);
		$this->db->or_like('pengembalian', $keyword);
		return $this->db->get()->result();
	}

	public function get_pinjam_search_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('laporan');
		$this->db->like('status', $keyword);
		$this->db->or_like('id_user', $keyword);
		$this->db->or_like('id_buku', $keyword);
		$this->db->or_like('tgl_pinjam', $keyword);
		$this->db->or_like('tgl_kembali', $keyword);
		$this->db->or_like('pengembalian', $keyword);
		return $this->db->get()->result();
	}

	public function get_where($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function update_data($table, $data, $where)
	{
		$this->db->update($table, $data, $where);
	}

	public function delete_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function ambil_id_buku($id)
	{
		$hasil = $this->db->where('id_buku', $id)->get('buku');
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		} else {
			return false;
		}
	}

	public function ambil_id_user($id)
	{
		$hasil = $this->db->where('id_user', $id)->get('user');
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		} else {
			return false;
		}
	}

	

	public function ambil_id_laporan($id)
	{
		$hasil = $this->db->where('id_laporan', $id)->get('laporan');
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		} else {
			return false;
		}
	}


	public function cek_login()
	{
		$username = set_value('username');
		$password = set_value('password');

		$result = $this->db->where('username', $username)
			->where('password', $password)
			->limit(1)
			->get('user');
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return FALSE;
		}
	}

	public function update_password($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function downloadPembayaran($id)
	{
		$query = $this->db->get_where('transaksi', array('id_rental' => $id));
		return $query->row_array();
	}

	public function edit_user($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function get_pengembalian_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('laporan');
		$this->db->or_like('id_user', $keyword);
		return $this->db->get()->result();
	}



	public function get_data_favorite()
	{
		$sql = "SELECT buku.title, count(*) as jumlah FROM laporan, buku WHERE laporan.id_buku = buku.id_buku Group BY laporan.id_buku LIMIT 10";
		$hasil = $this->db->query($sql);
		return $hasil->result();
	}

	public function get_count_user()
	{
		$sql = "SELECT count(id_user) as id_user from user";
		$result = $this->db->query($sql);
		return $result->row()->id_user;
	}

	public function get_count_buku()
	{
		$sql = "SELECT count(id_buku) as id_buku from buku";
		$result = $this->db->query($sql);
		return $result->row()->id_buku;
	}

	public function get_count_rak()
	{
		$sql = "SELECT count(id_rak) as id_rak from rak";
		$result = $this->db->query($sql);
		return $result->row()->id_rak;
	}

	public function get_count_laporan()
	{
		$sql = "SELECT count(id_laporan) as id_laporan from laporan";
		$result = $this->db->query($sql);
		return $result->row()->id_laporan;
	}

	// public function get_jml_buku($id_buku)
	// {
		// $sql = "SELECT jml from buku where id_buku = "
	// }
}
