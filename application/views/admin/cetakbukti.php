<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cetak Bukti Pembayaran</title>
	<link href="<?= base_url('assets/template/admin/')?>dist/css/style.min.css" rel="stylesheet">
</head>
<body>
	<!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body printableArea">
                            <h3><b>Bukti Pembayaran</b> <span class="pull-right">#<?php echo $kode_; ?></span></h3>
                            <hr>
                            <div class="row">
                                
                                    <div class="col-md-8">
                                        <address>
                                            <h3> &nbsp;<b class="text-danger"><?= $instansi['nama'] ?></b></h3>
                                            <p class="text-muted m-l-5"><?= $instansi['alamat'] ?>,
                                                <br/> Email <?= $instansi['email'] ?>,
                                                <br/> Website <?= $instansi['site'] ?>,
                                                <br/> Tlp <?= $instansi['telepon'] ?></p>
                                        </address>
                                    </div>
                                    <div class="col-md-4">
                                        <address>
                                            <h5>Bukti Pembayar,</h5>
                                            <h4 class="font-bold"><?php echo $siswa['nama'] ?></h4>
                                            <!-- <p class="text-muted m-l-30">E 104, Dharti-2,
                                                <br/> Nr' Viswakarma Temple,
                                                <br/> Talaja Road,
                                                <br/> Bhavnagar - 364002</p> -->
                                            <p class="m-t-30"><b>Tanggal Pembayaran :</b> <i class="fa fa-calendar"></i> <?php echo tgl_indo($tgl_bayar) ?></p>
                                            
                                        </address>
                                    </div>
                               
                                <div class="col-md-12">
                                    <div class="table-responsive m-t-40" style="clear: both;">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Jenis Pembayaran</th>
                                                    <th>Deskripsi</th>
                                                    <th class="text-right">Jumlah seharusnya</th>
                                                    <th class="text-right">Jumlah dibayar</th>
                                                    <th class="text-right">Keterangan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; foreach ($pembayaran as $pby): ?>
												<tr>
													<td width="5%"><?= $no++ ?></td>
                                                    <td width="20%"><?php if ($pby->jenis == 'SPP') {
                                                        echo $pby->jenis.' bulan '.bulan($pby->bulan) ;
                                                    } else {
                                                        echo $pby->jenis;
                                                    }
                                                     ?>
                                                    </td>
                                                    <td width="30%"><?= $pby->deskripsi ?></td>
                                                    <td style="text-align: right;"><span style="float:left">Rp. </span><?php echo rupiah($pby->seharusnya); ?></td>
                                                    <td style="text-align: right;"><span style="float:left">Rp. </span><?php echo rupiah($pby->jumlah); ?></td>
                                                    <td class="text-right">
                                                        <?php if ($pby->selisih > 0) {
                                                            echo '+ Rp. '.rupiah(str_replace('-', '', $pby->selisih));
                                                        } elseif ($pby->selisih == '0' ) {
                                                            echo 'Lunas';
                                                        } elseif ($pby->selisih < 0) {
                                                            echo '- Rp. '.rupiah(str_replace('-', '', $pby->selisih));
                                                        }
                                                         ?>
                                                    </td>
												</tr>
                                            	<?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="text-right">
                                        <hr>
                                        <table width="100%">
                                            <tr><td width="70%"></td>
                                                <td><b>Total dibayar</b></td>
                                                <td>Rp. </td>
                                                <td><?= rupiah($jumlah_bayar) ?></td>
                                            </tr>
                                            <tr><td width="70%"></td>
                                                <td><b>Total Seharusnya</b></td>
                                                <td>Rp. </td>
                                                <td><?= rupiah($harus) ?></td>
                                            </tr>
                                            <tr><td width="70%"></td>
                                                <td><b><?php if ($jumlah_bayar > $harus) { echo 'Sisa'; } elseif ($sisa == '0' ) { echo 'Selisih' ;} elseif ($harus > $jumlah_bayar) { echo 'Kurang'; } ?></b></td>
                                                <td>Rp. </td>
                                                <td><?php if ($sisa == '0') { echo '-';} else { echo rupiah($sisa);} ?></td>
                                            </tr>
                                        </table>
                                        
                                        
                                       
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    
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
</body>
</html>