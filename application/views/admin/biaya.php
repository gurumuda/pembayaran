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
                                    <li class="breadcrumb-item active" aria-current="page">Biaya</li>
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
                        <button type="button" data-toggle="modal" data-target="#Modal3" class="btn btn-success"><span class="mdi mdi-import"></span> Import Biaya</button><br><br>
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Biaya Ekonomi Kelas 1 (Atas)</h4>

                            </div>
                            <div class="card-body">
                                <div style="float: right">
                                    <button type="button" data-toggle="modal" data-target="#Modal1" class="btn btn-primary"><span class="mdi mdi-folder-plus"></span> Tambah Biaya</button>
                                    <button type="button" data-toggle="modal" data-target="#Modal2" class="btn btn-danger"><span class="mdi mdi-delete"></span> Hapus Semua Biaya</button>
                                     
                                    <br><br>                             
                                </div>

                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jenis Pembayaran</th>
                                                <th>Kode Pembayaran</th>
                                                <th>Deskripsi</th>
                                                <th>Status</th>
                                                <th>Jumlah</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $nom = 0; $no = 1; foreach ($biaya1 as $bia1): ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $bia1->jenis ?></td>
                                                <td><?php echo $bia1->kode ?></td>
                                                <td><?php echo $bia1->deskripsi ?></td>
                                                <td><?php echo $bia1->status ?></td>
                                                <td style="text-align: right"><span style="float: left">Rp. </span><?php echo rupiah($bia1->jumlah) ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('hapus/biaya/').$bia1->id_ ?>" onclick="return confirm('Anda akan menghapus data <?php echo $bia1->deskripsi ?>')" class="badge badge-pill badge-danger"><span class="mdi mdi-delete"></span> Hapus</a> | <button type="button" class="badge badge-pill badge-warning ubah_biaya_atas" data-id="<?php echo $bia1->id_ ?>"><span class="mdi mdi-credit-card"></span> Ubah</button>
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




            <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Biaya Ekonomi Kelas 2 (Menengah)</h4>

                            </div>
                            <div class="card-body">
                                <div style="float: right">
                                    <button type="button" data-toggle="modal" data-target="#Modal4" class="btn btn-primary"><span class="mdi mdi-folder-plus"></span> Tambah Biaya</button>
                                    <button type="button" data-toggle="modal" data-target="#Modal5" class="btn btn-danger"><span class="mdi mdi-delete"></span> Hapus Semua Biaya</button>
                                    <br><br>                             
                                </div>

                                <div class="table-responsive">
                                    <table id="zero_config1" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jenis Pembayaran</th>
                                                <th>Kode Pembayaran</th>
                                                <th>Deskripsi</th>
                                                <th>Status</th>
                                                <th>Jumlah</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $nom = 0; $no = 1; foreach ($biaya2 as $bia2): ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $bia2->jenis ?></td>
                                                <td><?php echo $bia2->kode ?></td>
                                                <td><?php echo $bia2->deskripsi ?></td>
                                                <td><?php echo $bia2->status ?></td>
                                                <td style="text-align: right"><span style="float: left">Rp. </span><?php echo rupiah($bia2->jumlah) ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('hapus/biaya/').$bia2->id_ ?>" onclick="return confirm('Anda akan menghapus data <?php echo $bia2->deskripsi ?>')" class="badge badge-pill badge-danger"><span class="mdi mdi-delete"></span> Hapus</a> | <button type="button" class="badge badge-pill badge-warning ubah_biaya_atas" data-id="<?php echo $bia2->id_ ?>"><span class="mdi mdi-credit-card"></span> Ubah</button>
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





            <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Biaya Ekonomi Kelas 3 (Bawah)</h4>

                            </div>
                            <div class="card-body">
                                <div style="float: right">
                                    <button type="button" data-toggle="modal" data-target="#Modal7" class="btn btn-primary"><span class="mdi mdi-folder-plus"></span> Tambah Biaya</button>
                                    <button type="button" data-toggle="modal" data-target="#Modal8" class="btn btn-danger"><span class="mdi mdi-delete"></span> Hapus Semua Biaya</button>
                                    <br><br>                             
                                </div>

                                <div class="table-responsive">
                                    <table id="zero_config2" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jenis Pembayaran</th>
                                                <th>Kode Pembayaran</th>
                                                <th>Deskripsi</th>
                                                <th>Status</th>
                                                <th>Jumlah</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $nom = 0; $no = 1; foreach ($biaya3 as $bia3): ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $bia3->jenis ?></td>
                                                <td><?php echo $bia3->kode ?></td>
                                                <td><?php echo $bia3->deskripsi ?></td>
                                                <td><?php echo $bia3->status ?></td>
                                                <td style="text-align: right"><span style="float: left">Rp. </span><?php echo rupiah($bia3->jumlah) ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('hapus/biaya/').$bia3->id_ ?>" onclick="return confirm('Anda akan menghapus data <?php echo $bia3->deskripsi ?>')" class="badge badge-pill badge-danger"><span class="mdi mdi-delete"></span> Hapus</a> | <button type="button" class="badge badge-pill badge-warning ubah_biaya_atas" data-id="<?php echo $bia3->id_ ?>"><span class="mdi mdi-credit-card"></span> Ubah</button>
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
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Biaya Ekonomi Kelas 1 (Atas)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true ">&times;</span>
                        </button>
                    </div>
                    <?php echo form_open('tambah/biaya'); ?>
                    <input type="hidden" name="kategori" value="1">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="jenis" class="col-sm-3 text-right control-label col-form-label">Jenis</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis" class="form-control" id="jenis" placeholder="Masukkan Jenis Pembayaran" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kode" class="col-sm-3 text-right control-label col-form-label">Kode</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode" class="form-control" id="kode" placeholder="Masukkan Kode Pembayaran" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-sm-3 text-right control-label col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control" placeholder="Masukkan Deskripsi Pembayaran Disini"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-sm-3 text-right control-label col-form-label">Jumlah</label>
                            <div class="col-sm-9">
                                <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="Masukkan Jumlah Pembayaran Disini" required="">
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
                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Semua Biaya Kelas 1 (Atas)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true ">&times;</span>
                        </button>
                    </div>
                    <?php echo form_open('hapus/semuaBiaya/1'); ?>
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
                        <h5 class="modal-title" id="exampleModalLabel">Import Biaya</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true ">&times;</span>
                        </button>
                    </div>
                    <?php echo form_open_multipart('tambah/importBiaya'); ?>
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
        <div class="modal fade" id="Modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
            <div class="modal-dialog" role="document ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Biaya Ekonomi Kelas 2 (Menengah)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true ">&times;</span>
                        </button>
                    </div>
                    <?php echo form_open('tambah/biaya'); ?>
                    <input type="hidden" name="kategori" value="2">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="jenis" class="col-sm-3 text-right control-label col-form-label">Jenis</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis" class="form-control" id="jenis" placeholder="Masukkan Jenis Pembayaran" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kode" class="col-sm-3 text-right control-label col-form-label">Kode</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode" class="form-control" id="kode" placeholder="Masukkan Kode Pembayaran" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-sm-3 text-right control-label col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control" placeholder="Masukkan Deskripsi Pembayaran Disini"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-sm-3 text-right control-label col-form-label">Jumlah</label>
                            <div class="col-sm-9">
                                <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="Masukkan Jumlah Pembayaran Disini" required="">
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
        <div class="modal fade" id="Modal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
            <div class="modal-dialog" role="document ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Semua Biaya Kelas 2 (Menengah)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true ">&times;</span>
                        </button>
                    </div>
                    <?php echo form_open('hapus/semuaBiaya/2'); ?>
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
        <div class="modal fade" id="Modal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
            <div class="modal-dialog" role="document ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Biaya Ekonomi Kelas 3 (Bawah)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true ">&times;</span>
                        </button>
                    </div>
                    <?php echo form_open('tambah/biaya'); ?>
                    <input type="hidden" name="kategori" value="3">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="jenis" class="col-sm-3 text-right control-label col-form-label">Jenis</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis" class="form-control" id="jenis" placeholder="Masukkan Jenis Pembayaran" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kode" class="col-sm-3 text-right control-label col-form-label">Kode</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode" class="form-control" id="kode" placeholder="Masukkan Kode Pembayaran" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-sm-3 text-right control-label col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control" placeholder="Masukkan Deskripsi Pembayaran Disini"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-sm-3 text-right control-label col-form-label">Jumlah</label>
                            <div class="col-sm-9">
                                <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="Masukkan Jumlah Pembayaran Disini" required="">
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
        <div class="modal fade" id="Modal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
            <div class="modal-dialog" role="document ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Semua Biaya Kelas 3 (Bawah)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true ">&times;</span>
                        </button>
                    </div>
                    <?php echo form_open('hapus/semuaBiaya/3'); ?>
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
        <div class="modal fade" id="modal_ubah_biaya_atas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
            <div class="modal-dialog" role="document ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data Biaya</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true ">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo base_url('ubah/biaya') ?>" method="post" id="form_ubah_biaya">
                    <input type="hidden" name="id" >
                    <input type="hidden" name="kategori" >
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="jenis" class="col-sm-3 text-right control-label col-form-label">Jenis</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis" class="form-control" id="jenis" placeholder="Masukkan Jenis Pembayaran" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kode" class="col-sm-3 text-right control-label col-form-label">Kode</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode" class="form-control" id="kode" placeholder="Masukkan Kode Pembayaran" required="">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="kode" class="col-sm-3 text-right control-label col-form-label">Kode</label>
                            <div class="col-sm-9">
                                <select name="kategori" id="kategori" required="" class="form-control">
                                    <option value="1">Atas</option>
                                    <option value="2">Menengah</option>
                                    <option value="3">Bawah</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-sm-3 text-right control-label col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control" placeholder="Masukkan Deskripsi Pembayaran Disini"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-sm-3 text-right control-label col-form-label">Jumlah</label>
                            <div class="col-sm-9">
                                <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="Masukkan Jumlah Pembayaran Disini" required="">
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