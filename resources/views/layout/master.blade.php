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
    <link rel="icon" href="../img/logo/ta.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/review.css') }}">

    @yield('style')
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
                        <img src="../img/logo/maxy_putih.png" alt="" class="sidebar-logo-img1">
                    </a>
                    <a href="https://www.ubaya.ac.id/" target="_black">
                        <img src="../img/logo/logo-ubaya.png" alt="" class="sidebar-logo-img2">
                    </a>
                </div>
            </div>
            <div class="logo mt-2">
                <a href="https://maxy.academy/" target="_blank">
                    <img src="../img/logo/ta1.png" alt="" class="sidebar-logo-img">
                </a>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="{{ route('dashboard') }}" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('dataKandidat') }}" class="sidebar-link">
                        <i class="lni lni-protection"></i>
                        <span>Data Kandidat</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('assessment') }}" class="sidebar-link">
                        <i class="lni lni-remove-file"></i>
                        <span>Assessment</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('laporan') }}" class="sidebar-link">
                    <i class="lni lni-clipboard"></i>
                    <span>Laporan</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('blog') }}" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Blog</span>

                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('quiz') }}" class="sidebar-link">
                        <i class="lni lni-write"></i>
                        <span>Quiz Create</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="lni lni-cog"></i>
                        <span>Pengaturan</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="{{ route('profile') }}" class="sidebar-link">
                            <i class="lni lni-user"></i>
                            Profil
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('login') }}" class="sidebar-link">
                                <i class="lni lni-exit"></i>
                                Keluar
                            </a>
                        </li>
                    </ul>
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
        <div class="main">
            <nav class="navbar navbar-expand px-4 py-3">
                <div class="navbar-collapse collapse">
                    <h2 class="fw-bold">Hello, {{ Auth::user()->name }}</h2>
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
                            <div class="dropdown-menu dropdown-menu-end rounded mt-4">
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
                            <div class="dropdown-menu dropdown-menu-end rounded mt-4">
                                <a href="#" class="dropdown-item">
                                    <i class="lni lni-popup"></i>
                                    <span>Notification 1</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="lni lni-popup"></i>
                                    <span>Notification 2</span>
                                </a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-icon pe-md-0" data-bs-toggle="dropdown">
                                <img src="../img/avatar.png" class="avatar img-fluid" alt="avatar">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end rounded mt-4">
                                <a href="#" class="dropdown-item">
                                    <i class="lni lni-timer"></i>
                                    <span>Analytics</span>
                                </a>
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
            @yield('content')

            <!-- Footer -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-body-secondary">
                        <div class="col-6 text-start">
                            <a href="#" class="text-body-secondary">
                                <strong>Tele Asessment</strong>
                            </a>
                        </div>
                        <div class="col-6 text-end text-body-secondary d-none d-md-block">
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
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('js/generateData.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/my_chart.js') }}"></script>


</body>

</html>
