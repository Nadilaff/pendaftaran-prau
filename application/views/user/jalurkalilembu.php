<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jalur Dieng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="<?= base_url('assets/user/css'); ?>style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/user/'); ?>css/jalur.css">
    <link rel="stylesheet" href="<?= base_url('assets/user/'); ?>css/navbarFooterLogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- NAVBAR -->
    <div class="container-navbar p-4">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand me-auto">PuncakPendaki</a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">PuncakPendaki</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" aria-current="page" href="<?= base_url('user'); ?>">Beranda</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Jalur
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?= base_url('jalurpatakbanteng'); ?>">Patak Banteng</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url('jalurdwarawati'); ?>">Dwarawati</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url('jalurdieng'); ?>">Dieng</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url('jalurigirmranak'); ?>">Igirmranak</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url('jalurkalilembu'); ?>">Kalilembu</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url('jalurwates'); ?>">Wates</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="<?= base_url('cuaca'); ?>">Cuaca</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="<?= base_url('booking'); ?>">Booking Online</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <img src="<?= base_url('assets/user/images/profile/') . $user['foto']; ?>" onclick="toggleMenu()" alt="" style="border-radius: 50%; height: 40px; width: 40px; cursor: pointer;">
                <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <div class="user-info">
                            <img src="<?= base_url('assets/user/images/profile/') . $user['foto']; ?>" alt="">
                            <h3><?= $user['nama']; ?></h3>
                        </div>
                        <hr>

                        <a href="<?= base_url('profileuser'); ?>" class="sub-menu-link">
                            <i class="fa-solid fa-user-pen"></i>
                            <p>Profil</p>
                            <span>></span>
                        </a>
                        <a href="<?= base_url('statuspesanan'); ?>" class="sub-menu-link">
                            <i class="fa-solid fa-clock-rotate-left"></i>
                            <p>Pesanan</p>
                            <span>></span>
                        </a>
                        <a href="<?= base_url('auth/logout'); ?>" class="sub-menu-link">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            <p>Keluar</p>
                            <span>></span>
                        </a>
                    </div>
                </div>
                <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </div>
    <!--END NAVBAR-->


    <!--HEADER-->
    <div class="container-fluid jalur">
        <div class="container box-jalur">
            <div class="row align-items-center">
                <div class="jalur-text col-lg-6 col-xl-6 col-12">
                    <h1>Gunung Prau Via Kalilembu</h1>
                    <p>
                        Jalur ini terletak di Kalilembu, Kec. Kejajar, Kab. Wonosobo, Jawa Tengah. Jalur pendakian ini juga terbilang landai,
                        dan mudah dilalui. Untuk sampai puncak Gunung Prau, kamu akan melewati tiga pos pendakian dan melewati Kali Serayu.
                        Letak basecamp Kalilembu berada tak jauh dari basecamp Patak Banteng. Sekitar 100 meter di atas basecamp Patak Banteng,
                        kamu bisa menemukan basecamp ini. Pos 1 pendakian via Kalilembu bernama Pelerenan, Pos 2 Ngetuk dan Pos 3 Nganjir.
                        Kemudian kamu akan tiba di Bukit Teletubies dan mendirikan kemah.
                    </p>
                </div>
                <div class="col-lg-6 col-xl-6 col-12">
                    <img src="<?= base_url('assets/user/'); ?>images/kalilembu.png" alt="" class="bc-img">
                </div>
            </div>
        </div>
    </div>
    <!--END HEADER-->


    <!--FASILITAS-->
    <div class="container-fluid container-fasilitas">
        <div class="container">
            <div class="row">
                <div class="col-12 box-fasilitas">
                    <h1 class="tittle-fasilitas text-center">Fasilitas Basecamp</h1>
                </div>
                <div class="col-6 offset-3">
                    <p class="text-fasilitas text-center">
                        Berikut adalah beberapa fasilitas yang disediakan oleh Basecamp untuk menunjang kenyamanan
                        pengunjung
                    </p>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <div class="row col-lg-6 baris-icon justify-content-md-center">
                    <div class="col-lg-4 col-xl-4 col-md-3 col-sm-4 col-4 mt-5">
                        <div class="logo-fasilitas">
                            <img src="<?= base_url('assets/user/'); ?>images/parkir.png" alt="">
                            <p class="text-logo">Tempat Parkir</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4 col-md-3 col-sm-4 col-4 mt-5">
                        <div class="logo-fasilitas">
                            <img src="<?= base_url('assets/user/'); ?>images/musholla.png" alt="">
                            <p class="text-logo">Musholla</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4 col-md-3 col-sm-4 col-4 mt-5">
                        <div class="logo-fasilitas">
                            <img src="<?= base_url('assets/user/'); ?>images/listrik.png" alt="">
                            <p class="text-logo">Listrik</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4 col-md-3 col-sm-4 col-4 mt-5">
                        <div class="logo-fasilitas">
                            <img src="<?= base_url('assets/user/'); ?>images/shelter.png" alt="">
                            <p class="text-logo">Shelter</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4 col-md-3 col-sm-4 col-4 mt-5">
                        <div class="logo-fasilitas">
                            <img src="<?= base_url('assets/user/'); ?>images/toilet.png" alt="">
                            <p class="text-logo">Toilet</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4 col-md-3 col-sm-4 col-4 mt-5">
                        <div class="logo-fasilitas">
                            <img src="<?= base_url('assets/user/'); ?>images/warung.png" alt="">
                            <p class="text-logo">Warung Makan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END FASILITAS-->


    <!--PETA JALUR-->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="tittle-peta text-center">Peta Jalur Pendakian</h1>
                </div>
                <div class="col-6 offset-3">
                    <p class="text-peta text-center">
                        Download peta jalur pendakian sebelum mendaki agar dapat dilihat secara offline. Click gambar
                        untuk mendownload.
                    </p>
                </div>
            </div>
            <img src="<?= base_url('assets/user/'); ?>images/jalur kalilembu.png" alt="" class="jalur-img">
        </div>
    </div>
    <!--END PETA JALUR-->

    <!-- Modal -->
    <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn btn-download" id="download-btn">
                        <i class="fas fa-download"></i> Download
                    </button>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="<?= base_url('assets/user/'); ?>images/jalur kalilembu.png" class="modal-img" alt="modal-img">
                </div>
            </div>
        </div>
    </div>


    <!--GALERI-->
    <div class="container-fluid container-galeri">
        <div class="container">
            <div class="row header-galeri text-center">
                <div class="col-12">
                    <h1>Galeri Pendaki</h1>
                </div>
                <div class="col-6 offset-3">
                    <p>
                        Jelajahi galeri dari petualangan seru di Gunung Merbabu. Dalam setiap gambar, temukan cerita
                        kegigihan dan keindahan
                        alam yang mengagumkan.
                    </p>
                </div>
            </div>
            <div class="row row-galeri">
                <div class="column">
                    <img src="<?= base_url('assets/user/'); ?>images/1.jpg" alt="foto" class="foto-item">
                    <img src="<?= base_url('assets/user/'); ?>images/02.jpg" alt="foto" class="foto-item">
                    <img src="<?= base_url('assets/user/'); ?>images/3.jpg" alt="foto" class="foto-item">
                    <img src="<?= base_url('assets/user/'); ?>images/012.jpg" alt="foto" class="foto-item">
                </div>
                <div class="column">
                    <img src="<?= base_url('assets/user/'); ?>images/04.jpg" alt="foto" class="foto-item">
                    <img src="<?= base_url('assets/user/'); ?>images/5.jpg" alt="foto" class="foto-item">
                    <img src="<?= base_url('assets/user/'); ?>images/06.jpg" alt="foto" class="foto-item">
                    <img src="<?= base_url('assets/user/'); ?>images/7.jpg" alt="foto" class="foto-item">
                </div>
                <div class="column">
                    <img src="<?= base_url('assets/user/'); ?>images/8.jpg" alt="foto" class="foto-item">
                    <img src="<?= base_url('assets/user/'); ?>images/09.jpg" alt="foto" class="foto-item">
                    <img src="<?= base_url('assets/user/'); ?>images/10.jpg" alt="foto" class="foto-item">
                    <img src="<?= base_url('assets/user/'); ?>images/011.jpg" alt="foto" class="foto-item">
                </div>
                <div class="column">
                    <img src="<?= base_url('assets/user/'); ?>images/04.jpg" alt="foto" class="foto-item">
                    <img src="<?= base_url('assets/user/'); ?>images/5.jpg" alt="foto" class="foto-item">
                    <img src="<?= base_url('assets/user/'); ?>images/06.jpg" alt="foto" class="foto-item">
                    <img src="<?= base_url('assets/user/'); ?>images/7.jpg" alt="foto" class="foto-item">
                </div>
            </div>
        </div>
    </div>
    <!--END GALERI-->

    <!-- Modal -->
    <div class="modal fade" id="galerifoto-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="<?= base_url('assets/user/'); ?>images/1.jpg" class="modal-foto" alt="modal foto">
                </div>
            </div>
        </div>
    </div>


    <!--RATING-->
    <div class="container-fluid">
        <div class="container">
            <h1 class="tittle-rating text-center">Ulasan Jalur Kalilembu</h1>
            <div class="row">
                <div class="col-lg-4 col-md-5 container-ulas">
                    <a href="ulasan.html" class="btn btn-ulas text-center mb-3">Kirim Ulasan</a>
                    <div class="ulas-body text-center">
                        <h3 class="card-title">Ulasan Pendaki</h3>
                        <h2 class="card-subtitle">5.4/5</h2>
                        <h5 class="rating-start">★★★★★</h5>
                        <p class="card-subtitle mb-4 text-muted">(300 reviews)</p>
                        <div class="rating-info">
                            <h7 class="rating-start text-center">★ <span class="angka-start">5</span></h7>
                            <div class="rating-bar-container">
                                <div class="rating-bar">
                                    <div class="rating-fill-5"></div>
                                </div>
                                <span class="rating-label">200</span>
                            </div>
                        </div>
                        <div class="rating-info">
                            <h7 class="rating-start text-center">★ <span class="angka-start">4</span></h7>
                            <div class="rating-bar-container">
                                <div class="rating-bar">
                                    <div class="rating-fill-4"></div>
                                </div>
                                <span class="rating-label">80</span>
                            </div>
                        </div>
                        <div class="rating-info">
                            <h7 class="rating-start text-center">★ <span class="angka-start">3</span></h7>
                            <div class="rating-bar-container">
                                <div class="rating-bar">
                                    <div class="rating-fill-3"></div>
                                </div>
                                <span class="rating-label">20</span>
                            </div>
                        </div>
                        <div class="rating-info">
                            <h7 class="rating-start text-center">★ <span class="angka-start">2</span></h7>
                            <div class="rating-bar-container">
                                <div class="rating-bar">
                                    <div class="rating-fill-2"></div>
                                </div>
                                <span class="rating-label">0</span>
                            </div>
                        </div>
                        <div class="rating-info">
                            <h7 class="rating-start text-center">★ <span class="angka-start">1</span></h7>
                            <div class="rating-bar-container">
                                <div class="rating-bar">
                                    <div class="rating-fill-1"></div>
                                </div>
                                <span class="rating-label">0</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 container-review">
                    <div class="review-body">
                        <h4 class=" review-title mb-2">
                            ★★★★★
                            <span class="tagline">Jalur terlandai</span>
                        </h4>
                        <div class="profil-container mb-1">
                            <img src="<?= base_url('assets/user/'); ?>images/kucing.jpg" alt="" alt="Foto Profil" class="profile-picture">
                            <span class="username">Nadila</span>
                        </div>
                        <p class="review-text">Selection image line ellipse arrange. Select vertical selection project
                            union layer. Variant layout prototype device
                            bold selection content library. Link flows overflow project move pen hand frame underline
                            export. Ipsum device boolean
                            undo plugin reesizing clip italic bold reesizing. Selection image line ellipse arrange.
                            Select vertical selection project union layer. Variant layout prototype device
                            bold selection content library. Link flows overflow project move pen hand frame underline
                            export. Ipsum device boolean
                            undo plugin reesizing clip italic bold reesizing.
                        </p>
                    </div>
                    <div class="review-body">
                        <h4 class=" review-title mb-2">
                            ★★★★★
                            <span class="tagline">Jalur terlandai</span>
                        </h4>
                        <div class="profil-container mb-1">
                            <img src="<?= base_url('assets/user/'); ?>images/kucing.jpg" alt="" alt="Foto Profil" class="profile-picture">
                            <span class="username">Nadila</span>
                        </div>
                        <p class="review-text">Selection image line ellipse arrange. Select vertical selection project
                            union layer. Variant
                            layout prototype device
                            bold selection content library. Link flows overflow project move pen hand frame underline
                            export. Ipsum device
                            boolean
                            undo plugin reesizing clip italic bold reesizing. Selection image line ellipse arrange.
                            Select vertical
                            selection project union layer. Variant layout prototype device
                            bold selection content library. Link flows overflow project move pen hand frame underline
                            export. Ipsum device
                            boolean
                            undo plugin reesizing clip italic bold reesizing.
                        </p>
                    </div>
                    <div class="review-body">
                        <h4 class=" review-title mb-2">
                            ★★★★★
                            <span class="tagline">Jalur terlandai</span>
                        </h4>
                        <div class="profil-container mb-1">
                            <img src="<?= base_url('assets/user/'); ?>images/kucing.jpg" alt="" alt="Foto Profil" class="profile-picture">
                            <span class="username">Nadila</span>
                        </div>
                        <p class="review-text">Selection image line ellipse arrange. Select vertical selection project
                            union layer. Variant
                            layout prototype device
                            bold selection content library. Link flows overflow project move pen hand frame underline
                            export. Ipsum device
                            boolean
                            undo plugin reesizing clip italic bold reesizing. Selection image line ellipse arrange.
                            Select vertical
                            selection project union layer. Variant layout prototype device
                            bold selection content library. Link flows overflow project move pen hand frame underline
                            export. Ipsum device
                            boolean
                            undo plugin reesizing clip italic bold reesizing.
                        </p>
                    </div>
                    <div class="review-body">
                        <h4 class=" review-title mb-2">
                            ★★★★★
                            <span class="tagline">Jalur terlandai</span>
                        </h4>
                        <div class="profil-container mb-1">
                            <img src="<?= base_url('assets/user/'); ?>images/kucing.jpg" alt="" alt="Foto Profil" class="profile-picture">
                            <span class="username">Nadila</span>
                        </div>
                        <p class="review-text">Selection image line ellipse arrange. Select vertical selection project
                            union layer. Variant
                            layout prototype device
                            bold selection content library. Link flows overflow project move pen hand frame underline
                            export. Ipsum device
                            boolean
                            undo plugin reesizing clip italic bold reesizing. Selection image line ellipse arrange.
                            Select vertical
                            selection project union layer. Variant layout prototype device
                            bold selection content library. Link flows overflow project move pen hand frame underline
                            export. Ipsum device
                            boolean
                            undo plugin reesizing clip italic bold reesizing.
                        </p>
                    </div>
                    <div class="review-body">
                        <h4 class=" review-title mb-2">
                            ★★★★★
                            <span class="tagline">Jalur terlandai</span>
                        </h4>
                        <div class="profil-container mb-1">
                            <img src="<?= base_url('assets/user/'); ?>images/kucing.jpg" alt="" alt="Foto Profil" class="profile-picture">
                            <span class="username">Nadila</span>
                        </div>
                        <p class="review-text">Selection image line ellipse arrange. Select vertical selection project
                            union layer. Variant
                            layout prototype device
                            bold selection content library. Link flows overflow project move pen hand frame underline
                            export. Ipsum device
                            boolean
                            undo plugin reesizing clip italic bold reesizing. Selection image line ellipse arrange.
                            Select vertical
                            selection project union layer. Variant layout prototype device
                            bold selection content library. Link flows overflow project move pen hand frame underline
                            export. Ipsum device
                            boolean
                            undo plugin reesizing clip italic bold reesizing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END RATING-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url('assets/user/js/'); ?>script.js"></script>
    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>

</html>