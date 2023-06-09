<?php 
$menu = $this->uri->segment(1);
$submenu = $this->uri->segment(2);
?>
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('admin') ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Pengaturan </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?= base_url('admin/instansi') ?>" class="sidebar-link"><i class="mdi mdi-factory"></i><span class="hide-menu"> Instansi </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/kelas') ?>" class="sidebar-link"><i class="mdi mdi-apps"></i><span class="hide-menu"> Kelas </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/siswa') ?>" class="sidebar-link"><i class="mdi mdi-account-settings-variant"></i><span class="hide-menu"> Siswa </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/biaya') ?>" class="sidebar-link"><i class="mdi mdi-trending-up"></i><span class="hide-menu"> Biaya </span></a></li>
                            </ul>
                        </li>

                         <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-cash-multiple"></i><span class="hide-menu">Pembayaran </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?= base_url('admin/spp') ?>" class="sidebar-link"><i class="mdi mdi-cash"></i><span class="hide-menu"> SPP </span></a></li>
                                <li class="sidebar-item"><a href="<?= base_url('admin/non_spp') ?>" class="sidebar-link"><i class="mdi mdi-coin"></i><span class="hide-menu"> Non SPP </span></a></li>
                            </ul>
                        </li>


                         <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-chart-line"></i><span class="hide-menu">Laporan </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?= base_url('admin/laporan') ?>" class="sidebar-link"><i class="mdi mdi-clock-fast"></i><span class="hide-menu"> Laporan </span></a></li>
                                
                            </ul>
                        </li>

                                               
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->