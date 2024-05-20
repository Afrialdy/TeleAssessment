<?php
session_start(); // Start the session

// Check if fullname session variable is set and not null
$fullname = isset($_SESSION['fullname']) ? $_SESSION['fullname'] : '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tele Asessment</title>
    <link rel="icon" href="img/logo/ta.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex mt-2">
                <button id="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="logo d-flex">
                <a href="https://maxy.academy/" target="_blank">
                    <img src="img/logo/maxy_putih.png" alt="" class="sidebar-logo-img1">
                </a>
                <a href="https://www.ubaya.ac.id/" target="_black">
                    <img src="img/logo/logo-ubaya.png" alt="" class="sidebar-logo-img2">
                </a>
                </div>
            </div>
            <div class="logo mt-2">
                <a href="https://maxy.academy/" target="_blank">
                    <img src="img/logo/ta1.png" alt="" class="sidebar-logo-img">
                </a>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="page/data-kandidat.php" class="sidebar-link">
                        <i class="lni lni-protection"></i>
                        <span>Data Kandidat</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="page/asessment.php" class="sidebar-link">
                        <i class="lni lni-remove-file"></i>
                        <span>Asessment</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="page/laporan.php" class="sidebar-link">
                        <i class="lni lni-clipboard"></i>
                        <span>Laporan</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="page/blog.php" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Blog</span>
                    </a>
                </li>

                <!-- <div class="three-item"> -->
                    <li class="sidebar-item">
                        <a href="page/profil.php" class="sidebar-link">
                            <i class="lni lni-user"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="lni lni-cog"></i>
                            <span>Pengaturan</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="auth/login.html" class="sidebar-link">
                            <i class="lni lni-exit"></i>
                            <span>Keluar</span>
                        </a>
                    </li>
                <!-- </div> -->
            </ul>
            <!-- <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-question-circle"></i>
                </a>
            </div> -->
        </aside>

        <!-- Navbar -->
        <div class="wrap">
            <nav class="navbar navbar-expand px-4 py-3">
                <div class="navbar-collapse collapse">
                <h2 class="fw-bold">Hi, <?php echo $_SESSION['fullname']; ?></h2>
                    <ul class="navbar-nav ms-auto align-items-center d-flex">
                        <form action="#" class="search">
                            <div class="input-group input-group-navbar">
                                <input type="text" class="form-control rounded-2" placeholder="Search..">
                                <button class="btn rounded-2" type="button">
                                    Search
                                </button>
                            </div>
                        </form>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-icon pe-md-0" data-bs-toggle="dropdown">
                                <i class="lni lni-alarm alarm"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end rounded mt-3" style="margin-right: 40px;">
                                <a href="#" class="dropdown-item">
                                    <i class="lni lni-alarm"></i>
                                    <span>Notification 1</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="lni lni-alarm"></i>
                                    <span>Notification 2</span>
                                </a>                                
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-icon pe-md-0" data-bs-toggle="dropdown">
                                <i class="lni lni-popup notif"></i>
                            </a>
                            <!-- Konten dropdown untuk notifikasi -->
                            <div class="dropdown-menu dropdown-menu-end rounded mt-3" style="margin-right: 40px;">
                                <a href="#" class="dropdown-item">
                                    <i class="lni lni-popup"></i>
                                    <span>10 peserta baru membuat akun di tele asessment</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="lni lni-popup"></i>
                                    <span>2 peserta telah terjadwal untuk melakukan interview</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="lni lni-popup"></i>
                                    <span>5 peserta telah telah selesai menjalankan interview</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="lni lni-popup"></i>
                                    <span>2 peserta telah berhasil lolos dalam interview ini</span>
                                </a>                                  
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-icon pe-md-0" data-bs-toggle="dropdown">
                                <img src="img/avatar.png" class="avatar img-fluid" alt="avatar">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end rounded mt-3">
                                <a href="#" class="dropdown-item">
                                    <i class="lni lni-timer"></i>
                                    <span>Analytics</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="lni lni-cog"></i>
                                    <span>Setting</span>
                                </a>
                                <!-- <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="lni lni-question-circle"></i>
                                    <span>Setting</span>
                                </a> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <div class="mb-3">
                        <div class="row g-sm-5">
                            <div class="col-12 col-md-4">
                                <div class="card border-0">
                                    <div class="card-body p-5 d-flex flex-column">
                                        <img src="img/group.png" alt="" class="mb-2">
                                        <h5 class="fw-bold">Jumlah Peserta</h5>
                                        <h2 class="mb-4">400</h2>
                                        <div class="mb-0">
                                            <span class="fw-lighter">
                                                Bulan April
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="card border-0">
                                    <div class="card-body py-4 d-flex flex-column">
                                        <h5 class="fw-bold">Waktu Interview</h5>
                                        <p class="mb-2 fw-lighter">
                                            Rata-Rata
                                        </p>
                                        <canvas id="myChart"></canvas>
                                        <div class="time-info d-flex mt-2">
                                            <span class="aa fw-bold">25 Menit</span>
                                            <span class="bb fw-bold">30 Menit</span>
                                            <span class="cc fw-bold">45 Menit</span>
                                        </div>
                                        <div class="time-info d-flex mt-2 justify-content-center">
                                            <span class="dd fw-bold">50 Menit</span>
                                            <span class="ee fw-bold">60 Menit</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="card border-0">
                                    <div class="card-body py-4 d-flex flex-column">
                                        <h5 class="fw-bold">Tes Kepribadian</h5>
                                        <p class="mb-2 fw-lighter">
                                            Rata-Rata
                                        </p>
                                        <canvas id="ourchart"></canvas>
                                        <div class="time-info d-flex mt-2">
                                            <span class="aa fw-bold">INFJ</span>
                                            <span class="bb fw-bold">INFP</span>
                                            <span class="cc fw-bold">ENFJ</span>
                                            <span class="cc fw-bold">ENTJ</span>
                                        </div>
                                        <div class="time-info d-flex mt-2">
                                            <span class="dd fw-bold">ENFP</span>
                                            <span class="ee fw-bold">INTJ</span>
                                            <span class="ff fw-bold">INTP</span>
                                            <span class="ff fw-bold">ENTP</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Grafik Peserta -->
                        <div class="graphBox mt-2">
                            <div class="box d-flex flex-column">
                                <h5 class="fw-bold mb-4">Grafik Peserta Perbulan</h5>
                                <canvas id="lineChart"></canvas>
                            </div>
                        </div>

                        <!-- Pertanyaan Interview -->
                        <div class="question-box mt-4">
                            <div class="q-box d-flex flex-column">
                                <h5 class="fw-bold mb-4">Pertanyaan Interview</h5>
                                <div class="d-flex box-profil mb-4">
                                    <img src="img/interview test.png" class="img-fluid" alt="">                                                                      
                                    <div class="d-flex flex-column">
                                        <h2>INTERVIEW TEST</h2>
                                        <P>Analisis sentimen wajah & analisis sentimen suara.</P>
                                    </div>
                                    <a href="">
                                        <span class="pertanyaan">10 Pertanyaan</span>
                                    </a>
                                </div>
                                
                                <div class="d-flex box-profil mb-4">
                                    <img src="img/interest and talent.png" class="img-fluid" alt="">                                                                       
                                    <div class="d-flex flex-column">
                                        <h2>INTEREST TALENT TEST</h2>
                                        <P>Mengetes kemampuan kognitif test.</P>
                                    </div>
                                    <a href="">
                                        <span class="pertanyaan">10 Pertanyaan</span>
                                    </a>
                                </div>

                                <div class="d-flex box-profil mb-4">
                                    <img src="img//cognitive style.png" class="img-fluid" alt="">                                                                       
                                    <div class="d-flex flex-column">
                                        <h2>COGNITIVE STYLE TEST</h2>
                                        <P>Mengetes kemampuan kognitif test.</P>
                                    </div>
                                    <a href="">
                                        <span class="pertanyaan">5 Pertanyaan</span>
                                    </a>
                                </div>

                                <div class="d-flex box-profil mb-4">
                                    <img src="img/validation test.png" class="img-fluid" alt="">                                                                       
                                    <div class="d-flex flex-column">
                                        <h2>VALIDATION TEST</h2>
                                        <P>Test tertulis untuk memvalidasi hasil asesmen interaktif</P>
                                    </div>
                                    <a href="">
                                        <span class="pertanyaan">5 Pertanyaan</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Data Kandidat -->
                        <div class="datakandidat mt-4">
                            <div class="databox">
                                <table>
                                    <thead class="px-4">
                                        <tr>
                                            <td>Pengguna</td>
                                            <td style="padding-right: 30px;">ID</td>
                                            <td style="padding-left: 10px;">No Telepon</td>                                            
                                            <td>Tanggal Lahir</td>
                                            <td style="padding-right: 30px;">Usia</td>
                                            <td style="padding-right: 20px;">Gender</td>
                                            <td style="padding-left: 15px;">Keterangan</td>
                                            <td>
                                                <a href="" style="padding-left: 17px">
                                                    <i class="lni lni-printer"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="" style="padding-left: 20px">
                                                    <i class="lni lni-download"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </thead>

                                    <tr class="separator">
                                        <td colspan="12"></td>
                                    </tr>
                                    
                                    <tbody id="dataContainer">
                                        <!-- Data akan diisi oleh JavaScript -->
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Review -->
                        <div class="revBox mt-4">
                            <div class="rBox d-flex flex-column">
                                <h5 class="fw-bold mb-4 text-center">Review Terbaru</h5>
                                <div class="d-flex box-profil mb-4">
                                    <img src="img/profil-review/adudu.jpeg" class="avatar img-fluid" alt="avatar">                                                                       
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere quaerat iste dicta optio, quae rerum aspernatur nam ex laudantium perspiciatis?</p>
                                </div>

                                <div class="d-flex box-profil mb-4">
                                    <img src="img/profil-review/probe.jpeg" class="avatar img-fluid" alt="avatar">                                                                                
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere quaerat iste dicta optio, quae rerum aspernatur nam ex laudantium perspiciatis?</p>
                                </div>

                                <div class="d-flex box-profil mb-4">
                                    <img src="img/profil-review/tok-abah.jpeg" class="avatar img-fluid" alt="avatar">                                                                                
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere quaerat iste dicta optio, quae rerum aspernatur nam ex laudantium perspiciatis?</p>
                                </div>

                                <div class="d-flex box-profil mb-4">
                                    <img src="img/profil-review/cikgu.jpg" class="avatar img-fluid" alt="avatar">                                                                                
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere quaerat iste dicta optio, quae rerum aspernatur nam ex laudantium perspiciatis?</p>
                                </div>

                                <div class="d-flex box-profil mb-4">
                                    <img src="img/profil-review/upin.jpeg" class="avatar img-fluid" alt="avatar">                                                                                
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere quaerat iste dicta optio, quae rerum aspernatur nam ex laudantium perspiciatis?</p>
                                </div>

                                <a href="page/review.php" class="text-center">
                                    <button type="button" class="btn btn-primary">Show Details</button>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </main>

            <!-- Footer -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-body-secondary">
                        <div class="col-6 text-start">
                            <a href="#" class="text-body-secondary">
                                <strong>Tele Asessment</strong>
                            </a>
                        </div>
                        <!-- <div class="col-6 text-end text-body-secondary d-none d-md-block">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="#" class="text-body-secondary">Contact</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-body-secondary">About Us</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-body-secondary">Term & Conditions</a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/my_chart.js"></script>
    <script src="js/generateData.js"></script>
    
</body>
</html>