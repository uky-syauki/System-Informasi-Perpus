<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>  Edit Data Pinjam</h3>

	<?php foreach ($laporan as $pjm) : ?>

		<form method="post" action="<?php echo base_url(). 'user/data_pinjam/update_pinjam_aksi'?>" enctype="multipart/form-data">
			<div class="form-group">
            <label>ID Laporan</label>
            <input type="text" name="id_laporan" class="form-control" value="<?php echo $pjm->id_laporan?>" readonly>
          	</div>

			<div class="form-grup">
            <label>ID User</label>
            <input type="text" name="id_user" class="form-control" value="<?php echo $pjm->id_user?>" readonly>
          	</div>

            <div class="form-grup">
            <label>ID Buku</label>
            <input type="text" name="id_buku" class="form-control" value="<?php echo $pjm->id_buku?>" readonly>
          	</div>

            <div class="form-grup">
                <label>Tanggal Pinjam</label>
                <input type="text" name="tgl_pinjam" class="form-control" value="<?php echo $pjm->tgl_pinjam?>" readonly>
            </div>

            <div class="form-grup">
                <label>Tanggal Kembali</label>
                <input id="kembali" type="text" name="tgl_kembali" class="form-control" value="<?php echo $pjm->tgl_kembali?>" readonly>
            </div>

             <div class="form-grup">
                <label>Tanggal Pengembalian</label>
                <input id="pengembalian" type="date" name="pengembalian" class="form-control disabled" value="<?php echo date('Y-m-d')?>">
            </div>

        	<div class="form-grup">
            <label>Status</label>
            <span class="text-danger"> *) Wajib Diubah</span>
            <input type="hidden" name="id_laporan" class="form-control" value="<?php echo $pjm->id_laporan?>">
            <select class="form-control" name="status" value="<?php echo $pjm->status?>">
            <option>--</option>
            <option>Dikembalikan</option>
            <option>Dipinjam</option>  
            </select>
           </div>

        	<div class="form-grup">
            <label>Denda</label>


            <span class="text-danger"></span>
            <input id="denda" type="text" name="denda" class="form-control" value="0">
         

			<br>
			<button type="submit" class="btn btn-info btn">Simpan</button>
			<?php echo anchor('user/pengembalian' , '<div class="btn btn_sm btn-danger">Kembali</div>')?>
		</form>

	<?php endforeach ; ?>
</div>
    <script>
        function update_denda(){
            
    // Assuming $pjm->tgl_pinjam contains a valid date string in 'YYYY-MM-DD' format
    pengembalian = document.getElementById('pengembalian').value;
    var dateNow = new Date(pengembalian); // Current date
    var dateOld = new Date('<?php echo $pjm->tgl_kembali; ?>'); // Convert $pjm->tgl_pinjam to Date object
    var timeDiff = dateNow.getTime() - dateOld.getTime(); // Difference in milliseconds
    var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); // Convert milliseconds to days
    if (diffDays > 0) document.getElementById('denda').value = 1000 * diffDays;
    else  document.getElementById('denda').value = 0;

        }
        document.getElementById('pengembalian').addEventListener('change', update_denda);
        document.onload = update_denda();
    
</script>