    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url('assets/template/admin/')?>assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url('assets/template/admin/')?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url('assets/template/admin/')?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/template/admin/')?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?= base_url('assets/template/admin/')?>assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url('assets/template/admin/')?>dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url('assets/template/admin/')?>dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url('assets/template/admin/')?>dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="<?= base_url('assets/template/admin/')?>assets/libs/flot/excanvas.js"></script>
    <script src="<?= base_url('assets/template/admin/')?>assets/libs/flot/jquery.flot.js"></script>
    <script src="<?= base_url('assets/template/admin/')?>assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="<?= base_url('assets/template/admin/')?>assets/libs/flot/jquery.flot.time.js"></script>
    <script src="<?= base_url('assets/template/admin/')?>assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="<?= base_url('assets/template/admin/')?>assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="<?= base_url('assets/template/admin/')?>assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="<?= base_url('assets/template/admin/')?>dist/js/pages/chart/chart-page-init.js"></script>

    <script src="<?= base_url('assets/template/admin/')?>assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="<?= base_url('assets/template/admin/')?>dist/js/pages/mask/mask.init.js"></script>
    <script src="<?= base_url('assets/template/admin/')?>assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="<?= base_url('assets/template/admin/')?>assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="<?= base_url('assets/template/admin/')?>assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="<?= base_url('assets/template/admin/')?>assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="<?= base_url('assets/template/admin/')?>assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="<?= base_url('assets/template/admin/')?>assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="<?= base_url('assets/template/admin/')?>assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url('assets/template/admin/')?>assets/libs/quill/dist/quill.min.js"></script>
    <script src="<?= base_url('assets/template/admin/')?>assets/libs/toastr/build/toastr.min.js"></script>
    <!-- this page js -->
    <script src="<?= base_url('assets/template/admin/')?>assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="<?= base_url('assets/template/admin/')?>assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="<?= base_url('assets/template/admin/')?>assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
         $('#zero_config').DataTable();
         $('#zero_config1').DataTable();
         $('#zero_config2').DataTable();
     </script>

     <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
            control: $(this).attr('data-control') || 'hue',
            position: $(this).attr('data-position') || 'bottom left',

            change: function(value, opacity) {
                if (!value) return;
                if (opacity) value += ', ' + opacity;
                if (typeof console === 'object') {
                    console.log(value);
                }
            },
            theme: 'bootstrap'
        });

    });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>

    <script>
        const flash_error = $('.flash_error').data('flash_error');
        if (flash_error) {
            toastr.error(flash_error)
        }
    </script>

    <script>
        const flash_success = $('.flash_success').data('flash_success');
        if (flash_success) {
            toastr.success(flash_success)
        }
    </script>

    <script>
        $(document).ready(function(){
            var pilih = document.getElementById('pilih');

            $('#siswa').on('change', function(){
                var siswa = $(this).val();

                if (siswa != '') {
                    pilih.style.display='block';

                    $.ajax({
                        url : '<?= base_url('get/jenis');?>',
                        type : 'post',
                        data : {nisn: siswa},
                        success: function(data) {
                            $('#tampil_pilihan').html(data);
                        },
                        error: function(data) {
                            alert('error');
                        }
                    });


                } else {
                    pilih.style.display='none';
                }
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            var pilih = document.getElementById('pilih');

            $('#siswa').on('change', function(){
                var siswa = $(this).val();

                if (siswa != '') {
                    pilih.style.display='block';

                    $.ajax({
                        url : '<?= base_url('get/jenis_non');?>',
                        type : 'post',
                        data : {nisn: siswa},
                        success: function(data) {
                            $('#tampil_pilihan_non').html(data);
                        },
                        error: function(data) {
                            alert('error');
                        }
                    });


                } else {
                    pilih.style.display='none';
                }
            });
        });
    </script>

    <script>

        $(document).ready(function(){

         modal_edit_kelas = $('#modal-edit-kelas');


         $('#zero_config').on('click','.ubah-data-kelas', function(){
            id = $(this).data('id');

            $.ajax({
                url : '<?= base_url('get/ubahkelas');?>',
                type : 'post',
                dataType: 'json',
                data : {id: id},
                success: function(data) {
                    $('#form_ubah_data_kelas [name="id_ed_k"]').val(data[0].id_);
                    $('#form_ubah_data_kelas [name="kode_kelas_ed"]').val(data[0].kode_kelas);
                    $('#form_ubah_data_kelas [name="nama_kelas_ed"]').val(data[0].nama_kelas);
                    $('#form_ubah_data_kelas [name="level_ed"]').val(data[0].level);
                    $('#form_ubah_data_kelas [name="kode_jurusan_ed"]').val(data[0].kode_jurusan);

                    modal_edit_kelas.modal('show').on('shown.bs,modal');
                },
                error: function(data) {
                    alert('error');
                }
            });
        });

     });

 </script>

 <script>

    $(document).ready(function(){

     modal_edit_siswa = $('#modal_ubah_data_siswa');


     $('#zero_config').on('click','.ubah-data-siswa', function(){
        id = $(this).data('id');

          //  modal_edit_siswa.modal('show').on('shown.bs,modal');

          $.ajax({
            url : '<?= base_url('get/ubahsiswa');?>',
            type : 'post',
            dataType: 'json',
            data : {id: id},
            success: function(data) {
                $('#form_ubah_data_siswa [name="id"]').val(data[0].id_);
                $('#form_ubah_data_siswa [name="nama"]').val(data[0].nama);
                $('#form_ubah_data_siswa [name="nisn"]').val(data[0].nisn);
                $('#form_ubah_data_siswa [name="jk"]').val(data[0].jk);
                $('#form_ubah_data_siswa [name="tempat_lahir"]').val(data[0].tempat_lahir);
                $('#form_ubah_data_siswa [name="tg_lahir"]').val(data[0].tg_lahir);
                $('#form_ubah_data_siswa [name="kode_kelas"]').val(data[0].kode_kelas);
                $('#form_ubah_data_siswa [name="kategori"]').val(data[0].kategori);



                modal_edit_siswa.modal('show').on('shown.bs,modal');
            },
            error: function(data) {
                alert('error');
            }
        });
      });

 });

</script>


 <script>

    $(document).ready(function(){
      
     modal_edit_atas = $('#modal_ubah_biaya_atas');


     $('#zero_config').on('click','.ubah_biaya_atas', function(){
        id = $(this).data('id');

          $.ajax({
            url : '<?= base_url('get/ubahbiaya');?>',
            type : 'post',
            dataType: 'json',
            data : {id: id},
            success: function(data) {
                $('#form_ubah_biaya [name="id"]').val(data[0].id_);
                $('#form_ubah_biaya [name="jenis"]').val(data[0].jenis);
                $('#form_ubah_biaya [name="kode"]').val(data[0].kode);
                $('#form_ubah_biaya [name="deskripsi"]').val(data[0].deskripsi);
                $('#form_ubah_biaya [name="jumlah"]').val(data[0].jumlah);
                $('#form_ubah_biaya [name="kategori"]').val(data[0].kategori);

                modal_edit_atas.modal('show').on('shown.bs,modal');
            },
            error: function(data) {
                alert('error');
            }
        });
      });

 });

</script>

<script>

    $(document).ready(function(){
      
     modal_edit_atas = $('#modal_ubah_biaya_atas');


     $('#zero_config1').on('click','.ubah_biaya_atas', function(){
        id = $(this).data('id');

          $.ajax({
            url : '<?= base_url('get/ubahbiaya');?>',
            type : 'post',
            dataType: 'json',
            data : {id: id},
            success: function(data) {
                $('#form_ubah_biaya [name="id"]').val(data[0].id_);
                $('#form_ubah_biaya [name="jenis"]').val(data[0].jenis);
                $('#form_ubah_biaya [name="kode"]').val(data[0].kode);
                $('#form_ubah_biaya [name="deskripsi"]').val(data[0].deskripsi);
                $('#form_ubah_biaya [name="jumlah"]').val(data[0].jumlah);
                $('#form_ubah_biaya [name="kategori"]').val(data[0].kategori);

                modal_edit_atas.modal('show').on('shown.bs,modal');
            },
            error: function(data) {
                alert('error');
            }
        });
      });

 });

</script>

<script>

    $(document).ready(function(){
      
     modal_edit_atas = $('#modal_ubah_biaya_atas');


     $('#zero_config2').on('click','.ubah_biaya_atas', function(){
        id = $(this).data('id');

          $.ajax({
            url : '<?= base_url('get/ubahbiaya');?>',
            type : 'post',
            dataType: 'json',
            data : {id: id},
            success: function(data) {
                $('#form_ubah_biaya [name="id"]').val(data[0].id_);
                $('#form_ubah_biaya [name="jenis"]').val(data[0].jenis);
                $('#form_ubah_biaya [name="kode"]').val(data[0].kode);
                $('#form_ubah_biaya [name="deskripsi"]').val(data[0].deskripsi);
                $('#form_ubah_biaya [name="jumlah"]').val(data[0].jumlah);
                $('#form_ubah_biaya [name="kategori"]').val(data[0].kategori);

                modal_edit_atas.modal('show').on('shown.bs,modal');
            },
            error: function(data) {
                alert('error');
            }
        });
      });

 });

</script>

</body>

</html>