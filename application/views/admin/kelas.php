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
                                    <li class="breadcrumb-item active" aria-current="page">Kelas</li>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Kelas</h4>

                            </div>
                            <div class="card-body">
                                <div style="float: right">
                                    <button type="button" data-toggle="modal" data-target="#Modal1" class="btn btn-primary"><span class="mdi mdi-folder-plus"></span> Tambah Kelas</button>
                                    <button type="button" data-toggle="modal" data-target="#Modal2" class="btn btn-danger"><span class="mdi mdi-delete"></span> Hapus Semua Kelas</button>
                                    <button type="button" data-toggle="modal" data-target="#Modal3" class="btn btn-success"><span class="mdi mdi-import"></span> Import Kelas</button> 
                                    <br><br>                             
                                </div>

                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Kelas</th>
                                                <th>Nama Kelas</th>
                                                <th>Level</th>
                                                <th>Jurusan</th>
                                                <th>Jumlah Siswa</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $nom = 0; $no = 1; foreach ($kelas as $kls): ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $kls->kode_kelas ?></td>
                                                <td><?php echo $kls->nama_kelas ?></td>
                                                <td><?php echo $kls->level ?></td>
                                                <td><?php echo $kls->kode_jurusan ?></td>
                                                <td><?php echo $jumlah[$nom++] ?> Orang</td>
                                                <td>
                                                    <a href="<?php echo base_url('hapus/kelas/').$kls->id_ ?>" onclick="return confirm('Anda akan menghapus data kelas <?php echo $kls->nama_kelas ?>')" class="badge badge-pill badge-danger"><span class="mdi mdi-delete"></span> Hapus</a> | <button type="button" class="badge badge-pill badge-warning ubah-data-kelas" data-id="<?php echo $kls->id_ ?>"><span class="mdi mdi-credit-card"></span> Ubah</button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

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

        <!-- Modal -->
        <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
            <div class="modal-dialog" role="document ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kelas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true ">&times;</span>
                        </button>
                    </div>
                    <?php echo form_open('tambah/kelas'); ?>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="kode_kelas" class="col-sm-3 text-right control-label col-form-label">Kode Kelas</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode_kelas" class="form-control" id="kode_kelas" placeholder="Masukkan Kode Kelas Disini" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_kelas" class="col-sm-3 text-right control-label col-form-label">Nama Kelas</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_kelas" class="form-control" id="nama_kelas" placeholder="Masukkan Nama Kelas Disini" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="level" class="col-sm-3 text-right control-label col-form-label">Level Kelas</label>
                            <div class="col-sm-9">
                                <input type="text" name="level" class="form-control" id="level" placeholder="Masukkan Level Kelas Disini" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kode_jurusan" class="col-sm-3 text-right control-label col-form-label">Kode Jurusan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode_jurusan" class="form-control" id="kode_jurusan" placeholder="Masukkan Kode Jurusan Disini" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary"> Simpan</button>
                            </div>
                        </div>

                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
            <div class="modal-dialog" role="document ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Semua Kelas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true ">&times;</span>
                        </button>
                    </div>
                    <?php echo form_open('hapus/semuaKelas'); ?>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="pass" class="col-sm-3 text-right control-label col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="text" name="pass" class="form-control" id="pass" placeholder="PASSWORD" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-danger"> Hapus</button>
                            </div>
                        </div>

                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
            <div class="modal-dialog" role="document ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Import Kelas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true ">&times;</span>
                        </button>
                    </div>
                    <?php echo form_open_multipart('tambah/importKelas'); ?>
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <a href="" class="btn btn-success btn-block"><span class="mdi mdi-download"></span> Download Format Import</a>
                            </div>
                        </div>
                        <hr>
                        <div class="custom-file">
                            <input type="file" name="logo" accept=".xlsx" class="custom-file-input" required>
                            <label class="custom-file-label" for="validatedCustomFile">Pilih Data Import</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                        <div class="form-group row" style="margin-top: 10px">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary"><span class="mdi mdi-upload"></span> Import</button>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal-edit-kelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
            <div class="modal-dialog" role="document ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah Data Kelas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true ">&times;</span>
                        </button>
                    </div>
              
                    <form action="<?php echo base_url('ubah/datakelas') ?>" method="post" id="form_ubah_data_kelas">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="kode_kelas" class="col-sm-3 text-right control-label col-form-label">Kode Kelas</label>
                            <div class="col-sm-9">
                                <input type="hidden" name="id_ed_k" value="">
                                <input type="text" name="kode_kelas_ed" class="form-control" id="kode_kelas" placeholder="Masukkan Kode Kelas Disini" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_kelas" class="col-sm-3 text-right control-label col-form-label">Nama Kelas</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_kelas_ed" class="form-control" id="nama_kelas" placeholder="Masukkan Nama Kelas Disini" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="level" class="col-sm-3 text-right control-label col-form-label">Level Kelas</label>
                            <div class="col-sm-9">
                                <input type="text" name="level_ed" class="form-control" id="level" placeholder="Masukkan Level Kelas Disini" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kode_jurusan" class="col-sm-3 text-right control-label col-form-label">Kode Jurusan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode_jurusan_ed" class="form-control" id="kode_jurusan" placeholder="Masukkan Kode Jurusan Disini" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary"> Simpan</button>
                            </div>
                        </div>

                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>