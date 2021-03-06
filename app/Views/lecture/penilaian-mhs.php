<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKIT</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    
<link rel="stylesheet" href="../assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/x-icon">
    <link rel="icon" type="image/png" href="../assets/images/logo/big-logo.png">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <img src="../assets/images/logo/logo.png" alt="prakit">
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li class="sidebar-item">
                <a href="<?php echo base_url('lecture/home'); ?>" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li class="sidebar-item">
                <a href="<?php echo base_url('lecture/mahasiswakp'); ?>" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Mahasiswa KP</span>
                </a>
            </li>
            
            <li class="sidebar-item active">
                <a href="<?php echo base_url('lecture/penilaian-mhs'); ?>" class='sidebar-link'>
                    <i class="bi bi-collection-fill"></i>
                    <span>Surat Penilaian KP Mahasiswa</span>
                </a>
            </li>
            <li class="sidebar-item ">
                <a href="<?php echo base_url('lecture/logout'); ?>" class='sidebar-link'>
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
                <a href="../lecture/penilaian-mhs.html" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
<div>
    <nav class="navbar navbar-light">
        <div class="container d-block">
            <div class="logo">
                <a onclick="goBack()"><i class="bi bi-chevron-left"></i></a> 
                <script>
                    function goBack() {
                        window.history.back();
                    }
                </script>
                <a class="navbar-brand ms-5" href="../error-500.html">
                    Penilaian Kerja Praktek Mahasiswa
                </a>
            </div>
        </div>
    </nav>

<div class="container">
    <div class="card mt-5">
        <div class="card-header text-muted">
            <h4 class="card-title text-center">List Mahasiswa Bimbingan:</h4>
        </div>
        <div class="page-content">
            <table>
                <tr>
                    <th rowspan="1">Nama</th>
                    <th rowspan="1">NRP</th>
                    <th rowspan="1">Nilai</th>
                    <th rowspan="1" class="text-center">Alih Kredit</th>
                    <th rowspan="1" class="text-center">Aksi</th>
                </tr>
                <?php foreach($data1 as $data){ ?>
                    <tr>
                        <td><?php echo htmlentities($data->nama_siswa) ?></td>
                        <td><?php echo htmlentities($data->nrp) ?></td>
                        <td><?php echo htmlentities($data->nilai) ?></td>
                        <td class="text-center">-</td>
                        <td class="text-center">
                            <a href="<?php echo base_url('lecture/updatenilai/'.$data->id_siswa.'/'.$data->id_nilai); ?>" class="btn btn-primary btn-md shadow-md">Ubah Nilai</a>
                        </td>
                    </tr>
                <?php } ?>
                <?php foreach($data2 as $dataDua){ ?>
                    <tr>
                        <td><?php echo htmlentities($dataDua->nama_siswa) ?></td>
                        <td><?php echo htmlentities($dataDua->nrp) ?></td>
                        <td><?php echo htmlentities($dataDua->nilai) ?></td>
                        <td class="text-center">-</td>
                        <td class="text-center">
                            <a href="<?php echo base_url('lecture/updatenilai/'.$dataDua->id_siswa.'/'.$dataDua->id_nilai); ?>" class="btn btn-primary btn-md shadow-md">Ubah Nilai</a>
                        </td>
                    </tr>
                <?php } ?>
                <?php foreach($data3 as $dataTiga){ ?>
                    <tr>
                        <td><?php echo htmlentities($dataTiga->nama_siswa) ?></td>
                        <td><?php echo htmlentities($dataTiga->nrp) ?></td>
                        <td><?php echo htmlentities($dataTiga->nilai) ?></td>
                        <td class="text-center">&#10004;</td>
                        <td class="text-center">
                            <a href="<?php echo base_url('lecture/updatenilaikp/'.$dataTiga->id_siswa.'/'.$dataTiga->id_nilai); ?>" class="btn btn-primary btn-md shadow-md">Ubah Nilai</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div> 

<footer class="sticky-footer fixed-bottom">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
        <span>2021 &copy; Teknologi Informasi</span>
        </div>
    </div>
</footer>     
    
<script src="../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendors/apexcharts/apexcharts.js"></script>
<script src="../assets/js/pages/dashboard.js"></script>


<script src="../assets/js/main.js"></script>
</body>

</html>
