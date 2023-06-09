        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Pengaturan</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Pengaturan</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Instansi</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Informasi Instansi</h4>
                            </div>
                            <?php echo form_open('ubah/instansi'); ?>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="nama_instansi" class="col-sm-3 text-right control-label col-form-label">Nama Instansi</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nama_instansi" class="form-control" id="nama_instansi" placeholder="Masukkan Nama Instansi Disini" value="<?php echo $instansi['nama'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="id_instansi" class="col-sm-3 text-right control-label col-form-label">Nomor Instansi / NPSN</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="id_instansi" class="form-control" id="id_instansi" placeholder="Masukkan Nomor Identitas / NPSN Disini" value="<?php echo $instansi['npsn'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-3 text-right control-label col-form-label">Alamat Instansi</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat Instansi Disini" rows="3"><?php echo $instansi['alamat'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 text-right control-label col-form-label">Alamat Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan Alamat Email instansi Disini" value="<?php echo $instansi['email'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="url" class="col-sm-3 text-right control-label col-form-label">Alamat Web</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="url" class="form-control" id="url" placeholder="Masukkan Alamat Web Disini" value="<?php echo $instansi['site'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tlp" class="col-sm-3 text-right control-label col-form-label">Nomor Tlp</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="tlp" class="form-control" id="tlp" placeholder="Masukkan Nomor Tlp Instansi Disini" value="<?php echo $instansi['telepon'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tp" class="col-sm-3 text-right control-label col-form-label">Tahun Pelajaran</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="tp" class="form-control" id="tp" placeholder="Masukkan Tahun Pelajaran Disini" value="<?php echo $instansi['th_pelajaran'] ?>">
                                        </div>
                                    </div>

                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                           <?php echo form_close(); ?>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Logo Instansi</h4>
                            </div>
                            <div class="card-body" style="text-align: center;">
                                <img src="<?= base_url('assets/images/').$instansi['logo'] ?>" width="150px" alt="">
                                <hr>
                                <?php echo form_open_multipart('ubah/logo'); ?>
                                    <div class="custom-file">
                                        <input type="file" name="logo" accept=".jpg, .png" class="custom-file-input" required>
                                        <label class="custom-file-label" for="validatedCustomFile">Pilih file logo</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                    <br><br>
                                    <button type="submit" class="btn btn-primary"> Ubah</button>
                                        
                                    
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                       
                    </div>
                </div>
                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->