<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Gn. Prau</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/user/'); ?>css/registrasi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- LOGIN CONTENT -->
    <div class="login h-vh-100">
        <div class="body d-flex align-items-center justify-content-center">
            <div class="login-container">
                <div class="form-left">
                    <form class="login-form" method="post" action="<?= base_url('auth/registrasi'); ?>">
                        <h2>Registrasi</h2>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" placeholder="Masukkan nama" value="<?= set_value('nama') ?>">
                            <small class="text-danger"><?= form_error('nama') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="telepon">No. Telepon</label>
                            <input type="text" id="telepon" name="telepon" placeholder="Masukkan no. telepon" value="<?= set_value('telepon') ?>">
                            <small class="text-danger"><?= form_error('telepon') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" placeholder="Masukkan email" value="<?= set_value('email') ?>">
                            <small class="text-danger"><?= form_error('email') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password1" id="password1" placeholder="Masukkan password">
                            <small class="text-danger"><?= form_error('password1') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="password">Ulangi Password</label>
                            <input type="password" name="password2" id="password2" placeholder="Masukkan kembali password Anda">
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan alamat anda" value="<?= set_value('alamat') ?>" rows="1" style="border: none; border-bottom: 2px solid #333; margin-bottom: 10px; padding: 3px; font-size: 14px; width: 100%; box-sizing: border-box; border-radius: 0;"></input>
                            <small class="text-danger"><?= form_error('alamat') ?></small>
                        </div>
                        <div class="login-btn">
                            <button type="submit">Registrasi</button>
                        </div>
                        <h6 class="text-black text-start w-100">
                            Sudah punya akun? <a href="<?= base_url('auth'); ?>" class="text-decoration-none" style="color: #076461;">Login</a>
                        </h6>
                    </form>
                </div>
                <div class="img-right">
                    <img src="<?= base_url('assets/user/'); ?>images/hero-login.png" alt="Login Image">
                </div>
            </div>
        </div>
    </div>