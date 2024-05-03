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
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/'); ?>css/vendors/date-picker.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/'); ?>css/vendors/dropzone.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/'); ?>css/vendors/select2.css">
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
    <div class="page-wrapper default-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <form class="form-inline search-full col" action="projectcreate.html#" method="get">
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
                    <div class="logo-wrapper"><a href="<?= base_url('admin'); ?>"><img class="img-fluid" src="<?= base_url('assets/admin/'); ?>images/logo/login.png" alt=""></a></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
                </div>
                <div class="nav-right col-8 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li>
                            <div class="mode"><i class="fa fa-moon-o"></i></div>
                        </li>
                        <li class="maximize"><a class="text-dark" href="projectcreate.html#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                        <li class="profile-nav onhover-dropdown p-0 me-0">
                            <div class="d-flex profile-media"><img class="b-r-50" src="<?= base_url('assets/user/images/profile/') . $user['foto']; ?> alt="">
                                <div class=" flex-grow-1"><span><?= $user['nama']; ?></span>
                                <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                            </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                    <li><a href="user-profile.html"><i data-feather="user"></i><span>Account </span></a></li>
                    <li><a href="<?= base_url('auth/logout'); ?>"><i data-feather="log-in"> </i><span>Logout</span></a></li>
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
    <div class="page-body-wrapper default-menu default-menu">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
            <div>
                <div class="logo-wrapper">
                    <p style="font-size: 23px; font-weight: bold; color: #128C7E; -webkit-text-stroke-width: 2px; -webkit-text-stroke-color: #ffff; -webkit-text-fill-color: #128C7E;">
                        PuncakPendaki</p>
                    <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                    <div class="toggle-sidebar"><i class="fa fa-cog status_toggle middle sidebar-toggle" style="color: white;">
                        </i></div>
                </div>
                <div class="logo-icon-wrapper"><a href="<?= base_url('admin'); ?>"><img class="img-fluid" src="<?= base_url('assets/admin/'); ?>images/logo/logo-icon1.png" alt=""></a></div>
                <nav class="sidebar-main">
                    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                    <div id="sidebar-menu">
                        <ul class="sidebar-links" id="simple-bar">
                            <li class="back-btn"><a href="<?= base_url('admin'); ?>"><img class="img-fluid" src="<?= base_url('assets/admin/'); ?>images/logo/logo-icon.png" alt=""></a>
                                <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                                </div>
                            </li>
                            <li class="sidebar-main-title">
                                <h6 class="lan-1">General </h6>
                            </li>
                            <li class="menu-box">
                                <ul>
                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="<?= base_url('admin'); ?>"><i data-feather="home"></i><span>Dashboard</span></a></li>
                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="<?= base_url('kalender'); ?>"><i data-feather="calendar"> </i><span>Kalender</span></a>
                                    </li>
                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="<?= base_url('pesanandata'); ?>"><i class="fa fa-envelope" style="transform: translateY(-7%); padding-right: 10px;">
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
                                            <li><a href="ulasanWebsite.html">Ulasan Website</a></li>
                                            <li><a href="ulasanJalur.html">Ulasan Jalur</a></li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="users"></i><span>Akun</span></a>
                                        <ul class="sidebar-submenu">
                                            <li><a href="user-profile.html">Profile</a></li>
                                            <li><a href="edit-profile.html">Edit Profile</a></li>
                                        </ul>
                                    </li>
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
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>
                                Perbarui Informasi Jalur</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form theme-form">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Aktivitas Pengelola</label>
                                                <select class="form-select">
                                                    <option>Memperbarui deskripsi Jalur</option>
                                                    <option>Memperbarui gambar basecamp</option>
                                                    <option>Memperbarui gambar peta</option>
                                                    <option>Memperbarui fasilitas</option>
                                                    <option>Memperbarui harga tiket</option>
                                                    <option>Memperbarui syarat dan ketentuan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Deskripsi Jalur</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label>Upload Gambar Basecamp</label>
                                                <form class="dropzone" id="singleFileUpload" action="https://admin.pixelstrap.com/upload.php">
                                                    <div class="dz-message needsclick"><i <i class="fa-solid fa-cloud-arrow-up"></i></i>
                                                        <h6 class=" mt-2">Letakkan file di sini atau klik untuk mengunggah.</h6>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label>Upload Gambar Peta</label>
                                                <form class="dropzone" id="singleFileUpload" action="https://admin.pixelstrap.com/upload.php">
                                                    <div class="dz-message needsclick"><i <i class="fa-solid fa-cloud-arrow-up"></i></i>
                                                        <h6 class=" mt-2">Letakkan file di sini atau klik untuk mengunggah.</h6>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 card-body o-hidden" style="padding-top: 0px; padding-bottom: 0px; padding-left: 12px;">
                                            <div class="col-form-label">Fasilitas Jalur
                                                <select class="js-example-basic-hide-search col-sm-12" multiple="multiple">
                                                    <optgroup label="Masukkan Maksimal 6 fasilitas">
                                                        <option value="AL">Shelter</option>
                                                        <option value="WY">Parkir</option>
                                                        <option value="WY">Toilet</option>
                                                        <option value="WY">Warung Makan</option>
                                                        <option value="WY">Listrik</option>
                                                        <option value="WY">Mushola</option>
                                                        <option value="WY">Camping Ground</option>
                                                        <option value="WY">Minimarket</option>
                                                        <option value="WY">Sewa Peralatan</option>
                                                        <option value="WY">P3K</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 mt-2">
                                            <div class="mb-3">
                                                <label>Tiket Pendakian</label>
                                                <input class="form-control" type="text" placeholder="Masukkan total tiket pendakian">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mt-2">
                                            <div class="mb-3">
                                                <label>Parkir Motor</label>
                                                <input class="form-control" type="text" placeholder="Masukkan jumlah parkir motor">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Syarat</label>
                                                <input class="form-control" type="text" placeholder="Masukkan total tiket pendakian">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Ketentuan</label>
                                                <input class="form-control" type="text" placeholder="Masukkan total tiket pendakian">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row"></div>
                                    <div class="col">
                                        <div class="text-end mt-3"><a class="btn me-3" style="background-color: #076461; color: white;" href="informasiJalur.html">Simpan</a><a class="btn btn-danger" href="informasiJalur.html" style="background-color: red;">Batal</a></div>
                                    </div>
                                </div>
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
    <script src="<?= base_url('assets/admin/'); ?>js/datepicker/date-picker/datepicker.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/dropzone/dropzone.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/dropzone/dropzone-script.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/typeahead/handlebars.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/typeahead/typeahead.bundle.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/typeahead/typeahead.custom.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/typeahead-search/handlebars.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/typeahead-search/typeahead-custom.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/select2/select2.full.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/select2/select2-custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?= base_url('assets/admin/'); ?>js/script.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>