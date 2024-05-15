<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <?php echo anchor('admin/data_user', '<div>Banyak Anggota</div>') ?></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count_user; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-journal-whills fa-2x text-gray-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                <?php echo anchor('admin/data_buku', '<div>Banyak Buku</div>') ?></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count_buku; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-swatchbook fa-2x text-gray-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><?php echo anchor('admin/data_rak', '<div>Banyak Rak</div>') ?></div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $count_rak; ?></div>
                                </div>

                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-address-book fa-2x text-gray-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                <?php echo anchor('admin/laporan', '<div>Banyak Transaksi</div>') ?></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count_laporan; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-address-card fa-2x text-gray-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <!-- <div class="row"> -->