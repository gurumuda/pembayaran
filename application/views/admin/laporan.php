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
                <h4 class="page-title">Laporan</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Laporan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Per Siswa</li>
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
                        <h4>Laporan Singkat Per Siswa</h4>

                    </div>
                    <div class="card-body">
                        <!-- <div style="float: right">
                                    <button type="button" data-toggle="modal" data-target="#Modal1" class="btn btn-primary"><span class="mdi mdi-folder-plus"></span> Tambah Siswa</button>
                                    <button type="button" data-toggle="modal" data-target="#Modal2" class="btn btn-danger"><span class="mdi mdi-delete"></span> Hapus Semua Siswa</button>
                                    <button type="button" data-toggle="modal" data-target="#Modal3" class="btn btn-success"><span class="mdi mdi-import"></span> Import Siswa</button> 
                                    <br><br>                             
                                </div> -->


                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>

                                        <th>No</th>
                                        <th>Nama Siswa</th>
                                        <th>Nama Kelas</th>
                                        <?php foreach ($jenis_biaya as $jns) : ?>
                                            <th><?php echo $jns->jenis ?></th>
                                        <?php endforeach; ?>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($siswa as $siswa) : ?>
                                        <tr>

                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $siswa->nama ?></td>
                                            <td><?php echo $siswa->nama_kelas ?></td>
                                            <?php
                                            foreach ($jenis_biaya as $key) {

                                                $this->db->where('nisn', $siswa->nisn);
                                                $this->db->where('jenis', $key->jenis);
                                                $t = $this->db->get('tbl_pembayaran')->result_array();

                                                $d = array();
                                                foreach ($t as $tt) {
                                                    array_push($d, ($tt['jumlah']));
                                                }

                                                echo '<td nowrap style="text-align: right;"><span style="float:left; margin-right: 20px">Rp.</span>' . rupiah(array_sum($d)) . '</td>';
                                            }
                                            ?>

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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true ">&times;</span>
                    </button>
                </div>
                <?php echo form_open('tambah/siswa'); ?>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 text-right control-label col-form-label">Nama Siswa</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Siswa Disini" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nisn" class="col-sm-3 text-right control-label col-form-label">Nisn</label>
                        <div class="col-sm-9">
                            <input type="number" name="nisn" class="form-control" id="nisn" placeholder="Masukkan NISN Disini" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jk" class="col-sm-3 text-right control-label col-form-label">JK</label>
                        <div class="col-sm-9">
                            <select name="jk" id="jk" class="form-control" required="">
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="1">Laki-laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tempat_lahir" class="col-sm-3 text-right control-label col-form-label">Tmp Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Masukkan Tempat Lahir Disini" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tg_lahir" class="col-sm-3 text-right control-label col-form-label">Tg Lahir</label>
                        <div class="col-sm-9">
                            <input type="date" name="tg_lahir" class="form-control" placeholder="Pilih Tanggal" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kode_kelas" class="col-sm-3 text-right control-label col-form-label">Kelas</label>
                        <div class="col-sm-9">
                            <select name="kode_kelas" id="kode_kelas" class="select2 form-control" style="width: 100%; height:35px;">
                                <option value="">-- Pilih kelas --</option>
                                <?php foreach ($kelas as $k) : ?>
                                    <option value="<?php echo $k->kode_kelas ?>"><?php echo $k->nama_kelas ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kategori" class="col-sm-3 text-right control-label col-form-label">Kategori</label>
                        <div class="col-sm-9">
                            <select name="kategori" id="kategori" class="form-control">
                                <option value="">-- Pilih Kategori Ekonomi --</option>
                                <option value="1">Atas</option>
                                <option value="2">Menengah</option>
                                <option value="3">Bawah</option>
                            </select>
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
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Semua Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true ">&times;</span>
                    </button>
                </div>
                <?php echo form_open('hapus/semuaPembayaran'); ?>
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
                    <h5 class="modal-title" id="exampleModalLabel">Import Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true ">&times;</span>
                    </button>
                </div>
                <?php echo form_open_multipart('tambah/importSiswa'); ?>
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