<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKIT</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.css">
    
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/app.css">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/images/favicon.svg" type="image/x-icon">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/images/logo/big-logo.png">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <img src="<?php echo base_url(); ?>/assets/images/logo/logo.png" alt="prakit">
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li class="sidebar-item active">
                <a href="<?php echo base_url('student/home'); ?>" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li class="sidebar-item  has-sub ">
                <a href="<?php echo base_url('student/pengumpulan-berkas'); ?>" class='sidebar-link'>
                    <i class="bi bi-collection-fill"></i>
                    <span>Reports</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="<?php echo base_url('student/pengumpulan-berkas'); ?>">Pengumpulan Laporan</a>
                    </li>
                </ul>
            </li>
            
            <li class="sidebar-item has-sub">
                <a href="<?php echo base_url('student/profile'); ?>" class='sidebar-link'>
                    <i class="bi bi-person-badge-fill"></i>
                    <span>Profile</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="<?php echo base_url('student/profile'); ?>">Profile</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="<?php echo base_url('student/pengajuanAlihKredit'); ?>">Pengajuan Alih Kredit</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="<?php echo base_url('student/dokumen'); ?>">Unduh Dokumen</a>
                    </li>
                </ul>
            </li>   
            
            <li class="sidebar-item ">
                <a href="<?php echo base_url('student/logout'); ?>" class='sidebar-link'>
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span>
                </a>
            </li>

        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="../student/index.html" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
<div>
    <nav class="navbar navbar-light">
        <div class="d-block">
            <div class="logo">
                <a onclick="goBack()"><i class="bi bi-chevron-left"></i></a> 
                <script>
                    function goBack() {
                        window.history.back();
                    }
                </script>
                <a class="navbar-brand ms-5" href="../error-500.html">
                    Dashboard
                </a>
            </div>
        </div>
    </nav>
    

<div>
    <div class="card mt-5">
        <div class="card-header text-muted">
            <h2 class="card-title text-center">Selamat Datang di PRAKIT!</h2>
                <h3 class="card-header text-center">Website Monitoring Kerja Praktek Departemen Teknologi Informasi</h3>
        </div>
        <!-- <div class="card mt-3">
                <div class="button text-center">
                    <a href="<?php echo base_url(); ?>" class="btn btn-lg btn-success rounded-pill">Ajukan KP Sekarang</a>
                </div>
        </div> -->
    </div>
</div>  
<?php if(!empty(session()->getFlashdata('success'))){?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success! </strong><?php echo htmlentities(session()->getFlashdata('success')); ?>
                </div>
            <?php } ?>
            <?php if(!empty(session()->getFlashdata('fail'))){?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Sorry! </strong><?php echo htmlentities(session()->getFlashdata('fail')); ?>
                </div>
<?php } ?>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon primary">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Status</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo htmlentities($dataKP['status']) ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Tempat KP</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo htmlentities($dataKP['nama_perusahaan']) ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Dosen Pembimbing</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo htmlentities($dosen['nama']) ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Pembimbing Lapangan</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo htmlentities($dataKP['wakil_perusahaan']) ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
               <div class="col-12 col-xl-7">
                    <div class="card">
                        <div class="card-header">
                            <h4>Deskripsi Pekerjaan</h4>
                        </div>
                        <div class="card-body px-4 py-3-5">
                            <div class="row">
                                <div class="d-flex align-items-left">
                                    <div class="mb-0"><p><?php echo htmlentities($dataKP['deskripsi_pekerjaan']) ?></p>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Dokumen Pengajuan KP</h4>
                        </div>
                        <div class="card-body px-4 py-3-5">
                            <div class="row">
                                <div class="d-flex align-items-left">
                                    <?php if($dataKP['file_alihKredit'] == null && $whoAmI['id_siswa'] == $dataKP['id_siswa']){ ?>
                                        <div class="mb-0">
                                            <p class="text-danger"><strong>Anda belum melakukan upload dokumen pengajuan Alih Kredit</strong></p>
                                            <a href="<?php echo base_url('student/downloaddokumenAlihKredit'); ?>" target="_blank" class="btn btn-info">Download Form Alih Kredit</a>
                                            <a href="<?php echo base_url('student/uploadpengajuanAlihKredit'); ?>" class="btn btn-primary">Upload Dokumen</a>
                                        </div>
                                    <?php }else if($dataKP['file_alihKredit'] != null){ ?>
                                        <div class="mb-0">
                                            <a href="<?php echo base_url('assets/suratPengajuan/'.htmlentities($dataKP['file_alihKredit'])) ?>" target="_blank"><?php echo $dataKP['file_alihKredit'] ?></a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-5">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tanggal Pelaksanaan</h4>
                            <div class="row">
                                <div class="card-content pb-4">
                                    <div class="recent-message d-flex px-4 py-3">
                                        <div class="mb-0"><p>Tanggal Dimulai</p>
                                            <?php echo htmlentities($dataKP['tanggal_pelaksanaan']) ?>
                                        </div>
                                    </div>
                                    <div class="recent-message d-flex px-4 py-3">
                                        <div class="mb-0"><p>Tanggal Berakhir</p>
                                            <?php echo htmlentities($dataKP['tanggal_selesai']) ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                    </div>
                </div>
            </div>
        

        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body py-4 px-5">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="<?php echo base_url(); ?>/assets/images/faces/3.jpg" alt="Profile">
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-semibold"><?php echo htmlentities($whoAmI['nama']) ?></h5>
                            <h6 class="text-muted mb-0"><?php echo htmlentities($whoAmI['nrp']) ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Anggota Kelompok KP</h4>
                </div>
                <div class="card-content pb-4">
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="<?php echo base_url(); ?>/assets/images/faces/5.jpg">
                                <div class="name ms-3">
                                    <h6 class="font-semibold"><?php echo htmlentities($siswaKp['nama']) ?></h6>
                                    <h6 class="text-muted mb-0"><?php echo htmlentities($siswaKp['nrp']) ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <h3 class="card-title text-left">Lowongan KP tersedia</h3><br>
    <div class="row">
        <?php foreach ($dataLowongan as $e) : ?>
            <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h4 class="text-primary"><?php echo htmlentities($e['nama_perusahaan']) ?></h4>
                <p class="card-text"><?php echo htmlentities($e['posisi_kp']) ?></p>
                <a href="<?php echo base_url('external/detail/'.$e['id_lowongan']) ?>" class="btn btn-primary">Tampilkan Detail</a>
            </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</div>

<footer class="sticky-footer fixed-bottom">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
        <span>2021 &copy; Teknologi Informasi</span>
        </div>
    </div>
</footer>    
    
<script src="<?php echo base_url(); ?>/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendors/apexcharts/apexcharts.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/pages/dashboard.js"></script>


<script src="<?php echo base_url(); ?>/assets/js/main.js"></script>
</body>

</html>
