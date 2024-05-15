
<body class="bg-gradient-success">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="p-5">

                            <div class="col-lg-12">
                                <div class="p-4">
                                    <div class="text-center">
                                        <img src="<?php echo base_url('') ?>assets/img/logo1.png" alt="logo" width="100" class="shadow-light rounded-circle">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
                                    </div>

                                    <?php echo $this->session->flashdata('pesan') ?>
                                    <form method="post" action="<?php echo base_url('auth/login') ?>" class="user">
                                        <div class="form-group">
                                            <input id="username" type="text" class="form-control form-control-user" name="username" tabindex="1" autofocus placeholder="Masukan Username">
                                            <?php echo form_error('username', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control form-control-user" name="password" tabindex="2" placeholder="Masukan Password">
                                            <?php echo form_error('password', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="3">
                                            Login
                                        </button>
                                    </form>
                                    <hr>

                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url('register'); ?>">Belum Punya Akun? Silahkan Daftar!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

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

    </html>