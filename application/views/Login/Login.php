<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang </h1>
                                    <h1 class="h4 text-gray-900 mb-4">Di Pengadaan Polibatam </h1>

                                    <center><img class="img-fluid px-3 px-sm-3 mt-3 mb-5" style="width: 30rem;" src="<?php echo base_url(); ?>assets/img/Logo.jpg" alt="..."></center>
                                </div>

                                <form action="<?php echo base_url('login/ceklogin'); ?>" method="post">

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Enter Username...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Enter Password">
                                    </div>

                                    <button type="submit" class="btn btn-warning btn-user btn-block">
                                        Login
                                    </button>

                                    <?php echo form_close() ?>

                                    <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->