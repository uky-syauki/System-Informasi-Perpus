<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">

                         
        <!-- Begin Page Content -->
        <div class="container-fluid" style="text-align: center">

            <!-- Page Heading -->
            <h1 class="h3 mb-1 text-gray-800">Hallo, <?php echo $this->session->userdata('username') ?></h1>
            <p class="mb-4">Saat ini Anda Sedang Mengakses Sistem Informasi Perpustakaan SMAN 18 Makassar</p>
            <?php
                $jml_buku = $this->db->get_where('buku', array('id_buku' => 33))->row()->jml;
                echo "<p>$jml_buku</p>";
            ?>
         </div>
    </div>
</div>

                