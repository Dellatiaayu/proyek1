<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Data Orang Terlantar</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('assets/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-center">
                        <div class="logo">
                            <a href="/dashboard"><img src="{{ asset('assets/img/logo.png') }}"
                                    style="width: 80px; height: 80px"></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item {{ Request::is('dashboard') ? 'active' : '' }} ">
                            <a href="/dashboard" class='sidebar-link'>
                                <i class="bi bi-display"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{ Request::is('dataot') ? 'active' : '' }}  ">
                            <a href="{{ route('dataot.index') }}" class='sidebar-link'>
                                <i class="bi bi-person-vcard"></i>
                                <span>Biodata</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{ Request::is('pendataan') ? 'active' : '' }}  ">
                            <a href="{{ route('pendataan.index') }}" class='sidebar-link'>
                                <i class="bi bi-book"></i>
                                <span>Pendataan</span>
                            </a>
                        </li>
                        @if (Request::is('filtersurat'))
                            <li class="sidebar-item active">
                                <a href="{{ route('suratpengantar.index') }}" class='sidebar-link'>
                                    <i class="bi bi-file-earmark-text"></i>
                                    <span>Surat Pengantar</span>
                                </a>
                            </li>
                        @else
                            <li class="sidebar-item {{ Request::is('suratpengantar') ? 'active' : '' }}">
                                <a href="{{ route('suratpengantar.index') }}" class='sidebar-link'>
                                    <i class="bi bi-file-earmark-text"></i>
                                    <span>Surat Pengantar</span>
                                </a>
                            </li>
                        @endif

                        <li class="sidebar-item {{ Request::is('laporan') ? 'active' : '' }}  ">
                            <a href="{{ route('laporan.index') }}" class='sidebar-link'>
                                <i class="bi bi-journal-text"></i>
                                <span>Laporan</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{ Request::is('logout') ? 'active' : '' }}  ">
                            <a href="/logout" class='sidebar-link'>
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
            <header class="mb-3" style="text-align: center">
                <h3>Dinas Sosial Kabupaten Kuningan</h3>
                <p>Jalan RE Martadinata Ancaran, Kuningan</p>
            </header>

            <!-- Content -->
            @yield('content')
            <!-- End Content -->

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-end">
                        <p>Create with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="">Dinsos</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
