<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="<?= base_url('assets/user/css/'); ?>style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/user/'); ?>css/booking.css">
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
                                <a class="nav-link mx-lg-2 active" href="<?= base_url('booking'); ?>">Booking Online</a>
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


    <!-- CONTENT BOOKING -->
    <header class="header-booking align-items-center justify-content-center">
        <div class="container justify-content-center align-items-center">
            <div class="content-container d-flex justify-content-center align-items-center">
                <div class="content">
                    <h1>Pesan Tiket Pendakianmu Sekarang!</h1>
                    <p class="col-lg-6" style="transform: translateX(50%);">masukkan tanggal naik gunung, tanggal turun gunug, jalur pendakian, dan jumlah orang yang akan mendaki pada kolom di bawah!</p>
                </div>
            </div>
            <div class="booking-form ">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="custom-border">
                            <div class="inner-border d-flex align-items-center">
                                <input type="date" class="form-control date-selector" style="margin-right: 10px;">
                                <input type="date" class="form-control date-selector" placeholder="tanggal turun" style="margin-right: 10px;">
                                <select class="form-select" id="jalur-dropdown" placeholder="Jalur pendakian" style="margin-right: 10px;">
                                    <option value="Dieng">Pilih jalur pendakian...</option>
                                    <option value="Dieng">Jalur Dieng</option>
                                    <option value="Patak Banteng">Jalur Patak Banteng</option>
                                    <option value="Wates">Jalur Wates</option>
                                    <option value="Dieng">Jalur Dwarawati</option>
                                    <option value="Dieng">Jalur Kalilembu</option>
                                    <option value="Dieng">Jalur Igirmranak</option>
                                </select>
                                <div class="custom-dropdown" style="margin-right: 10px;">
                                    <input type="number" class="form-control" id="people-input" min="1" value="1">
                                </div>
                                <button type="button" class="btn pesan-button" onclick="window.location.href='snk.html'">Pesan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END CONTENT BOOKING -->


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