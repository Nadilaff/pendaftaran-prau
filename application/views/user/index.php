<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PuncakPendaki</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/user/css/'); ?>style.css">
    <link rel="stylesheet" href="<?= base_url('assets/user/css/'); ?>swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/user/'); ?>css/index.css">
    <link rel="stylesheet" href="<?= base_url('assets/user/'); ?>css/navbarFooterLogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url('assets/user/js/'); ?>owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/user/js/'); ?>owlcarousel/owl.theme.default.min.css">
    <style>
        .owl-prev,
        .owl-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .owl-next {
            right: 1rem;
        }

        .owl-prev {
            left: 1rem;
        }

        .owl-prev,
        .owl-next {
            background-color: #128C7E !important;
            height: 40px;
            width: 40px;
            border-radius: 20px !important;
            opacity: .5;
            color: white;
            font-size: 40px;
            line-height: .8;
        }
    </style>
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
                                <a class="nav-link mx-lg-2 active" aria-current="page" href="<?= base_url('user'); ?>">Beranda</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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


    <!--HERO SECTION-->
    <header class="hero-beranda">
        <div class="container d-flex align-items-center justify-content-center fs-1 text-white flex-column">
            <h1>Eksplorasi Puncak Gunung Prau</h1>
            <p>Jangan lewatkan kesempatan untuk merasakan keajaiban alam yang memukau di Gunung Prau! Bergabunglah
                dengan kami dan
                buatlah kenangan tak terlupakan serta mengesankan. Saksikan keindahan sunrise terindah seasia tenggara
                yang hanya bisa
                Anda temui di puncak Gunung Prau!</p>
            <button type="button" class="btn-booking" href="<?= base_url('booking'); ?>">Booking
                Sekarang</button>
        </div>
    </header>
    <!--END HERO SECTION-->


    <!--CAROUSEL-->
    <div class="owl-carousel owl-theme" style="transform: translateY(-115px);">
        <div class="item">
            <div class="card">
                <div class="img-wrapper">
                    <img src="<?= base_url('assets/user/images/BcPatakbanteng.png'); ?>" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Basecamp Patak Banteng</h5>
                    <p class="card-text">
                        Jl. Dieng No.KM. 24, Patakbanteng, Kec. Kejajar, Kabupaten Wonosobo, Jawa Tengah
                        <a href="href=" <?= base_url('jalurpatakbanteng'); ?>"" class="card-link">selengkapnya...</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="img-wrapper">
                    <img src="<?= base_url('assets/user/images/BcDieng.png'); ?>" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Basecamp Dieng</h5>
                    <p class="card-text">
                        Jl. Raya Wonosobo, Batur - Dieng Jl. Dieng Km. 26, Kec. Kejajar, Kabupaten Wonosobo, Jawa Tengah
                        <a href="href=" <?= base_url('jalurdieng'); ?>"" class="card-link">selengkapnya...</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="img-wrapper">
                    <img src="<?= base_url('assets/user/images/BcDwarawati.png'); ?>" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Basecamp Dieng Kulon</h5>
                    <p class="card-text">
                        Jl. Raya Wonosobo, Batur-Dieng Jl. Dieng Km.26, Kec. Kejajar, Kab. Wonosobo, Jawa Tengah
                        <a href="href=" <?= base_url('jalurdwarawati'); ?>"" class="card-link">selengkapnya...</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="img-wrapper">
                    <img src="<?= base_url('assets/user/images/BcKalilembu.png'); ?>" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Basecamp Kalilembu</h5>
                    <p class="card-text">
                        Kalilembu, Kec. Kejajar, Kab. Wonosobo, Jawa Tengah
                        <a href="href=" <?= base_url('jalurkalilembu'); ?>"" class="card-link">selengkapnya...</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="img-wrapper">
                    <img src="<?= base_url('assets/user/images/BcIgirmranak.png'); ?>" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Basecamp Igirmranak</h5>
                    <p class="card-text">
                        Igirmranak, Kec. Kejajar, Kabupaten Wonosobo, Jawa Tengah
                        <a href="href=" <?= base_url('jalurigirmranak'); ?>"" class="card-link">selengkapnya...</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card">
                <div class="img-wrapper">
                    <img src="<?= base_url('assets/user/images/BcWates.png'); ?>" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Basecamp Wates</h5>
                    <p class="card-text">
                        Jl. Candiroto - Kejajar, KM. 11, Gejungan, Wates, Kec. Wonoboyo, Kabupaten Temanggung, Jawa
                        Tengah
                        <a href="href=" <?= base_url('jalurwates'); ?>"" class="card-link">selengkapnya...</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--END CAROUSEL-->


    <!--CARD1 BERANDA-->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row pb-5">
                <div class="artikel-beranda col-lg-6 col-md-7 col-sm-12 offset-md-1 offset-lg-2">
                    <h1>Selamat Datang Di PuncakPendaki!</h1>
                    <p>
                        Kami adalah platform booking online yang menyediakan layanan untuk pendakian di Gunung Prau.
                        Temukan
                        petualangan mendebarkan dan nikmati keindahan alam Gunung Prau dengan mudah melalui platform
                        kami.
                        Tujuan kami adalah memberikan pelayanan yang aman, mudah, dan tak terlupakan bagi para pecinta
                        alam yang
                        ingin menjelajahi kecantikan Gunung Prau.
                    </p>
                </div>
                <div class="hero-puncakpendaki col-lg-4 col-md-4 col-sm-12">
                    <img src="<?= base_url('assets/user/'); ?>images/hero_beranda.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--END CARD1 BERANDA-->


    <!--SERVICE-->
    <div class="container-fluid py-5">
        <div class="container pb-5">
            <h1 class="service text-center">Our Service</h1>
            <div class="row text-center">
                <div class="icons-service col-lg-2 col-md-3 offset-lg-2 col-sm-6  col-xs-12">
                    <img src="<?= base_url('assets/user/'); ?>images/icon_registrasi.png" alt="" class="img-fluid">
                    <h3 class="service-title">Booking Online</h3>
                    <p class="service-text">Daftar pendakian gunung dengan mudah melalui Platform kami.</p>
                </div>
                <div class="icons-service col-lg-2 col-md-3 col-sm-6 col-xs-12">
                    <img src="<?= base_url('assets/user/'); ?>images/icon_cuaca.png" alt="" class="img-fluid">
                    <h3 class="service-title">Cuaca</h3>
                    <p class="service-text">Daftar pendakian gunung dengan mudah melalui Platform kami.</p>
                </div>
                <div class="icons-service col-lg-2 col-md-3 col-sm-6 col-xs-12">
                    <img src="<?= base_url('assets/user/'); ?>images/icon_gunung.png" alt="" class="img-fluid">
                    <h3 class="service-title">Profil Gunung</h3>
                    <p class="service-text">Daftar pendakian gunung dengan mudah melalui Platform kami.</p>
                </div>
                <div class="icons-service col-lg-2 col-md-3 col-sm-6 col-xs-12">
                    <img src="<?= base_url('assets/user/'); ?>images/icon_mendaki.png" alt="" class="img-fluid">
                    <h3 class="service-title">Pendakian</h3>
                    <p class="service-text">Daftar pendakian gunung dengan mudah melalui Platform kami.</p>
                </div>
                <div class="icons-service col-lg-2"></div>
            </div>
        </div>
    </div>
    <!--SERVICE-->


    <!-- PROFIL GUNUNG -->
    <div class="container-fluid py-5 container-profil">
        <div class="container">
            <h1 class="text-center pb-3">Profil Gunung Prau</h1>
            <div class="kotak-profil d-flex my-5">
                <div class="col-lg-7">
                    <div class="mountain-container">
                        <div class="rectangle1"></div>
                        <div class="rectangle2"></div>
                        <div class="rectangle3">
                            <img src="<?= base_url('assets/user/'); ?>images/prau.png" alt="Gunung" class="mountain-image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 text-profil">
                    <p>Gunung Prau adalah sebuah gunung yang terletak di Jawa Tengah,
                        Indonesia, dengan ketinggian sekitar 2.565 meter di atas
                        permukaan laut. Dikenal sebagai salah satu destinasi pendakian populer di Pulau Jawa, Gunung
                        Prau
                        menawarkan pemandangan
                        alam yang memukau dari puncaknya, termasuk panorama lembah Dieng yang hijau dan luas serta
                        kawah-kawah vulkanik yang
                        menakjubkan. Pendakian menuju puncaknya relatif mudah dan cocok untuk para pendaki pemula,
                        dengan
                        jalur pendakian utama
                        melalui Desa Dieng atau Desa Wonosobo. Waktu pendakiannya juga sangkat singkat yaitu hanya
                        sekitar
                        3-4 jam saja dengan
                        trek yang tidak terlalu sulit. Terdapat enam basecamp resmi sebagai titik awal untuk melakukan
                        pendakian ke Gunung Prau,
                        yaitu basecamp Dieng, Patak Banteng, Kalilembu, Dwarawati, Wates, dan Igirmranak. Adapun
                        basecamp
                        paling populer untuk
                        mendaki Gunung Prau adalah melalui Patak Banteng.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END PROFIL GUNUNG -->


    <!-- ULASAN APLIKASI -->
    <div class="tittle-text" style="text-align: center; margin-top: 100px; margin-bottom: 50px">
        <h1>Ulasan Website</h1>
    </div>
    <div class="owl-carousel owl-theme" style="margin-bottom: 150px;">
        <div class="item" style="background-color: #128C7E; border-radius: 25px;">
            <div class="image-content" style="padding: 15px;">
                <div class="card-image d-flex justify-content-center align-items-center" style="position: relative; height: 150px; width: 150px; border-radius: 50%; transform: translateX(70%);">
                    <img src="<?= base_url('assets/user/'); ?>images/kucing.jpg" alt="" style="height: 100%; width: 100%; object-fit: cover; border-radius: 50%; border: 4px solid #128C7E;">
                </div>
                <div class="card-content">
                    <h2 class="username" style="color: white; font-size: 20px; font-weight: 500; text-align: center;">
                        Nadila
                    </h2>
                    <p class="tgl-ulas" style="color: white; font-size: 12px; text-align: center;">12 Januari 2024</p>
                    <p class="description" style="color: white; font-size: 16px; text-align: justify;">Lorem ipsum dolor
                        sit
                        amet consectetur adipisicing elit. Dolores assumenda eligendi
                        voluptates adipisci facere eaque cumque impedit officiis aperiam illum expedita porro pariatur
                        aliquid
                        repudiandae corrupti natus, cum vel eos?</p>
                </div>
            </div>
        </div>
        <div class="item" style="background-color: #128C7E; border-radius: 25px;">
            <div class="image-content" style="padding: 15px;">
                <div class="card-image d-flex justify-content-center align-items-center" style="position: relative; height: 150px; width: 150px; border-radius: 50%; transform: translateX(70%);">
                    <img src="<?= base_url('assets/user/'); ?>images/kucing.jpg" alt="" style="height: 100%; width: 100%; object-fit: cover; border-radius: 50%; border: 4px solid #128C7E;">
                </div>
                <div class="card-content">
                    <h2 class="username" style="color: white; font-size: 20px; font-weight: 500; text-align: center;">
                        Nadila
                    </h2>
                    <p class="tgl-ulas" style="color: white; font-size: 12px; text-align: center;">12 Januari 2024</p>
                    <p class="description" style="color: white; font-size: 16px; text-align: justify;">Lorem ipsum dolor
                        sit
                        amet consectetur adipisicing elit. Dolores assumenda eligendi
                        voluptates adipisci facere eaque cumque impedit officiis aperiam illum expedita porro pariatur
                        aliquid
                        repudiandae corrupti natus, cum vel eos?</p>
                </div>
            </div>
        </div>
        <div class="item" style="background-color: #128C7E; border-radius: 25px;">
            <div class="image-content" style="padding: 15px;">
                <div class="card-image d-flex justify-content-center align-items-center" style="position: relative; height: 150px; width: 150px; border-radius: 50%; transform: translateX(70%);">
                    <img src="<?= base_url('assets/user/'); ?>images/kucing.jpg" alt="" style="height: 100%; width: 100%; object-fit: cover; border-radius: 50%; border: 4px solid #128C7E;">
                </div>
                <div class="card-content">
                    <h2 class="username" style="color: white; font-size: 20px; font-weight: 500; text-align: center;">
                        Nadila
                    </h2>
                    <p class="tgl-ulas" style="color: white; font-size: 12px; text-align: center;">12 Januari 2024</p>
                    <p class="description" style="color: white; font-size: 16px; text-align: justify;">Lorem ipsum dolor
                        sit
                        amet consectetur adipisicing elit. Dolores assumenda eligendi
                        voluptates adipisci facere eaque cumque impedit officiis aperiam illum expedita porro pariatur
                        aliquid
                        repudiandae corrupti natus, cum vel eos?</p>
                </div>
            </div>
        </div>
        <div class="item" style="background-color: #128C7E; border-radius: 25px;">
            <div class="image-content" style="padding: 15px;">
                <div class="card-image d-flex justify-content-center align-items-center" style="position: relative; height: 150px; width: 150px; border-radius: 50%; transform: translateX(70%);">
                    <img src="<?= base_url('assets/user/'); ?>images/kucing.jpg" alt="" style="height: 100%; width: 100%; object-fit: cover; border-radius: 50%; border: 4px solid #128C7E;">
                </div>
                <div class="card-content">
                    <h2 class="username" style="color: white; font-size: 20px; font-weight: 500; text-align: center;">
                        Nadila
                    </h2>
                    <p class="tgl-ulas" style="color: white; font-size: 12px; text-align: center;">12 Januari 2024</p>
                    <p class="description" style="color: white; font-size: 16px; text-align: justify;">Lorem ipsum dolor
                        sit
                        amet consectetur adipisicing elit. Dolores assumenda eligendi
                        voluptates adipisci facere eaque cumque impedit officiis aperiam illum expedita porro pariatur
                        aliquid
                        repudiandae corrupti natus, cum vel eos?</p>
                </div>
            </div>
        </div>
        <div class="item" style="background-color: #128C7E; border-radius: 25px;">
            <div class="image-content" style="padding: 15px;">
                <div class="card-image d-flex justify-content-center align-items-center" style="position: relative; height: 150px; width: 150px; border-radius: 50%; transform: translateX(70%);">
                    <img src="<?= base_url('assets/user/'); ?>images/kucing.jpg" alt="" style="height: 100%; width: 100%; object-fit: cover; border-radius: 50%; border: 4px solid #128C7E;">
                </div>
                <div class="card-content">
                    <h2 class="username" style="color: white; font-size: 20px; font-weight: 500; text-align: center;">
                        Nadila
                    </h2>
                    <p class="tgl-ulas" style="color: white; font-size: 12px; text-align: center;">12 Januari 2024</p>
                    <p class="description" style="color: white; font-size: 16px; text-align: justify;">Lorem ipsum dolor
                        sit
                        amet consectetur adipisicing elit. Dolores assumenda eligendi
                        voluptates adipisci facere eaque cumque impedit officiis aperiam illum expedita porro pariatur
                        aliquid
                        repudiandae corrupti natus, cum vel eos?</p>
                </div>
            </div>
        </div>
        <div class="item" style="background-color: #128C7E; border-radius: 25px;">
            <div class="image-content" style="padding: 15px;">
                <div class="card-image d-flex justify-content-center align-items-center" style="position: relative; height: 150px; width: 150px; border-radius: 50%; transform: translateX(70%);">
                    <img src="<?= base_url('assets/user/'); ?>images/kucing.jpg" alt="" style="height: 100%; width: 100%; object-fit: cover; border-radius: 50%; border: 4px solid #128C7E;">
                </div>
                <div class="card-content">
                    <h2 class="username" style="color: white; font-size: 20px; font-weight: 500; text-align: center;">
                        Nadila
                    </h2>
                    <p class="tgl-ulas" style="color: white; font-size: 12px; text-align: center;">12 Januari 2024</p>
                    <p class="description" style="color: white; font-size: 16px; text-align: justify;">Lorem ipsum dolor
                        sit
                        amet consectetur adipisicing elit. Dolores assumenda eligendi
                        voluptates adipisci facere eaque cumque impedit officiis aperiam illum expedita porro pariatur
                        aliquid
                        repudiandae corrupti natus, cum vel eos?</p>
                </div>
            </div>
        </div>
        <div class="item" style="background-color: #128C7E; border-radius: 25px;">
            <div class="image-content" style="padding: 15px;">
                <div class="card-image d-flex justify-content-center align-items-center" style="position: relative; height: 150px; width: 150px; border-radius: 50%; transform: translateX(70%);">
                    <img src="<?= base_url('assets/user/'); ?>images/kucing.jpg" alt="" style="height: 100%; width: 100%; object-fit: cover; border-radius: 50%; border: 4px solid #128C7E;">
                </div>
                <div class="card-content">
                    <h2 class="username" style="color: white; font-size: 20px; font-weight: 500; text-align: center;">
                        Nadila
                    </h2>
                    <p class="tgl-ulas" style="color: white; font-size: 12px; text-align: center;">12 Januari 2024</p>
                    <p class="description" style="color: white; font-size: 16px; text-align: justify;">Lorem ipsum dolor
                        sit
                        amet consectetur adipisicing elit. Dolores assumenda eligendi
                        voluptates adipisci facere eaque cumque impedit officiis aperiam illum expedita porro pariatur
                        aliquid
                        repudiandae corrupti natus, cum vel eos?</p>
                </div>
            </div>
        </div>
        <div class="item" style="background-color: #128C7E; border-radius: 25px;">
            <div class="image-content" style="padding: 15px;">
                <div class="card-image d-flex justify-content-center align-items-center" style="position: relative; height: 150px; width: 150px; border-radius: 50%; transform: translateX(70%);">
                    <img src="<?= base_url('assets/user/'); ?>images/kucing.jpg" alt="" style="height: 100%; width: 100%; object-fit: cover; border-radius: 50%; border: 4px solid #128C7E;">
                </div>
                <div class="card-content">
                    <h2 class="username" style="color: white; font-size: 20px; font-weight: 500; text-align: center;">
                        Nadila
                    </h2>
                    <p class="tgl-ulas" style="color: white; font-size: 12px; text-align: center;">12 Januari 2024</p>
                    <p class="description" style="color: white; font-size: 16px; text-align: justify;">Lorem ipsum dolor
                        sit
                        amet consectetur adipisicing elit. Dolores assumenda eligendi
                        voluptates adipisci facere eaque cumque impedit officiis aperiam illum expedita porro pariatur
                        aliquid
                        repudiandae corrupti natus, cum vel eos?</p>
                </div>
            </div>
        </div>
        <div class="item" style="background-color: #128C7E; border-radius: 25px;">
            <div class="image-content" style="padding: 15px;">
                <div class="card-image d-flex justify-content-center align-items-center" style="position: relative; height: 150px; width: 150px; border-radius: 50%; transform: translateX(70%);">
                    <img src="<?= base_url('assets/user/'); ?>images/kucing.jpg" alt="" style="height: 100%; width: 100%; object-fit: cover; border-radius: 50%; border: 4px solid #128C7E;">
                </div>
                <div class="card-content">
                    <h2 class="username" style="color: white; font-size: 20px; font-weight: 500; text-align: center;">
                        Nadila
                    </h2>
                    <p class="tgl-ulas" style="color: white; font-size: 12px; text-align: center;">12 Januari 2024</p>
                    <p class="description" style="color: white; font-size: 16px; text-align: justify;">Lorem ipsum dolor
                        sit
                        amet consectetur adipisicing elit. Dolores assumenda eligendi
                        voluptates adipisci facere eaque cumque impedit officiis aperiam illum expedita porro pariatur
                        aliquid
                        repudiandae corrupti natus, cum vel eos?</p>
                </div>
            </div>
        </div>
        <div class="item" style="background-color: #128C7E; border-radius: 25px;">
            <div class="image-content" style="padding: 15px;">
                <div class="card-image d-flex justify-content-center align-items-center" style="position: relative; height: 150px; width: 150px; border-radius: 50%; transform: translateX(70%);">
                    <img src="<?= base_url('assets/user/'); ?>images/kucing.jpg" alt="" style="height: 100%; width: 100%; object-fit: cover; border-radius: 50%; border: 4px solid #128C7E;">
                </div>
                <div class="card-content">
                    <h2 class="username" style="color: white; font-size: 20px; font-weight: 500; text-align: center;">
                        Nadila
                    </h2>
                    <p class="tgl-ulas" style="color: white; font-size: 12px; text-align: center;">12 Januari 2024</p>
                    <p class="description" style="color: white; font-size: 16px; text-align: justify;">Lorem ipsum dolor
                        sit
                        amet consectetur adipisicing elit. Dolores assumenda eligendi
                        voluptates adipisci facere eaque cumque impedit officiis aperiam illum expedita porro pariatur
                        aliquid
                        repudiandae corrupti natus, cum vel eos?</p>
                </div>
            </div>
        </div>
        <div class="item" style="background-color: #128C7E; border-radius: 25px;">
            <div class="image-content" style="padding: 15px;">
                <div class="card-image d-flex justify-content-center align-items-center" style="position: relative; height: 150px; width: 150px; border-radius: 50%; transform: translateX(70%);">
                    <img src="<?= base_url('assets/user/'); ?>images/kucing.jpg" alt="" style="height: 100%; width: 100%; object-fit: cover; border-radius: 50%; border: 4px solid #128C7E;">
                </div>
                <div class="card-content">
                    <h2 class="username" style="color: white; font-size: 20px; font-weight: 500; text-align: center;">
                        Nadila
                    </h2>
                    <p class="tgl-ulas" style="color: white; font-size: 12px; text-align: center;">12 Januari 2024</p>
                    <p class="description" style="color: white; font-size: 16px; text-align: justify;">Lorem ipsum dolor
                        sit
                        amet consectetur adipisicing elit. Dolores assumenda eligendi
                        voluptates adipisci facere eaque cumque impedit officiis aperiam illum expedita porro pariatur
                        aliquid
                        repudiandae corrupti natus, cum vel eos?</p>
                </div>
            </div>
        </div>
        <div class="item" style="background-color: #128C7E; border-radius: 25px;">
            <div class="image-content" style="padding: 15px;">
                <div class="card-image d-flex justify-content-center align-items-center" style="position: relative; height: 150px; width: 150px; border-radius: 50%; transform: translateX(70%);">
                    <img src="<?= base_url('assets/user/'); ?>images/kucing.jpg" alt="" style="height: 100%; width: 100%; object-fit: cover; border-radius: 50%; border: 4px solid #128C7E;">
                </div>
                <div class="card-content">
                    <h2 class="username" style="color: white; font-size: 20px; font-weight: 500; text-align: center;">
                        Nadila
                    </h2>
                    <p class="tgl-ulas" style="color: white; font-size: 12px; text-align: center;">12 Januari 2024</p>
                    <p class="description" style="color: white; font-size: 16px; text-align: justify;">Lorem ipsum dolor
                        sit
                        amet consectetur adipisicing elit. Dolores assumenda eligendi
                        voluptates adipisci facere eaque cumque impedit officiis aperiam illum expedita porro pariatur
                        aliquid
                        repudiandae corrupti natus, cum vel eos?</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END ULASAN APLIKASI -->


    <!--BASECAMP-->
    <div class="container-fluid container-basecamp p-3">
        <div class="container text-center px-5">
            <h1 class="basecamp">Basecamp Gunung Prau</h1>
            <div class="row">
                <div class="col-lg-2 col-sm-4 col-3 col-md-2">
                    <img class="logo-basecamp" src="<?= base_url('assets/user/'); ?>images/logo1.png" alt="">
                    <p class="text-bc pt-2">Bc Igirmranak</p>
                </div>
                <div class="col-lg-2 col-sm-4 col-3 col-md-2">
                    <img class="logo-basecamp" src="<?= base_url('assets/user/'); ?>images/logo2.png" alt="">
                    <p class="text-bc pt-2">Bc Wates</p>
                </div>
                <div class="col-lg-2 col-sm-4 col-3 col-md-2">
                    <img class="logo-basecamp" src="<?= base_url('assets/user/'); ?>images/logo3.png" alt="">
                    <p class="text-bc pt-2">Bc Patak Banteng</p>
                </div>
                <div class="col-lg-2 col-sm-4 col-3 col-md-2">
                    <img class="logo-basecamp" src="<?= base_url('assets/user/'); ?>images/logo4.png" alt="">
                    <p class="text-bc pt-2">Bc Kalilembu</p>
                </div>
                <div class="col-lg-2 col-sm-4 col-3 col-md-2">
                    <img class="logo-basecamp" src="<?= base_url('assets/user/'); ?>images/logo5.png" alt="">
                    <p class="text-bc pt-2">Bc Dwarawati</p>
                </div>
                <div class="col-lg-2 col-sm-4 col-3 col-md-2">
                    <img class="logo-basecamp" src="<?= base_url('assets/user/'); ?>images/logo6.png" alt="">
                    <p class="text-bc pt-2">Bc Dieng</p>
                </div>
            </div>
        </div>
    </div>
    <!--END BASECAMP-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url('assets/user/js/'); ?>owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/user/js/'); ?>swiper-bundle.min.js"></script>
    <script src="<?= base_url('assets/user/js/'); ?>script.js"></script>
    <script>
        console.log(0)
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            navText: ["<next>", "prev"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>

</html>