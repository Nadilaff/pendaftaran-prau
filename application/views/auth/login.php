<!-- LOGIN CONTENT -->
<div class="login h-vh-100">
    <div class="body d-flex align-items-center justify-content-center">
        <div class="login-container">
            <div class="form-left">
                <form class="login-form" method="post" action="<?= base_url('auth'); ?>">
                    <h2>LOGIN</h2>

                    <?= $this->session->flashdata('pesan'); ?>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Masukkan Email" value="<?= set_value('email') ?>" style="border: none; border-bottom: 2px solid #333; margin-bottom: 10px; padding: 10px; font-size: 14px; width: 100%; box-sizing: border-box;">
                        <small class="text-danger"><?= form_error('email') ?></small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Masukkan Password">
                        <small class="text-danger"><?= form_error('password') ?></small>
                    </div>
                    <div class="checkbox d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <!-- <input type="checkbox" id="remember">
                                <label for="remember" class="mb-0 ms-2">Ingatkan saya</label> -->
                        </div>
                        <span class="text-end"><a href="#" class="text-decoration-none" style="color: #128C7E;">Lupa password?</a></span>
                    </div>

                    <div class="login-btn">
                        <button type="submit" id="loginBtn">Login</button>
                    </div>
                    <h6 class="text-black text-start w-100">
                        Belum punya akun? <a href="<?= base_url('auth/registrasi'); ?>" class="text-decoration-none" style="color: #128C7E;">Daftar di sini</a>
                    </h6>
                </form>
            </div>
            <div class="img-right">
                <img src="<?= base_url('assets/user/'); ?>images/hero-login.png" alt="Login Image">
            </div>
        </div>
    </div>
</div>