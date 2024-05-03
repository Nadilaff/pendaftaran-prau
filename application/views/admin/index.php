<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Enzo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Enzo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?= base_url('assets/admin/'); ?>images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url('assets/admin/'); ?>images/favicon/favicon.png" type="image/x-icon">
    <title>Admin Gn. Prau</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/'); ?>css/vendors/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/'); ?>css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/'); ?>css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/'); ?>css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/'); ?>css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/'); ?>css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/'); ?>css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/'); ?>css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/'); ?>css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/'); ?>css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/'); ?>css/vendors/prism.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/'); ?>css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/'); ?>css/style.css">
    <link id="color" rel="stylesheet" href="<?= base_url('assets/admin/'); ?>css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/'); ?>css/responsive.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <form class="form-inline search-full col" action="index.html#" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search In Enzo .." name="q" title="" autofocus>
                                <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form>
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="<?= base_url('assets/admin/'); ?>images/logo/login.png" alt=""></a></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
                </div>
                <div class="nav-right col-8 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li>
                            <div class="mode"><i class="fa-regular fa-moon"></i></div>
                        </li>
                        <li class="maximize"><a class="text-dark" href="index.html#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                        <li class="profile-nav onhover-dropdown p-0 me-0">
                            <div class="d-flex profile-media"><img class="b-r-50" src="<?= base_url('assets/user/images/profile/') . $user['foto']; ?>" style="width: 40px; height:40px;">
                                <div class="flex-grow-1"><span><?= $user['nama']; ?></span>
                                    <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li><a href="user-profile.html"><i data-feather="user"></i><span>Account </span></a></li>
                                <li><a href="<?= base_url('auth/logout'); ?>" class="sub-menu-link"><i data-feather="log-out"></i><span>Logout</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <script class="result-template" type="text/x-handlebars-template">
                    <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
            </div>
            </div>
          </script>
                <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
            </div>
        </div>
        <!-- Page Header Ends -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div>
                    <div class="logo-wrapper">
                        <p style="font-size: 23px; font-weight: bold; color: #128C7E; -webkit-text-stroke-width: 2px; -webkit-text-stroke-color: #ffff; -webkit-text-fill-color: #128C7E;">PuncakPendaki</p>
                        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                        <div class="toggle-sidebar"><i class="fa fa-cog status_toggle middle sidebar-toggle" style="color: white;"> </i></div>
                    </div>
                    <div class="logo-icon-wrapper"><a href="<?= base_url('admin'); ?>"><img class="img-fluid" src="<?= base_url('assets/admin/'); ?>images/logo/logo-icon1.png" alt=""></a></div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"><a href="index.html"><img class="img-fluid" src="<?= base_url('assets/admin/'); ?>images/logo/logo-icon.png" alt=""></a>
                                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                                    </div>
                                </li>
                                <li class="sidebar-main-title">
                                    <h6 class="lan-1">General </h6>
                                </li>
                                <li class="menu-box">
                                    <ul>
                                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav active" href="<?= base_url('admin'); ?>"><i data-feather="home"></i><span>Dashboard</span></a></li>
                                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="<?= base_url('kalender'); ?>"><i data-feather="calendar"> </i><span>Kalender</span></a></li>
                                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="<?= base_url('pesanandata'); ?>"><i class="fa fa-envelope" style="transform: translateY(-25%);">
                                                </i><span>Pesanan</span></a></li>
                                        <li class="sidebar-list">
                                            <a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="check-square"></i><span>Jalur</span></a>
                                            <ul class="sidebar-submenu">
                                                <li><a href="<?= base_url('jalurinformasi'); ?>">Informasi Jalur</a></li>
                                                <li><a href="<?= base_url('galeri'); ?>">Galeri</a></li>
                                                <li><a href="<?= base_url('editjalur'); ?>">Edit Jalur</a></li>
                                                <li><a href="<?= base_url('editgaleri'); ?>">Edit Galeri</a></li>
                                                <li><a href="<?= base_url('historyedit'); ?>">History Aktivitas</a></li>
                                            </ul>
                                        </li>
                                        <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="message-circle"></i><span>Ulasan</span></a>
                                            <ul class="sidebar-submenu">
                                                <li><a href="<?= base_url('adminulasanweb'); ?>">Ulasan Website</a></li>
                                                <li><a href="<?= base_url('adminulasanjalur'); ?>">Ulasan Jalur</a></li>
                                            </ul>
                                        </li>
                                        <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="users"></i><span>Akun</span></a>
                                            <ul class="sidebar-submenu">
                                                <li><a href="<?= base_url('admin/profile'); ?>">Profile</a></li>
                                                <li><a href="<?= base_url('admin/editprofile'); ?>">Edit Profile</a></li>
                                            </ul>
                                        </li>
                                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="<?= base_url('auth/logout'); ?>"><i data-feather="log-out"></i><span>Logout</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <!-- Container-fluid starts-->
                <div class="container-fluid default-dash">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="items-slider">
                                <div class="col-xl-2 col-lg-4 col-sm-4 des-xsm-50 box-col-33">
                                    <div class="card investment-sec">
                                        <div class="animated-bg"><i></i><i></i><i></i></div>
                                        <div class="card-body">
                                            <div class="icon"><i data-feather="dollar-sign"></i></div>
                                            <p>User selesai bayar</p>
                                            <h3>100</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-sm-4 des-xsm-50 box-col-33">
                                    <div class="card investment-sec">
                                        <div class="animated-bg"><i></i><i></i><i></i></div>
                                        <div class="card-body">
                                            <div class="icon"><i data-feather="user"></i></div>
                                            <p>User belum bayar</p>
                                            <h3>50</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-sm-4 des-xsm-50 box-col-33">
                                    <div class="card investment-sec">
                                        <div class="animated-bg"><i></i><i></i><i></i></div>
                                        <div class="card-body">
                                            <div class="icon"><i data-feather="clipboard"></i></div>
                                            <p>Pendaftaran user</p>
                                            <h3>50</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-sm-4 des-xsm-50 box-col-33">
                                    <div class="card investment-sec">
                                        <div class="animated-bg"><i></i><i></i><i></i></div>
                                        <div class="card-body">
                                            <div class="icon"><i data-feather="file-text"></i></div>
                                            <p>Selesai Daftar</p>
                                            <h3>500</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-sm-4 des-xsm-50 box-col-33">
                                    <div class="card investment-sec">
                                        <div class="animated-bg"><i></i><i></i><i></i></div>
                                        <div class="card-body">
                                            <div class="icon"><i data-feather="droplet"></i></div>
                                            <p>Pembatalan</p>
                                            <h3>10</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 box-col-50 xl-50">
                            <div class="card profile-greeting">
                                <div class="card-body"><img class="img-fluid bg-img-cover" src="<?= base_url('assets/admin/'); ?>images/dashboard/profile-greeting/bg.png" alt="">
                                    <div>
                                        <h3>Konfirmasi Pendaftaran</h3>
                                        <h3>Pendakian</h3>
                                        <h5>segera lakukan tindakan</h5>
                                        <p>Periksa data pendaftaran!</p>
                                        <a class="btn btn-primary" href="dataPemesanan.html">Periksa
                                        </a>
                                    </div>
                                </div>
                                <div class="shap-block">
                                    <div class="rounded-shap"><i></i><i></i><i> </i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 box-col-3 our-city">
                            <div class="card recent-activi">
                                <div class="card-header pb-0 border-0">
                                    <h5>Aktivitas Pengelola</h5>
                                    <div class="center-content">
                                        <p>Perbarui beberapa informasi untuk pengunjung</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordernone">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <g>
                                                                    <path d="m345.622 126.038c-50.748-45.076-130.482-46.914-183.244 3.903-21.262 20.478-35.375 47.381-39.737 75.754-5.454 35.471 2.872 70.834 23.444 99.576 56.271 78.616 49.132 141.058 49.915 145.691 0 16.435 6.211 31.795 17.491 43.253 11.289 11.469 26.386 17.785 42.509 17.785 33.084 0 60-26.916 60-60 .686-4.269-6.11-72.81 47.676-143.691 17.875-23.557 27.324-51.673 27.324-81.309 0-38.547-16.54-75.347-45.378-100.962zm-89.622 355.962c-16.486 0-29.462-13.096-29.975-30h59.975c0 16.542-13.458 30-30 30zm83.777-191.826c-30.015 39.554-47.946 84.707-52.569 131.826h-62.57c-4.961-45.331-23.43-91.26-54.157-134.19-15.985-22.333-22.444-49.876-18.188-77.556 7.293-47.43 49.733-88.262 103.846-88.262 58.661 0 104.861 47.891 104.861 105.008 0 23.032-7.339 44.877-21.223 63.174z">
                                                                    </path>
                                                                    <path d="m256 62c8.284 0 15-6.716 15-15v-32c0-8.284-6.716-15-15-15s-15 6.716-15 15v32c0 8.284 6.716 15 15 15z">
                                                                    </path>
                                                                    <path d="m419.385 149.99 25.98-15c7.174-4.142 9.632-13.316 5.49-20.49-4.142-7.175-13.316-9.633-20.49-5.49l-25.98 15c-7.174 4.142-9.632 13.316-5.49 20.49 4.162 7.21 13.349 9.613 20.49 5.49z">
                                                                    </path>
                                                                    <path d="m92.615 304.01-25.98 15c-7.174 4.142-9.632 13.316-5.49 20.49 4.163 7.21 13.35 9.613 20.49 5.49l25.98-15c7.174-4.142 9.632-13.316 5.49-20.49-4.141-7.175-13.316-9.632-20.49-5.49z">
                                                                    </path>
                                                                    <path d="m338.5 84.105c7.141 4.124 16.33 1.716 20.49-5.49l15-25.98c4.142-7.174 1.684-16.348-5.49-20.49-7.174-4.144-16.349-1.685-20.49 5.49l-15 25.98c-4.142 7.175-1.684 16.348 5.49 20.49z">
                                                                    </path>
                                                                    <path d="m153.01 78.615c4.163 7.21 13.35 9.613 20.49 5.49 7.174-4.142 9.632-13.316 5.49-20.49l-15-25.98c-4.142-7.174-13.315-9.633-20.49-5.49-7.174 4.142-9.632 13.316-5.49 20.49z">
                                                                    </path>
                                                                    <path d="m445.365 319.01-25.98-15c-7.175-4.143-16.349-1.684-20.49 5.49-4.142 7.174-1.684 16.348 5.49 20.49l25.98 15c7.141 4.124 16.33 1.716 20.49-5.49 4.143-7.174 1.685-16.348-5.49-20.49z">
                                                                    </path>
                                                                    <path d="m107.615 124.01-25.98-15c-7.175-4.144-16.348-1.684-20.49 5.49s-1.684 16.348 5.49 20.49l25.98 15c7.141 4.124 16.33 1.716 20.49-5.49 4.143-7.174 1.685-16.348-5.49-20.49z">
                                                                    </path>
                                                                    <path d="m466 212h-30c-8.284 0-15 6.716-15 15s6.716 15 15 15h30c8.284 0 15-6.716 15-15s-6.716-15-15-15z">
                                                                    </path>
                                                                    <path d="m91 227c0-8.284-6.716-15-15-15h-30c-8.284 0-15 6.716-15 15s6.716 15 15 15h30c8.284 0 15-6.716 15-15z">
                                                                    </path>
                                                                    <path d="m275.394 216.394-19.394 19.393-19.394-19.393c-5.857-5.858-15.355-5.858-21.213 0s-5.858 15.355 0 21.213l25.607 25.606v53.787c0 8.284 6.716 15 15 15s15-6.716 15-15v-53.787l25.606-25.606c5.858-5.858 5.858-15.355 0-21.213-5.857-5.859-15.355-5.859-21.212 0z">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                            <div class="flex-grow-1">
                                                                <a href="<?= base_url('jalurinformasi'); ?>"><span>Informasi Jalur</span></a>
                                                                <p>Update foto, deskripsi, biaya tiket, s&k, dan fasilitas</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="m362 91v-60h-212v60h-150v390h512c0-16.889 0-372.29 0-390zm-182-30h152v30h-152zm302 390h-452v-202.844l90 36v46.844h90v-30h92v30h90v-46.844l90-36zm-302-150h-30v-60h30zm152-60h30v60h-30c0-7.259 0-52.693 0-60zm150-25.156-90 36v-40.844h-90v60h-92v-60h-90v40.844l-90-36c0-14.163 0-84.634 0-94.844h452z">
                                                                </path>
                                                            </svg>
                                                            <div class="flex-grow-1">
                                                                <a href="dataPemesanan.html"><span>Pesanan</span></a>
                                                                <p>Update status pesanan pengguna</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <g>
                                                                    <path d="m512 390v-390h-512v390h241v32h-15c-41.355 0-75 33.645-75 75v15h210v-15c0-41.355-33.645-75-75-75h-15v-32zm-226 62c19.556 0 36.239 12.539 42.43 30h-144.86c6.191-17.461 22.874-30 42.43-30zm-256-92v-330h452v330c-12.164 0-438.947 0-452 0z">
                                                                    </path>
                                                                    <path d="m136 180c24.813 0 45-20.187 45-45s-20.187-45-45-45-45 20.187-45 45 20.187 45 45 45zm0-60c8.271 0 15 6.729 15 15s-6.729 15-15 15-15-6.729-15-15 6.729-15 15-15z">
                                                                    </path>
                                                                    <path d="m184.568 197.848c-28.678-24.39-60.953-16.827-61.054-16.833-35.639 5.799-62.514 38.985-62.514 77.196v41.789h150v-45c0-22.034-9.634-42.865-26.432-57.152zm-3.568 72.152h-90v-11.789c0-23.666 16.049-44.122 37.332-47.584 13.509-2.198 26.578 1.38 36.801 10.074 10.083 8.577 15.867 21.078 15.867 34.299z">
                                                                    </path>
                                                                    <path d="m241 270h120v30h-120z"></path>
                                                                    <path d="m241 210h210v30h-210z"></path>
                                                                    <path d="m241 150h210v30h-210z"></path>
                                                                    <path d="m331 90h120v30h-120z"></path>
                                                                    <path d="m241 90h60v30h-60z"></path>
                                                                    <path d="m391 270h60v30h-60z"></path>
                                                                </g>
                                                            </svg>
                                                            <div class="flex-grow-1">
                                                                <a href="galeri.html"><span>Galeri Pendaki</span></a>
                                                                <p>Update galeri di setiap jalur</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <i class="fa-regular fa-comment"></i>
                                                            <div class="flex-grow-1">
                                                                <a href="ulasanJalur.html"><span>Ulasan Jalur</span></a>
                                                                <p>Lihat ulasan jalur dari pengguna</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <i class="fa-regular fa-comments"></i>
                                                            <div class="flex-grow-1">
                                                                <a href="ulasanWebsite.html"><span>Ulasan Website</span></a>
                                                                <p>Lihat ulasan website dari pengguna</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="code-box-copy">
                                        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#recentactiviti" title="" data-bs-original-title="Copy" aria-label="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                        <pre><code class="language-html" id="recentactiviti">&lt;div class="card recent-activi"&gt;
               &lt;div class="card-header pb-0 border-0"&gt;
                 &lt;h5&gt;Recent Activity&lt;/h5&gt;
                 &lt;div class="center-content"&gt;
                 &lt;p&gt;Install app , upgrade system&lt;/p&gt;
               &lt;/div&gt;
               &lt;div class="card-header-right"&gt;
                 &lt;ul class="list-unstyled card-option"&gt;
                   &lt;li&gt;&lt;i class="icon-more-alt"&gt;&lt;/i&gt;&lt;/li&gt;
                   &lt;li&gt;&lt;i class="view-html fa fa-code"&gt;&lt;/i&gt;&lt;/li&gt;
                   &lt;li&gt;&lt;i class="icofont icofont-maximize full-card"&gt;&lt;/i&gt;&lt;/li&gt;
                   &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card"&gt;&lt;/i&gt;&lt;/li&gt;
                   &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card"&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class="icofont icofont-error close-card"&gt;&lt;/i&gt;&lt;/li&gt;
                &lt;/ul&gt;
              &lt;/div&gt;
              &lt;/div&gt;
              &lt;div class="card-body ps-0 pe-0"&gt;
               &lt;div class="table-responsive"&gt;
                 &lt;table class="table table-bordernone"&gt;
                   &lt;tbody&gt;
                     &lt;tr&gt; 
                       &lt;td&gt;
                         &lt;div class="media"&gt;
                           &lt;svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve"&gt;&lt;br /&gt;&lt;g&gt;&lt;br /&gt;&lt;g&gt;&lt;br /&gt;&lt;path d="M506.35,80.699c-7.57-7.589-19.834-7.609-27.43-0.052L331.662,227.31l-42.557-42.557c-7.577-7.57-19.846-7.577-27.423,0 L89.076,357.36c-7.577,7.57-7.577,19.853,0,27.423c3.782,3.788,8.747,5.682,13.712,5.682c4.958,0,9.93-1.894,13.711-5.682 l158.895-158.888l42.531,42.524c7.57,7.57,19.808,7.577,27.397,0.032l160.97-160.323 C513.881,100.571,513.907,88.288,506.35,80.699z"&gt;&lt;/path&gt;&lt;br /&gt;&lt;/g&gt;&lt;br /&gt;&lt;/g&gt;&lt;br /&gt;&lt;g&gt;&lt;br /&gt;&lt;g&gt;&lt;br /&gt;&lt;path d="M491.96,449.94H38.788V42.667c0-10.712-8.682-19.394-19.394-19.394S0,31.955,0,42.667v426.667 c0,10.712,8.682,19.394,19.394,19.394H491.96c10.712,0,19.394-8.682,19.394-19.394C511.354,458.622,502.672,449.94,491.96,449.94z "&gt;&lt;/path&gt;&lt;br /&gt;&lt;/g&gt;&lt;br /&gt;&lt;/g&gt;&lt;br /&gt;&lt;g&gt;&lt;br /&gt;&lt;g&gt;&lt;br /&gt;&lt;path d="M492.606,74.344H347.152c-10.712,0-19.394,8.682-19.394,19.394s8.682,19.394,19.394,19.394h126.061v126.067 c0,10.705,8.682,19.394,19.394,19.394S512,249.904,512,239.192V93.738C512,83.026,503.318,74.344,492.606,74.344z"&gt;&lt;/path&gt;&lt;br /&gt;&lt;/g&gt;&lt;br /&gt;&lt;/g&gt;&lt;br /&gt;&lt;/svg&gt;&lt;br /&gt;&lt;div class="media-body"&gt;&lt;span&gt;Google Projetc Apply Review&lt;/span&gt;&lt;br /&gt;&lt;p&gt;Completed in 3 Hours&lt;/p&gt;&lt;br /&gt;&lt;/div&gt;&lt;br /&gt;&lt;/div&gt;&lt;br /&gt;&lt;/td&gt;&lt;br /&gt;&lt;/tr&gt;&lt;br /&gt;&lt;tr&gt;&lt;br /&gt;&lt;td&gt;&lt;br /&gt;&lt;div class="media"&gt;&lt;svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"&gt;&lt;br /&gt;&lt;path d="m362 91v-60h-212v60h-150v390h512c0-16.889 0-372.29 0-390zm-182-30h152v30h-152zm302 390h-452v-202.844l90 36v46.844h90v-30h92v30h90v-46.844l90-36zm-302-150h-30v-60h30zm152-60h30v60h-30c0-7.259 0-52.693 0-60zm150-25.156-90 36v-40.844h-90v60h-92v-60h-90v40.844l-90-36c0-14.163 0-84.634 0-94.844h452z"&gt;&lt;/path&gt;&lt;br /&gt;&lt;/svg&gt;
                           &lt;div class="media-body"&gt;
                             &lt;span&gt;Business Logo Craeate&lt;/span&gt;
                             &lt;p&gt;Completed in 5 Hours&lt;/p&gt;
                           &lt;/div&gt;
                         &lt;/div&gt;
                       &lt;/td&gt;
                     &lt;/tr&gt;
                     &lt;tr&gt;
                      &lt;td&gt;
                         &lt;div class="media"&gt;
                           &lt;svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"&gt;&lt;g&gt;
                             &lt;path d="m345.622 126.038c-50.748-45.076-130.482-46.914-183.244 3.903-21.262 20.478-35.375 47.381-39.737 75.754-5.454 35.471 2.872 70.834 23.444 99.576 56.271 78.616 49.132 141.058 49.915 145.691 0 16.435 6.211 31.795 17.491 43.253 11.289 11.469 26.386 17.785 42.509 17.785 33.084 0 60-26.916 60-60 .686-4.269-6.11-72.81 47.676-143.691 17.875-23.557 27.324-51.673 27.324-81.309 0-38.547-16.54-75.347-45.378-100.962zm-89.622 355.962c-16.486 0-29.462-13.096-29.975-30h59.975c0 16.542-13.458 30-30 30zm83.777-191.826c-30.015 39.554-47.946 84.707-52.569 131.826h-62.57c-4.961-45.331-23.43-91.26-54.157-134.19-15.985-22.333-22.444-49.876-18.188-77.556 7.293-47.43 49.733-88.262 103.846-88.262 58.661 0 104.861 47.891 104.861 105.008 0 23.032-7.339 44.877-21.223 63.174z"&gt;&lt;/path&gt;
                             &lt;path d="m256 62c8.284 0 15-6.716 15-15v-32c0-8.284-6.716-15-15-15s-15 6.716-15 15v32c0 8.284 6.716 15 15 15z"&gt;&lt;/path&gt;
                             &lt;path d="m419.385 149.99 25.98-15c7.174-4.142 9.632-13.316 5.49-20.49-4.142-7.175-13.316-9.633-20.49-5.49l-25.98 15c-7.174 4.142-9.632 13.316-5.49 20.49 4.162 7.21 13.349 9.613 20.49 5.49z"&gt;&lt;/path&gt;&lt;br /&gt;&lt;path d="m92.615 304.01-25.98 15c-7.174 4.142-9.632 13.316-5.49 20.49 4.163 7.21 13.35 9.613 20.49 5.49l25.98-15c7.174-4.142 9.632-13.316 5.49-20.49-4.141-7.175-13.316-9.632-20.49-5.49z"&gt;&lt;/path&gt;&lt;br /&gt;&lt;path d="m338.5 84.105c7.141 4.124 16.33 1.716 20.49-5.49l15-25.98c4.142-7.174 1.684-16.348-5.49-20.49-7.174-4.144-16.349-1.685-20.49 5.49l-15 25.98c-4.142 7.175-1.684 16.348 5.49 20.49z"&gt;&lt;/path&gt;
                             &lt;path d="m153.01 78.615c4.163 7.21 13.35 9.613 20.49 5.49 7.174-4.142 9.632-13.316 5.49-20.49l-15-25.98c-4.142-7.174-13.315-9.633-20.49-5.49-7.174 4.142-9.632 13.316-5.49 20.49z"&gt;&lt;/path&gt;
                             &lt;path d="m445.365 319.01-25.98-15c-7.175-4.143-16.349-1.684-20.49 5.49-4.142 7.174-1.684 16.348 5.49 20.49l25.98 15c7.141 4.124 16.33 1.716 20.49-5.49 4.143-7.174 1.685-16.348-5.49-20.49z"&gt;&lt;/path&gt;&lt;br /&gt;&lt;path d="m107.615 124.01-25.98-15c-7.175-4.144-16.348-1.684-20.49 5.49s-1.684 16.348 5.49 20.49l25.98 15c7.141 4.124 16.33 1.716 20.49-5.49 4.143-7.174 1.685-16.348-5.49-20.49z"&gt;&lt;/path&gt;
                             &lt;path d="m466 212h-30c-8.284 0-15 6.716-15 15s6.716 15 15 15h30c8.284 0 15-6.716 15-15s-6.716-15-15-15z"&gt;&lt;/path&gt;&lt;br /&gt;&lt;path d="m91 227c0-8.284-6.716-15-15-15h-30c-8.284 0-15 6.716-15 15s6.716 15 15 15h30c8.284 0 15-6.716 15-15z"&gt;&lt;/path&gt;&lt;br /&gt;&lt;path d="m275.394 216.394-19.394 19.393-19.394-19.393c-5.857-5.858-15.355-5.858-21.213 0s-5.858 15.355 0 21.213l25.607 25.606v53.787c0 8.284 6.716 15 15 15s15-6.716 15-15v-53.787l25.606-25.606c5.858-5.858 5.858-15.355 0-21.213-5.857-5.859-15.355-5.859-21.212 0z"&gt;&lt;/path&gt;&lt;br /&gt;&lt;/g&gt;
                           &lt;/svg&gt;
                           &lt;div class="media-body"&gt;
                             &lt;span&gt;Business Project Research&lt;/span&gt;
                             &lt;p&gt;Due in 1 hour&lt;/p&gt;
                           &lt;/div&gt;
                           &lt;/div&gt;
                      &lt;/td&gt;
                     &lt;/tr&gt;
                     &lt;tr&gt;
                       &lt;td&gt;
                         &lt;div class="media"&gt;
                           &lt;svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"&gt;&lt;g&gt;
                             &lt;path d="m512 390v-390h-512v390h241v32h-15c-41.355 0-75 33.645-75 75v15h210v-15c0-41.355-33.645-75-75-75h-15v-32zm-226 62c19.556 0 36.239 12.539 42.43 30h-144.86c6.191-17.461 22.874-30 42.43-30zm-256-92v-330h452v330c-12.164 0-438.947 0-452 0z"&gt;&lt;/path&gt;&lt;br /&gt;&lt;path d="m136 180c24.813 0 45-20.187 45-45s-20.187-45-45-45-45 20.187-45 45 20.187 45 45 45zm0-60c8.271 0 15 6.729 15 15s-6.729 15-15 15-15-6.729-15-15 6.729-15 15-15z"&gt;&lt;/path&gt;&lt;br /&gt;&lt;path d="m184.568 197.848c-28.678-24.39-60.953-16.827-61.054-16.833-35.639 5.799-62.514 38.985-62.514 77.196v41.789h150v-45c0-22.034-9.634-42.865-26.432-57.152zm-3.568 72.152h-90v-11.789c0-23.666 16.049-44.122 37.332-47.584 13.509-2.198 26.578 1.38 36.801 10.074 10.083 8.577 15.867 21.078 15.867 34.299z"&gt;&lt;/path&gt;&lt;br /&gt;&lt;path d="m241 270h120v30h-120z"&gt;&lt;/path&gt;&lt;br /&gt;&lt;path d="m241 210h210v30h-210z"&gt;&lt;/path&gt;&lt;br /&gt;&lt;path d="m241 150h210v30h-210z"&gt;&lt;/path&gt;&lt;br /&gt;&lt;path d="m331 90h120v30h-120z"&gt;&lt;/path&gt;&lt;br /&gt;&lt;path d="m241 90h60v30h-60z"&gt;&lt;/path&gt;&lt;br /&gt;&lt;path d="m391 270h60v30h-60z"&gt;&lt;/path&gt;&lt;br /&gt;&lt;/g&gt;&lt;br /&gt;&lt;/svg&gt;
                           &lt;div class="media-body"&gt;
                             &lt;span&gt;Recruitment in IT Department&lt;/span&gt;
                             &lt;p&gt;Complete in 2 Hours&lt;/p&gt;
                           &lt;/div&gt;
                         &lt;/div&gt;
                       &lt;/td&gt;
                     &lt;/tr&gt;
                     &lt;tr&gt;
                       &lt;td&gt;
                         &lt;div class="media"&gt;
                           &lt;svg viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"&gt;&lt;br /&gt;&lt;path d="m437.019531 74.980469c-48.351562-48.351563-112.640625-74.980469-181.019531-74.980469s-132.667969 26.628906-181.019531 74.980469c-48.351563 48.351562-74.980469 112.640625-74.980469 181.019531s26.628906 132.667969 74.980469 181.019531c48.351562 48.351563 112.640625 74.980469 181.019531 74.980469s132.667969-26.628906 181.019531-74.980469c48.351563-48.351562 74.980469-112.640625 74.980469-181.019531s-26.628906-132.667969-74.980469-181.019531zm-181.019531 407.019531c-124.617188 0-226-101.382812-226-226s101.382812-226 226-226 226 101.382812 226 226-101.382812 226-226 226zm0 0"&gt;&lt;/path&gt;&lt;br /&gt;&lt;path d="m326.203125 234.433594-23.339844 5.160156v-112.898438c0-8.285156-6.71875-15-15-15h-63.722656c-8.285156 0-15 6.714844-15 15v112.898438l-23.34375-5.160156c-10.226563-2.261719-20.695313 1.832031-26.675781 10.429687-5.976563 8.597657-6.171875 19.839844-.492188 28.636719l73.398438 113.742188c5.277344 8.179687 14.238281 13.0625 23.972656 13.0625s18.695312-4.882813 23.972656-13.0625l73.402344-113.738282c5.679688-8.800781 5.484375-20.042968-.496094-28.640625-5.980468-8.597656-16.449218-12.691406-26.675781-10.429687zm-105.304687 38.488281c4.441406.980469 9.085937-.105469 12.632812-2.949219 3.546875-2.847656 5.609375-7.152344 5.609375-11.699218v-116.578126h33.722656v116.578126c0 4.546874 2.0625 8.851562 5.605469 11.699218 3.546875 2.847656 8.191406 3.929688 12.632812 2.949219l31.429688-6.953125-66.53125 103.09375-66.527344-103.09375zm0 0"&gt;&lt;/path&gt;&lt;br /&gt;&lt;/svg&gt;
                           &lt;div class="media-body"&gt;
                             &lt;span&gt;Submit Riverfront Project&lt;/span&gt;
                             &lt;p&gt;Complete in 2 Days&lt;/p&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      &lt;/td&gt;
                    &lt;/tr&gt;
                  &lt;/tbody&gt;
                &lt;/table&gt;
                 &lt;/div&gt;
                &lt;/div&gt;
               &lt;/div&gt;</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>

        </div>
    </div>
    <!-- latest jquery-->
    <script src="<?= base_url('assets/admin/'); ?>js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js-->
    <script src="<?= base_url('assets/admin/'); ?>js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="<?= base_url('assets/admin/'); ?>js/icons/feather-icon/feather.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="<?= base_url('assets/admin/'); ?>js/scrollbar/simplebar.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="<?= base_url('assets/admin/'); ?>js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="<?= base_url('assets/admin/'); ?>js/sidebar-menu.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/chart/chartist/chartist.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/chart/knob/knob.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/chart/knob/knob-chart.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/chart/apex-chart/apex-chart.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/chart/apex-chart/stock-prices.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/prism/prism.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/clipboard/clipboard.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/custom-card/custom-card.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/notify/bootstrap-notify.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/dashboard/default.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/notify/index.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/slick-slider/slick.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/slick-slider/slick-theme.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/typeahead/handlebars.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/typeahead/typeahead.bundle.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/typeahead/typeahead.custom.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/typeahead-search/handlebars.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/typeahead-search/typeahead-custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?= base_url('assets/admin/'); ?>js/script.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-2Tl4MsB+qWXJd5FKh6kt..."></script>

</body>

</html>