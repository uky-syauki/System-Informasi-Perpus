<!DOCTYPE html>
<html>
<head>
    <title>SIP</title>
    
    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>

    <style>
        .line-title{
            border: 0;
            border-style: unset;
            border-top: 1px solid #000;
        }
    </style>
</head>
<body>

    <img src="<?php echo base_url()?>assets/img/logo1.png" style="position: absolute; width: 60px; height: auto;">

    <table style="width: 100%">
        <tr>
            <td align="center">
                <span style="line-height: 1.6; font-weight: bold;">
                    SISTEM INFORMASI PERPUSTAKAAN
                    <br>SMAN 18 MAKASSAR
                </span>
            </td>
        </tr>
    </table>


        <hr class="line-title">
        <p align="center">
            <b>Laporan Peminjaman Buku</b><br>
            <b>Tahun <?php echo date('M-Y')?></b>
        </p>
        <table class="table table-bordered table-striped">
        <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nomor Register Perpustakaan</th>
                    <th>Judul Buku</th>
                    <th>Kode Rak</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Denda</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                    <th>Pengarang</th>   
                </tr>
    

            <?php $no=1;
                foreach($laporan as $tr) : ?>
                    <tr>
                        <td><?php echo $no++?></td>
                        <td><?php echo $tr->nama ?></td>
                        <td><?php echo $tr->nrp ?></td>
                        <td><?php echo $tr->title ?></td>
                        <td><?php echo $tr->kode_rak ?></td>
                        <td><?php echo date('d/m/Y', strtotime($tr->tgl_pinjam)); ?></td>
                        <td>Rp. <?php echo $tr->denda ?></td>
                        <td>
                            <?php
                                if($tr->tgl_kembali == "0000-00-00")
                                {
                                    echo "-";
                                }else{
                                    echo date('d/m/Y', strtotime($tr->tgl_kembali));
                                }
                            ?>
                        </td>
                        <td><?php echo $tr->status ?></td>
                        <td><?php echo $tr->pengarang ?></td>
                        
                    </tr>
                <?php endforeach;  ?>
            </table>
    <script type="text/javascript">
        window.onload = window.print();
    </script>

</body>
</html>