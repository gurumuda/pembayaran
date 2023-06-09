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
                        <h4 class="page-title">Pembayaran</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Input</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pembayaran SPP</li>
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-success">
                                <h4>Formulir Pembayaran SPP</h4>
                            </div>
                            <?php echo form_open('tambah/inputPembayaran'); ?>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="nama_instansi" class="col-sm-12 text-right control-label col-form-label">Cari Siswa</label>
                                        <div class="col-sm-12">
                                            <select name="siswa" id="siswa" class="select2 form-control" required style="width: 100%">
                                                <option value="">-- Pilih Peserta Didik --</option>
                                                <?php foreach ($siswa as $sis): ?>
                                                    <option value="<?= $sis->nisn ?>"><?= $sis->nama.' ( '.$sis->nama_kelas.' )' ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group" id="pilih" style="display: none">
                                        <label for="" class="col-sm-12 text-center"><h4>Data Pembayaran</h4></label>
                                        <div class="col-sm-12" id="tampil_pilihan">
                                           
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
                        <?php echo $this->session->flashdata('cetak'); ?>
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