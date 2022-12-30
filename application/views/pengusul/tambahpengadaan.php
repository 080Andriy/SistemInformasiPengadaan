


    <div class="container">

<div class="card o-hidden border-0 shadow-lg my-5 col-lg-12 mx-auto">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            
            <div class="col-lg">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Tambah Borang Pengadaan</h1>
                    </div>
                    <center><img class="img-fluid px-3 px-sm-3 mt-3 mb-5" style="width: 30rem;"
                                    src="<?php echo base_url(); ?>assets/img/pgd1.jpg" alt="..."></center>
                    <form class="user" method="post" action="<?=base_url('auth/ajukanborangpengadaan') ?>">
                        
                    <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="name" name="name"
                                placeholder="Nama Barang">       
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="email" name="email" 
                                placeholder="Spesifikasi">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="email" name="email" 
                                placeholder="Satuan">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="email" name="email" 
                                placeholder="Volume">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="email" name="email" 
                                placeholder="Harga Satuan">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="email" name="email" 
                                placeholder="Total Harga">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="email" name="email" 
                                placeholder="Pdn/Impor">
                        </div>
                        </div>
                        <button type="submit" class="btn btn-warning btn-user btn-block">
                            Tambah 
                        </button>
                        </a>
                        
                    </form>
                    <hr>
                    
                    <div class="text-center">
                        <a class="small" href="<?= base_url(); ?>auth/ajukanpengadaan">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

