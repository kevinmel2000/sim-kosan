<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Simkos - Sistem informasi manajemen kos</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico')?>">

        <!-- Sweet Alert -->
        <link href="<?php echo base_url('plugins/sweet-alert2/sweetalert2.min.css')?>" rel="stylesheet" type="text/css" >
        

        <!-- C3 charts css -->
        <link href="<?php echo base_url('plugins/c3/c3.min.css')?>" rel="stylesheet" type="text/css"  />

        <!-- App css -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/icons.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/metismenu.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet" type="text/css" />

        <script src="<?php echo base_url('assets/js/modernizr.min.js')?>"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="<?php echo base_url('admin/admin/index') ?>" class="logo">
                                <span>
                                    <img src="<?php echo base_url('assets/images/logo.png')?>" alt="" height="25">
                                </span>
                        <i>
                            <img src="<?php echo base_url('assets/images/logo_sm.png')?>" alt="" height="28">
                        </i>
                    </a>
                </div>

                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="<?php echo base_url('assets/images/icons/settings.svg')?>" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Welcome ! Admin</small> </h5>
                                </div>
                                <!-- item-->
                                <a href="<?php echo base_url('admin/admin/ganti_password')?>"class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-power"></i> <span>Ganti Password</span>
                                </a>
                                <a href="<?php echo base_url('auth/logout')?>" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-power"></i> <span>Keluar</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                        <li class="hide-phone app-search">
                            <form role="search" class="">
                                <input type="text" disabled placeholder="<?php echo date("l,d-m-Y");?>" class="form-control">
                            </form>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->
                                    


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            

                            <li>
                                <a href="<?php echo base_url('admin/admin/index') ?>"><i class="fi-air-play"></i> <span> Beranda </span></a>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-paper"></i><span>Data Kosan</span><span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="<?php echo base_url('admin/admin/data_penghuni') ?>"> Data Penghuni</a> </li>
                                    <li><a href="<?php echo base_url('admin/admin/data_kamar') ?>"> Data Kamar</a> </li>
                                    <li><a href="<?php echo base_url('admin/admin/data_tagihan') ?>"> Data Tagihan</a> </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i><span>Data Transaksi</span><span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="<?php echo base_url('admin/admin/pembayaran') ?>"> Pembayaran </a></li>
                                    <li><a href="<?php echo base_url('admin/admin/pemasukan') ?>"> Pemasukan </a></li>
                                    <li><a href="<?php echo base_url('admin/admin/pengeluaran') ?>"> Pengeluaran</a> </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-plus"></i><span>Tambah Transaksi</span><span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="<?php echo base_url('admin/admin/tambah_pembayaran') ?>">Tambah Pembayaran </a></li>
                                    <li><a href="<?php echo base_url('admin/admin/tambah_pemasukan') ?>">Tambah Pemasukan</a></li>
                                    <li><a href="<?php echo base_url('admin/admin/tambah_pengeluaran') ?>">Tambah Pengeluaran</a> </li>
                                </ul>
                            </li>                            

                            <li>
                                <a href="<?php echo base_url('admin/admin/laporan') ?>"><i class="fi-archive"></i> <span> Laporan </span></a>
                            </li>

                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>

                                    
            <!-- Left Sidebar End -->