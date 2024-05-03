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
                <form class="form-inline search-full col" action="tab-material.html#" method="get">
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
                    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="<?= base_url('admin'); ?>images/logo/login.png" alt=""></a></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
                </div>
                <div class="nav-right col-8 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li>
                            <div class="mode"><i class="fa fa-moon-o"></i></div>
                        </li>
                        <li class="maximize"><a class="text-dark" href="tab-material.html#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                        <li class="profile-nav onhover-dropdown p-0 me-0">
                            <div class="d-flex profile-media"><img class="b-r-50" src="<?= base_url('assets/user/images/profile/') . $user['foto']; ?>" alt="">
                                <div class="flex-grow-1"><span><?= $user['nama']; ?></span>
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
        <div class="page-body-wrapper">
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
                    <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="<?= base_url('assets/admin/'); ?>images/logo/logo-icon1.png" alt=""></a></div>
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
                                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="<?= base_url('admin'); ?>"><i data-feather="home"></i><span>Dashboard</span></a></li>
                                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="<?= base_url('kalendar'); ?>"><i data-feather="calendar"> </i><span>Kalender</span></a>
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
                                <h3>Informasi Jalur</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-xl-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h5>Jalur Pendakian</h5><span>Pilih jalur pendakian yang akan diperbarui informasi mengenai deskripsi jalur, gambar basecamp dan peta, fasilitas, tikert pembayaran, serta srarat dan ketentuan.</span>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3 tabs-responsive-side">
                                            <div class="nav flex-column nav-pills border-tab nav-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="tab-material.html#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Patak Banteng</a>
                                                <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="tab-material.html#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Dieng</a>
                                                <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="tab-material.html#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Dwarawati</a>
                                                <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="tab-material.html#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Kalilembu</a>
                                                <a class="nav-link" id="v-pills-wates-tab" data-bs-toggle="pill" href="tab-material.html#v-pills-wates" role="tab" aria-controls="v-pills-wates" aria-selected="false">Wates</a>
                                                <a class="nav-link" id="v-pills-igirmranak-tab" data-bs-toggle="pill" href="tab-material.html#v-pills-igirmranak" role="tab" aria-controls="v-pills-igirmranak" aria-selected="false">Igirmranak</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="tab-content" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                    <div class="col-xl-12 col-md-12 box-col-70">
                                                        <div class="email-right-aside">
                                                            <div class="card email-body">
                                                                <div class="email-profile">
                                                                    <div class="email-right-aside">
                                                                        <div class="email-body">
                                                                            <div class="email-content">
                                                                                <div class="email-wrapper">
                                                                                    <div class="emailread-group">
                                                                                        <div class="read-group px-1">
                                                                                            <h5>Gunung Prau Via Patak Banteng</h5>
                                                                                            <p>Jalur ini terletak di Jl. Dieng KM. 24, Patakbanteng, Kec. Kejajar, Kabupaten
                                                                                                Wonosobo, Jawa Tengah. Jalur pendakian
                                                                                                Gunung Prau via Patak Banteng merupakan jalur paling favorit yang biasa
                                                                                                dipilih pendaki. Hal ini karena rutenya
                                                                                                terbilang lebih singkat dibandingkan jalur lainnya. Selain itu, beragam
                                                                                                fasilitas juga telah memenuhi untuk kenyamanan
                                                                                                pendakian, rutenya tidak terlalu sulit dan rutenya paling dekat dengan
                                                                                                puncak Prau. Untuk menempuh jalur Patak Banteng
                                                                                                pendaki hanya perlu menempuh jarak sekitar 4 kilometer atau jika ditarik
                                                                                                garis lurus hanya 600 meter. Terdapat empat pos
                                                                                                yang melalui Patak Banteng yaitu Pos 1 Sikut Dewo, Pos 2 Canggal Walangan,
                                                                                                Pos 3 Cacingan, dan Pos 4 Plawangan. Kemudian
                                                                                                pendaki bisa mendirikan tenda di Sunrise Camp.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="container-fluid" style="padding: 0px; margin: 0px;">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <div class="card" style="border-radius: 0px; -webkit-box-shadow: none; box-shadow: none; border-bottom: 1.5px solid #eeeeee; margin-bottom: 15px;">
                                                                                                    <div class="card-header pb-0 px-1" style="padding-left: 0px; margin-left: 0px;">
                                                                                                        <h5 style=" font-size: 18px; font-weight: 500; color: #2b2b2b;">Gambar Basecamp Dan Peta Jalur</h5>
                                                                                                    </div>
                                                                                                    <div class="card-body pt-1 pb-4 px-1" style="padding: 0px; padding-bottom: 10px;">
                                                                                                        <div class="row gallery my-gallery" itemscope="">
                                                                                                            <figure class="col-xl-4 col-md-4 col-sm-6 box-col-33" itemprop="associatedMedia" itemscope=""><a href="https://admin.pixelstrap.com/enzo/assets/images/big-lightgallry/01.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="<?= base_url('assets/admin/'); ?>images/email/patak banteng.png" itemprop="thumbnail" alt="Image description" style="cursor: default;"></a>
                                                                                                            </figure>
                                                                                                            <figure class="col-xl-4 col-md-4 col-sm-6 box-col-33" itemprop="associatedMedia" itemscope=""><a href="https://admin.pixelstrap.com/enzo/assets/images/big-lightgallry/02.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="<?= base_url('assets/admin/'); ?>images/email/jalur patakbanteng.png" itemprop="thumbnail" alt="Image description" style="cursor: default;"></a>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- Container-fluid Ends-->
                                                                                    <div class="emailread-group px-1" style="border-bottom: 1.5px solid #eeeeee; margin-bottom: 15px; padding-bottom: 10px;">
                                                                                        <div class="read-group">
                                                                                            <h5>Fasilitas Basecamp</h5>
                                                                                            <ul>
                                                                                                <li>Tempat Parkir</li>
                                                                                                <li>Mushola</li>
                                                                                                <li>Listrik</li>
                                                                                                <li>Shelter</li>
                                                                                                <li>Toilet</li>
                                                                                                <li>Warung Makan</li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="emailread-group px-1" style="border-bottom: 1.5px solid #eeeeee; margin-bottom: 15px; padding-bottom: 10px;">
                                                                                        <div class="read-group">
                                                                                            <h5>Harga Tiket Pendakian</h5>
                                                                                            <p>Tiket pendakian 1 orang</p>
                                                                                            <p>Rp20.000</p>
                                                                                            <p class="m-t-10">Parkir motor 1 unit</p>
                                                                                            <p>Rp10.000</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="emailread-group px-1" style="border-bottom: 1.5px solid #eeeeee; margin-bottom: 15px; padding-bottom: 10px;">
                                                                                        <div class="read-group">
                                                                                            <h5>Syarat Dan Ketentuan</h5>
                                                                                            <ul>Wajib Membawa Surat Keterangan Sehat
                                                                                                <li>Dipastikan tidak ada gejala Covid – 19</li>
                                                                                                <li>Masa berlaku surat keterangan sehat 3 hari</li>
                                                                                                <li>Surat keterangan sehat bisa dari daerah asal atau puskesmas daerah
                                                                                                    wonosobo</li>
                                                                                            </ul>
                                                                                            <p> </p>
                                                                                            <ul>Wajib mematuhi peraturan basecamp
                                                                                                <li>Harus sopan, baik tingkah laku/perbuatan ataupun ucapan</li>
                                                                                                <li>Setiap pendaki wajib lapor kepada petugas basecamp sebelum dan sesudah
                                                                                                    pendakian</li>
                                                                                                <li>Membawa peralatan pendakian yang memadai</li>
                                                                                                <li>Bersedia diperiksa oleh petugas</li>
                                                                                                <li>Membawa kembali sampah</li>
                                                                                                <li>Dilarang mengambil, memetik, memotong tumbuhan dan bagian - bagiannya
                                                                                                </li>
                                                                                                <li>Dilarang menangkap, membunuh, dan melukai satwa</li>
                                                                                                <li>Dilarang membawa alat musik</li>
                                                                                                <li>Dilarang membawa senjata tajan lebih dari 15 cm</li>
                                                                                                <li>Dilarang merusak sarana prasarana basecamp</li>
                                                                                                <li>Dilarang mencoret baty/vandalisme</li>
                                                                                                <li>Dilarang membawa daging segar ( kecuali ikan )</li>
                                                                                                <li>Dilarang membuang sampah di kawasan</li>
                                                                                                <li>Dilarang membuat api unggun</li>
                                                                                                <li>Dilarang mesum</li>
                                                                                                <li>Dilarang membawa <strong>TISU BASAH</strong></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="action-wrapper" style="transform: translateX(70%);">
                                                                                        <ul class="actions py-3">
                                                                                            <li><a class="btn btn-primary me-2" href="editJalur.html"><i class="fa fa-share me-2"></i>Update</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                    <div class="col-xl-12 col-md-12 box-col-70">
                                                        <div class="email-right-aside">
                                                            <div class="card email-body">
                                                                <div class="email-profile">
                                                                    <div class="email-right-aside">
                                                                        <div class="email-body">
                                                                            <div class="email-content">
                                                                                <div class="email-wrapper">
                                                                                    <div class="emailread-group">
                                                                                        <div class="read-group px-1">
                                                                                            <h5>Gunung Prau Via Dieng</h5>
                                                                                            <p>Jalur ini terletak di Jl. Raya Wonosobo, Batur - Dieng Jl. Dieng Km. 26, Kec. Kejajar, Kabupaten Wonosobo, Jawa Tengah.
                                                                                                Jalur prau via Dieng terbilang landai dan treknya yang panjang. Jalur Dieng biasa digunakan pendaki yang ingin menikmati
                                                                                                pemandangan indah selama pendakian. Oleh karena itu, jalur ini cocok bagi kamu yang bertipe pendaki santai. Untuk sampai
                                                                                                puncak Prau dibutuhkan waktu sekitar 3-4 jam. Terdapat empat pos pendakian yang harus dilewati. Pos satu dan dua masih
                                                                                                berupa jalur hutan yang dengan sensasi meneduhkan dan menyejukkan jika dilakukan siang hari. Namun jika malam hari akan
                                                                                                terasa lembab. Pos tiga dan pos empat merupakan kawasan yang terbuka dengan sedikit pepohonan. Sebaliknya, jika
                                                                                                pendakian dilakukan malam hari akan terasa dingin. Pos satu bernama Pos Gemekan, Pos dua Semendung, Pos tiga Nganjir,
                                                                                                dan pos empat puncak gunung Prau.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="container-fluid" style="padding: 0px; margin: 0px;">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <div class="card" style="border-radius: 0px; -webkit-box-shadow: none; box-shadow: none; border-bottom: 1.5px solid #eeeeee; margin-bottom: 15px;">
                                                                                                    <div class="card-header pb-0 px-1" style="padding-left: 0px; margin-left: 0px;">
                                                                                                        <h5 style=" font-size: 18px; font-weight: 500; color: #2b2b2b;">
                                                                                                            Gambar Basecamp Dan Peta Jalur</h5>
                                                                                                    </div>
                                                                                                    <div class="card-body pt-1 px-1" style="padding: 0px; padding-bottom: 10px;">
                                                                                                        <div class="row gallery my-gallery" itemscope="">
                                                                                                            <figure class="col-xl-4 col-md-4 col-sm-6 box-col-33" itemprop="associatedMedia" itemscope=""><a href="https://admin.pixelstrap.com/enzo/assets/images/big-lightgallry/01.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="<?= base_url('assets/admin/'); ?>images/email/Dieng.png" itemprop="thumbnail" alt="Image description" style="cursor: default;"></a>
                                                                                                            </figure>
                                                                                                            <figure class="col-xl-4 col-md-4 col-sm-6 box-col-33" itemprop="associatedMedia" itemscope=""><a href="https://admin.pixelstrap.com/enzo/assets/images/big-lightgallry/02.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="<?= base_url('assets/admin/'); ?>images/email/jalur dieng.png" itemprop="thumbnail" alt="Image description" style="cursor: default;"></a>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- Container-fluid Ends-->
                                                                                    <div class="emailread-group px-1" style="border-bottom: 1.5px solid #eeeeee; margin-bottom: 15px; padding-bottom: 10px;">
                                                                                        <div class="read-group">
                                                                                            <h5>Fasilitas Basecamp</h5>
                                                                                            <ul>
                                                                                                <li>Tempat Parkir</li>
                                                                                                <li>Mushola</li>
                                                                                                <li>Listrik</li>
                                                                                                <li>Shelter</li>
                                                                                                <li>Toilet</li>
                                                                                                <li>Warung Makan</li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="emailread-group px-1" style="border-bottom: 1.5px solid #eeeeee; margin-bottom: 15px; padding-bottom: 10px;">
                                                                                        <div class="read-group">
                                                                                            <h5>Harga Tiket Pendakian</h5>
                                                                                            <p>Tiket pendakian 1 orang</p>
                                                                                            <p>Rp20.000</p>
                                                                                            <p class="m-t-10">Parkir motor 1 unit</p>
                                                                                            <p>Rp10.000</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="emailread-group px-1" style="border-bottom: 1.5px solid #eeeeee; margin-bottom: 15px; padding-bottom: 10px;">
                                                                                        <div class="read-group">
                                                                                            <h5>Syarat Dan Ketentuan</h5>
                                                                                            <ul>Wajib Membawa Surat Keterangan Sehat
                                                                                                <li>Dipastikan tidak ada gejala Covid – 19</li>
                                                                                                <li>Masa berlaku surat keterangan sehat 3 hari</li>
                                                                                                <li>Surat keterangan sehat bisa dari daerah asal atau puskesmas daerah
                                                                                                    wonosobo</li>
                                                                                            </ul>
                                                                                            <p> </p>
                                                                                            <ul>Wajib mematuhi peraturan basecamp
                                                                                                <li>Harus sopan, baik tingkah laku/perbuatan ataupun ucapan</li>
                                                                                                <li>Setiap pendaki wajib lapor kepada petugas basecamp sebelum dan sesudah
                                                                                                    pendakian</li>
                                                                                                <li>Membawa peralatan pendakian yang memadai</li>
                                                                                                <li>Bersedia diperiksa oleh petugas</li>
                                                                                                <li>Membawa kembali sampah</li>
                                                                                                <li>Dilarang mengambil, memetik, memotong tumbuhan dan bagian - bagiannya
                                                                                                </li>
                                                                                                <li>Dilarang menangkap, membunuh, dan melukai satwa</li>
                                                                                                <li>Dilarang membawa alat musik</li>
                                                                                                <li>Dilarang membawa senjata tajan lebih dari 15 cm</li>
                                                                                                <li>Dilarang merusak sarana prasarana basecamp</li>
                                                                                                <li>Dilarang mencoret baty/vandalisme</li>
                                                                                                <li>Dilarang membawa daging segar ( kecuali ikan )</li>
                                                                                                <li>Dilarang membuang sampah di kawasan</li>
                                                                                                <li>Dilarang membuat api unggun</li>
                                                                                                <li>Dilarang mesum</li>
                                                                                                <li>Dilarang membawa <strong>TISU BASAH</strong></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="action-wrapper" style="transform: translateX(70%);">
                                                                                        <ul class="actions py-3">
                                                                                            <li><a class="btn btn-primary me-2" href="editJalur.html"><i class="fa fa-share me-2"></i>Update</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                    <div class="col-xl-12 col-md-12 box-col-70">
                                                        <div class="email-right-aside">
                                                            <div class="card email-body">
                                                                <div class="email-profile">
                                                                    <div class="email-right-aside">
                                                                        <div class="email-body">
                                                                            <div class="email-content">
                                                                                <div class="email-wrapper">
                                                                                    <div class="emailread-group">
                                                                                        <div class="read-group px-1">
                                                                                            <h5>Gunung Prau Via Dwarawati</h5>
                                                                                            <p>Jalur ini terletak di Jl. Raya Wonosobo, Batur - Dieng Jl. Dieng Km. 26, Kec. Kejajar, Kabupaten Wonosobo, Jawa Tengah.
                                                                                                Jalur ini dikenal juga sebagai jalur prau via Dieng Kulon. Pada awal pendakian, kamu akan melihat pemandangan hijaunya
                                                                                                alam Dieng yang tampak memukau. Kamu bisa melihat pula persawahan di lereng-lereng pegunungan tampak cantik berselimut
                                                                                                kabut. Sepanjang pendakian, kamu akan melalui jalur yang rata-rata merupakan tanah berundak. Jalur ini tergolong aman,
                                                                                                namun kamu tetap perlu memerhatikan kondisi alas kaki agar tidak licin. Jalur penuh akar juga akan kamu temui ketika
                                                                                                mendaki. Jalur ini dinamakan akar cinta. Usahakan untuk selalu memerhatikan langkah agar tak tersandung akar tersebut.
                                                                                                Ketika melewati Pos 2, sesekali kamu bisa lihat pemandangan Gunung Sindoro dan Sumbing dari kejauhan. Pendaki akan
                                                                                                sampai puncak dan mendirikan tenda di area camp Telaga Wurung dengan pemandangan awan menggumpal dan rumput hijau.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="container-fluid" style="padding: 0px; margin: 0px;">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <div class="card" style="border-radius: 0px; -webkit-box-shadow: none; box-shadow: none; border-bottom: 1.5px solid #eeeeee; margin-bottom: 15px;">
                                                                                                    <div class="card-header pb-0 px-1" style="padding-left: 0px; margin-left: 0px;">
                                                                                                        <h5 style=" font-size: 18px; font-weight: 500; color: #2b2b2b;">
                                                                                                            Gambar Basecamp Dan Peta Jalur</h5>
                                                                                                    </div>
                                                                                                    <div class="card-body pt-1 px-1" style="padding: 0px; padding-bottom: 10px;">
                                                                                                        <div class="row gallery my-gallery" itemscope="">
                                                                                                            <figure class="col-xl-4 col-md-4 col-sm-6 box-col-33" itemprop="associatedMedia" itemscope=""><a href="https://admin.pixelstrap.com/enzo/assets/images/big-lightgallry/01.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="<?= base_url('assets/admin/'); ?>images/email/dwarawati.png" itemprop="thumbnail" alt="Image description" style="cursor: default;"></a>
                                                                                                            </figure>
                                                                                                            <figure class="col-xl-4 col-md-4 col-sm-6 box-col-33" itemprop="associatedMedia" itemscope=""><a href="https://admin.pixelstrap.com/enzo/assets/images/big-lightgallry/02.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="<?= base_url('assets/admin/'); ?>images/email/jalur dieng.png" itemprop="thumbnail" alt="Image description" style="cursor: default;"></a>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- Container-fluid Ends-->
                                                                                    <div class="emailread-group px-1" style="border-bottom: 1.5px solid #eeeeee; margin-bottom: 15px; padding-bottom: 10px;">
                                                                                        <div class="read-group">
                                                                                            <h5>Fasilitas Basecamp</h5>
                                                                                            <ul>
                                                                                                <li>Tempat Parkir</li>
                                                                                                <li>Mushola</li>
                                                                                                <li>Listrik</li>
                                                                                                <li>Shelter</li>
                                                                                                <li>Toilet</li>
                                                                                                <li>Warung Makan</li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="emailread-group px-1" style="border-bottom: 1.5px solid #eeeeee; margin-bottom: 15px; padding-bottom: 10px;">
                                                                                        <div class="read-group">
                                                                                            <h5>Harga Tiket Pendakian</h5>
                                                                                            <p>Tiket pendakian 1 orang</p>
                                                                                            <p>Rp20.000</p>
                                                                                            <p class="m-t-10">Parkir motor 1 unit</p>
                                                                                            <p>Rp10.000</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="emailread-group px-1" style="border-bottom: 1.5px solid #eeeeee; margin-bottom: 15px; padding-bottom: 10px;">
                                                                                        <div class="read-group">
                                                                                            <h5>Syarat Dan Ketentuan</h5>
                                                                                            <ul>Wajib Membawa Surat Keterangan Sehat
                                                                                                <li>Dipastikan tidak ada gejala Covid – 19</li>
                                                                                                <li>Masa berlaku surat keterangan sehat 3 hari</li>
                                                                                                <li>Surat keterangan sehat bisa dari daerah asal atau puskesmas daerah
                                                                                                    wonosobo</li>
                                                                                            </ul>
                                                                                            <p> </p>
                                                                                            <ul>Wajib mematuhi peraturan basecamp
                                                                                                <li>Harus sopan, baik tingkah laku/perbuatan ataupun ucapan</li>
                                                                                                <li>Setiap pendaki wajib lapor kepada petugas basecamp sebelum dan sesudah
                                                                                                    pendakian</li>
                                                                                                <li>Membawa peralatan pendakian yang memadai</li>
                                                                                                <li>Bersedia diperiksa oleh petugas</li>
                                                                                                <li>Membawa kembali sampah</li>
                                                                                                <li>Dilarang mengambil, memetik, memotong tumbuhan dan bagian - bagiannya
                                                                                                </li>
                                                                                                <li>Dilarang menangkap, membunuh, dan melukai satwa</li>
                                                                                                <li>Dilarang membawa alat musik</li>
                                                                                                <li>Dilarang membawa senjata tajan lebih dari 15 cm</li>
                                                                                                <li>Dilarang merusak sarana prasarana basecamp</li>
                                                                                                <li>Dilarang mencoret baty/vandalisme</li>
                                                                                                <li>Dilarang membawa daging segar ( kecuali ikan )</li>
                                                                                                <li>Dilarang membuang sampah di kawasan</li>
                                                                                                <li>Dilarang membuat api unggun</li>
                                                                                                <li>Dilarang mesum</li>
                                                                                                <li>Dilarang membawa <strong>TISU BASAH</strong></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="action-wrapper" style="transform: translateX(70%);">
                                                                                        <ul class="actions py-3">
                                                                                            <li><a class="btn btn-primary me-2" href="editJalur.html"><i class="fa fa-share me-2"></i>Update</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                    <div class="col-xl-12 col-md-12 box-col-70">
                                                        <div class="email-right-aside">
                                                            <div class="card email-body">
                                                                <div class="email-profile">
                                                                    <div class="email-right-aside">
                                                                        <div class="email-body">
                                                                            <div class="email-content">
                                                                                <div class="email-wrapper">
                                                                                    <div class="emailread-group">
                                                                                        <div class="read-group px-1">
                                                                                            <h5>Gunung Prau Via Kalilembu</h5>
                                                                                            <p>Jalur ini terletak di Kalilembu, Kec. Kejajar, Kab. Wonosobo, Jawa Tengah. Jalur pendakian ini juga terbilang landai,
                                                                                                dan mudah dilalui. Untuk sampai puncak Gunung Prau, kamu akan melewati tiga pos pendakian dan melewati Kali Serayu.
                                                                                                Letak basecamp Kalilembu berada tak jauh dari basecamp Patak Banteng. Sekitar 100 meter di atas basecamp Patak Banteng,
                                                                                                kamu bisa menemukan basecamp ini. Pos 1 pendakian via Kalilembu bernama Pelerenan, Pos 2 Ngetuk dan Pos 3 Nganjir.
                                                                                                Kemudian kamu akan tiba di Bukit Teletubies dan mendirikan kemah.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="container-fluid" style="padding: 0px; margin: 0px;">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <div class="card" style="border-radius: 0px; -webkit-box-shadow: none; box-shadow: none; border-bottom: 1.5px solid #eeeeee; margin-bottom: 15px;">
                                                                                                    <div class="card-header pb-0 px-1" style="padding-left: 0px; margin-left: 0px;">
                                                                                                        <h5 style=" font-size: 18px; font-weight: 500; color: #2b2b2b;">
                                                                                                            Gambar Basecamp Dan Peta Jalur</h5>
                                                                                                    </div>
                                                                                                    <div class="card-body pt-1 px-1" style="padding: 0px; padding-bottom: 10px;">
                                                                                                        <div class="row gallery my-gallery" itemscope="">
                                                                                                            <figure class="col-xl-4 col-md-4 col-sm-6 box-col-33" itemprop="associatedMedia" itemscope=""><a href="https://admin.pixelstrap.com/enzo/assets/images/big-lightgallry/01.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="<?= base_url('assets/admin/'); ?>images/email/kalilembu.png" itemprop="thumbnail" alt="Image description" style="cursor: default;"></a>
                                                                                                            </figure>
                                                                                                            <figure class="col-xl-4 col-md-4 col-sm-6 box-col-33" itemprop="associatedMedia" itemscope=""><a href="https://admin.pixelstrap.com/enzo/assets/images/big-lightgallry/02.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="<?= base_url('assets/admin/'); ?>images/email/jalur kalilembu.png" itemprop="thumbnail" alt="Image description" style="cursor: default;"></a>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- Container-fluid Ends-->
                                                                                    <div class="emailread-group px-1" style="border-bottom: 1.5px solid #eeeeee; margin-bottom: 15px; padding-bottom: 10px;">
                                                                                        <div class="read-group">
                                                                                            <h5>Fasilitas Basecamp</h5>
                                                                                            <ul>
                                                                                                <li>Tempat Parkir</li>
                                                                                                <li>Mushola</li>
                                                                                                <li>Listrik</li>
                                                                                                <li>Shelter</li>
                                                                                                <li>Toilet</li>
                                                                                                <li>Warung Makan</li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="emailread-group px-1" style="border-bottom: 1.5px solid #eeeeee; margin-bottom: 15px; padding-bottom: 10px;">
                                                                                        <div class="read-group">
                                                                                            <h5>Harga Tiket Pendakian</h5>
                                                                                            <p>Tiket pendakian 1 orang</p>
                                                                                            <p>Rp20.000</p>
                                                                                            <p class="m-t-10">Parkir motor 1 unit</p>
                                                                                            <p>Rp10.000</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="emailread-group px-1" style="border-bottom: 1.5px solid #eeeeee; margin-bottom: 15px; padding-bottom: 10px;">
                                                                                        <div class="read-group">
                                                                                            <h5>Syarat Dan Ketentuan</h5>
                                                                                            <ul>Wajib Membawa Surat Keterangan Sehat
                                                                                                <li>Dipastikan tidak ada gejala Covid – 19</li>
                                                                                                <li>Masa berlaku surat keterangan sehat 3 hari</li>
                                                                                                <li>Surat keterangan sehat bisa dari daerah asal atau puskesmas daerah
                                                                                                    wonosobo</li>
                                                                                            </ul>
                                                                                            <p> </p>
                                                                                            <ul>Wajib mematuhi peraturan basecamp
                                                                                                <li>Harus sopan, baik tingkah laku/perbuatan ataupun ucapan</li>
                                                                                                <li>Setiap pendaki wajib lapor kepada petugas basecamp sebelum dan sesudah
                                                                                                    pendakian</li>
                                                                                                <li>Membawa peralatan pendakian yang memadai</li>
                                                                                                <li>Bersedia diperiksa oleh petugas</li>
                                                                                                <li>Membawa kembali sampah</li>
                                                                                                <li>Dilarang mengambil, memetik, memotong tumbuhan dan bagian - bagiannya
                                                                                                </li>
                                                                                                <li>Dilarang menangkap, membunuh, dan melukai satwa</li>
                                                                                                <li>Dilarang membawa alat musik</li>
                                                                                                <li>Dilarang membawa senjata tajan lebih dari 15 cm</li>
                                                                                                <li>Dilarang merusak sarana prasarana basecamp</li>
                                                                                                <li>Dilarang mencoret baty/vandalisme</li>
                                                                                                <li>Dilarang membawa daging segar ( kecuali ikan )</li>
                                                                                                <li>Dilarang membuang sampah di kawasan</li>
                                                                                                <li>Dilarang membuat api unggun</li>
                                                                                                <li>Dilarang mesum</li>
                                                                                                <li>Dilarang membawa <strong>TISU BASAH</strong></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="action-wrapper" style="transform: translateX(70%);">
                                                                                        <ul class="actions py-3">
                                                                                            <li><a class="btn btn-primary me-2" href="editJalur.html"><i class="fa fa-share me-2"></i>Update</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-wates" role="tabpanel" aria-labelledby="v-pills-wates-tab">
                                                    <div class="col-xl-12 col-md-12 box-col-70">
                                                        <div class="email-right-aside">
                                                            <div class="card email-body">
                                                                <div class="email-profile">
                                                                    <div class="email-right-aside">
                                                                        <div class="email-body">
                                                                            <div class="email-content">
                                                                                <div class="email-wrapper">
                                                                                    <div class="emailread-group">
                                                                                        <div class="read-group px-1">
                                                                                            <h5>Gunung Prau Via Wates</h5>
                                                                                            <p>Jalur ini terletak di Jl. Candiroto - Kejajar, KM. 11, Gejungan, Wates, Kec. Wonoboyo, Kabupaten Temanggung, Jawa
                                                                                                Tengah. Jalur ini berada di ketinggian 1.896 mdpl. Trek pendakiannya untuk sampai ke puncak Prau adalah 4,7 kilometer
                                                                                                dan dapat ditempuh dalam waktu sekitar 3-4 jam. Pendaki akan disuguhi pemandangan hutan cemara, hutan rimba, dan air
                                                                                                terjun Sigendang. Pendaki juga akan menemui mata air di sekitar jalur hingga pos tiga. Pendaki akan melewati pos-pos
                                                                                                seperti Pos Blumbang Kodok, Cemaran, hingga sampai camp area.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="container-fluid" style="padding: 0px; margin: 0px;">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <div class="card" style="border-radius: 0px; -webkit-box-shadow: none; box-shadow: none; border-bottom: 1.5px solid #eeeeee; margin-bottom: 15px;">
                                                                                                    <div class="card-header pb-0 px-1" style="padding-left: 0px; margin-left: 0px;">
                                                                                                        <h5 style=" font-size: 18px; font-weight: 500; color: #2b2b2b;">
                                                                                                            Gambar Basecamp Dan Peta Jalur</h5>
                                                                                                    </div>
                                                                                                    <div class="card-body pt-1 px-1" style="padding: 0px; padding-bottom: 10px;">
                                                                                                        <div class="row gallery my-gallery" itemscope="">
                                                                                                            <figure class="col-xl-4 col-md-4 col-sm-6 box-col-33" itemprop="associatedMedia" itemscope=""><a href="https://admin.pixelstrap.com/enzo/assets/images/big-lightgallry/01.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="<?= base_url('assets/admin/'); ?>images/email/wates.png" itemprop="thumbnail" alt="Image description" style="cursor: default;"></a>
                                                                                                            </figure>
                                                                                                            <figure class="col-xl-4 col-md-4 col-sm-6 box-col-33" itemprop="associatedMedia" itemscope=""><a href="https://admin.pixelstrap.com/enzo/assets/images/big-lightgallry/02.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="<?= base_url('assets/admin/'); ?>images/email/jalur wates.png" itemprop="thumbnail" alt="Image description" style="cursor: default;"></a>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- Container-fluid Ends-->
                                                                                    <div class="emailread-group px-1" style="border-bottom: 1.5px solid #eeeeee; margin-bottom: 15px; padding-bottom: 10px;">
                                                                                        <div class="read-group">
                                                                                            <h5>Fasilitas Basecamp</h5>
                                                                                            <ul>
                                                                                                <li>Tempat Parkir</li>
                                                                                                <li>Mushola</li>
                                                                                                <li>Listrik</li>
                                                                                                <li>Shelter</li>
                                                                                                <li>Toilet</li>
                                                                                                <li>Warung Makan</li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="emailread-group px-1" style="border-bottom: 1.5px solid #eeeeee; margin-bottom: 15px; padding-bottom: 10px;">
                                                                                        <div class="read-group">
                                                                                            <h5>Harga Tiket Pendakian</h5>
                                                                                            <p>Tiket pendakian 1 orang</p>
                                                                                            <p>Rp20.000</p>
                                                                                            <p class="m-t-10">Parkir motor 1 unit</p>
                                                                                            <p>Rp10.000</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="emailread-group px-1" style="border-bottom: 1.5px solid #eeeeee; margin-bottom: 15px; padding-bottom: 10px;">
                                                                                        <div class="read-group">
                                                                                            <h5>Syarat Dan Ketentuan</h5>
                                                                                            <ul>Wajib Membawa Surat Keterangan Sehat
                                                                                                <li>Dipastikan tidak ada gejala Covid – 19</li>
                                                                                                <li>Masa berlaku surat keterangan sehat 3 hari</li>
                                                                                                <li>Surat keterangan sehat bisa dari daerah asal atau puskesmas daerah
                                                                                                    wonosobo</li>
                                                                                            </ul>
                                                                                            <p> </p>
                                                                                            <ul>Wajib mematuhi peraturan basecamp
                                                                                                <li>Harus sopan, baik tingkah laku/perbuatan ataupun ucapan</li>
                                                                                                <li>Setiap pendaki wajib lapor kepada petugas basecamp sebelum dan sesudah
                                                                                                    pendakian</li>
                                                                                                <li>Membawa peralatan pendakian yang memadai</li>
                                                                                                <li>Bersedia diperiksa oleh petugas</li>
                                                                                                <li>Membawa kembali sampah</li>
                                                                                                <li>Dilarang mengambil, memetik, memotong tumbuhan dan bagian - bagiannya
                                                                                                </li>
                                                                                                <li>Dilarang menangkap, membunuh, dan melukai satwa</li>
                                                                                                <li>Dilarang membawa alat musik</li>
                                                                                                <li>Dilarang membawa senjata tajan lebih dari 15 cm</li>
                                                                                                <li>Dilarang merusak sarana prasarana basecamp</li>
                                                                                                <li>Dilarang mencoret baty/vandalisme</li>
                                                                                                <li>Dilarang membawa daging segar ( kecuali ikan )</li>
                                                                                                <li>Dilarang membuang sampah di kawasan</li>
                                                                                                <li>Dilarang membuat api unggun</li>
                                                                                                <li>Dilarang mesum</li>
                                                                                                <li>Dilarang membawa <strong>TISU BASAH</strong></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="action-wrapper" style="transform: translateX(70%);">
                                                                                        <ul class="actions py-3">
                                                                                            <li><a class="btn btn-primary me-2" href="editJalur.html"><i class="fa fa-share me-2"></i>Update</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-igirmranak" role="tabpanel" aria-labelledby="v-pills-igirmranak-tab">
                                                    <div class="col-xl-12 col-md-12 box-col-70">
                                                        <div class="email-right-aside">
                                                            <div class="card email-body">
                                                                <div class="email-profile">
                                                                    <div class="email-right-aside">
                                                                        <div class="email-body">
                                                                            <div class="email-content">
                                                                                <div class="email-wrapper">
                                                                                    <div class="emailread-group">
                                                                                        <div class="read-group px-1">
                                                                                            <h5>Gunung Prau Via Igirmranak</h5>
                                                                                            <p>Jalur ini terletak di Igirmranak, Kec. Kejajar, Kabupaten Wonosobo, Jawa Tengah. Jalur pendakian Gunung Prau via
                                                                                                Igirmranak baru diresmikan di tahun 2018. Jalur ini memiliki puncak bernama Roto Dowo. Di puncaknya kita bisa mendirikan
                                                                                                tenda karena areanya sangat luas dan mampu menampung kurang lebih sepuluh tenda pendaki gunung. Jalur ini merupakan
                                                                                                jalur sisi tenggara yang masih asri dan sepi. Melewati jalur ini, kita juga akan bertemu dengan spot yang cantik dan
                                                                                                menarik yakni terowongan akar-akaran yang bisa kita jadikan tempat foto-foto. Pendaki akan melewati pos-pos seperti Pos
                                                                                                Curug Gamelan, Pos Bukit Cendani, dan Pos Roto Dowo.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="container-fluid" style="padding: 0px; margin: 0px;">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-12">
                                                                                                <div class="card" style="border-radius: 0px; -webkit-box-shadow: none; box-shadow: none; border-bottom: 1.5px solid #eeeeee; margin-bottom: 15px;">
                                                                                                    <div class="card-header pb-0 px-1" style="padding-left: 0px; margin-left: 0px;">
                                                                                                        <h5 style=" font-size: 18px; font-weight: 500; color: #2b2b2b;">
                                                                                                            Gambar Basecamp Dan Peta Jalur</h5>
                                                                                                    </div>
                                                                                                    <div class="card-body pt-1 px-1" style="padding: 0px; padding-bottom: 10px;">
                                                                                                        <div class="row gallery my-gallery" itemscope="">
                                                                                                            <figure class="col-xl-4 col-md-4 col-sm-6 box-col-33" itemprop="associatedMedia" itemscope=""><a href="https://admin.pixelstrap.com/enzo/assets/images/big-lightgallry/01.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="<?= base_url('assets/admin/'); ?>images/email/Igirmranak.png" itemprop="thumbnail" alt="Image description" style="cursor: default;"></a>
                                                                                                            </figure>
                                                                                                            <figure class="col-xl-4 col-md-4 col-sm-6 box-col-33" itemprop="associatedMedia" itemscope=""><a href="https://admin.pixelstrap.com/enzo/assets/images/big-lightgallry/02.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="<?= base_url('assets/admin/'); ?>images/email/jalur igirmranak.png" itemprop="thumbnail" alt="Image description" style="cursor: default;"></a>
                                                                                                            </figure>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- Container-fluid Ends-->
                                                                                    <div class="emailread-group px-1" style="border-bottom: 1.5px solid #eeeeee; margin-bottom: 15px; padding-bottom: 10px;">
                                                                                        <div class="read-group">
                                                                                            <h5>Fasilitas Basecamp</h5>
                                                                                            <ul>
                                                                                                <li>Tempat Parkir</li>
                                                                                                <li>Mushola</li>
                                                                                                <li>Listrik</li>
                                                                                                <li>Shelter</li>
                                                                                                <li>Toilet</li>
                                                                                                <li>Warung Makan</li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="emailread-group px-1" style="border-bottom: 1.5px solid #eeeeee; margin-bottom: 15px; padding-bottom: 10px;">
                                                                                        <div class="read-group">
                                                                                            <h5>Harga Tiket Pendakian</h5>
                                                                                            <p>Tiket pendakian 1 orang</p>
                                                                                            <p>Rp20.000</p>
                                                                                            <p class="m-t-10">Parkir motor 1 unit</p>
                                                                                            <p>Rp10.000</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="emailread-group px-1" style="border-bottom: 1.5px solid #eeeeee; margin-bottom: 15px; padding-bottom: 10px;">
                                                                                        <div class="read-group">
                                                                                            <h5>Syarat Dan Ketentuan</h5>
                                                                                            <ul>Wajib Membawa Surat Keterangan Sehat
                                                                                                <li>Dipastikan tidak ada gejala Covid – 19</li>
                                                                                                <li>Masa berlaku surat keterangan sehat 3 hari</li>
                                                                                                <li>Surat keterangan sehat bisa dari daerah asal atau puskesmas daerah
                                                                                                    wonosobo</li>
                                                                                            </ul>
                                                                                            <p> </p>
                                                                                            <ul>Wajib mematuhi peraturan basecamp
                                                                                                <li>Harus sopan, baik tingkah laku/perbuatan ataupun ucapan</li>
                                                                                                <li>Setiap pendaki wajib lapor kepada petugas basecamp sebelum dan sesudah
                                                                                                    pendakian</li>
                                                                                                <li>Membawa peralatan pendakian yang memadai</li>
                                                                                                <li>Bersedia diperiksa oleh petugas</li>
                                                                                                <li>Membawa kembali sampah</li>
                                                                                                <li>Dilarang mengambil, memetik, memotong tumbuhan dan bagian - bagiannya
                                                                                                </li>
                                                                                                <li>Dilarang menangkap, membunuh, dan melukai satwa</li>
                                                                                                <li>Dilarang membawa alat musik</li>
                                                                                                <li>Dilarang membawa senjata tajan lebih dari 15 cm</li>
                                                                                                <li>Dilarang merusak sarana prasarana basecamp</li>
                                                                                                <li>Dilarang mencoret baty/vandalisme</li>
                                                                                                <li>Dilarang membawa daging segar ( kecuali ikan )</li>
                                                                                                <li>Dilarang membuang sampah di kawasan</li>
                                                                                                <li>Dilarang membuat api unggun</li>
                                                                                                <li>Dilarang mesum</li>
                                                                                                <li>Dilarang membawa <strong>TISU BASAH</strong></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="action-wrapper" style="transform: translateX(70%);">
                                                                                        <ul class="actions py-3">
                                                                                            <li><a class="btn btn-primary me-2" href="editJalur.html"><i class="fa fa-share me-2"></i>Update</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
    <script src="<?= base_url('assets/admin/'); ?>js/photoswipe/photoswipe.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/photoswipe/photoswipe.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?= base_url('assets/admin/'); ?>js/script.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>