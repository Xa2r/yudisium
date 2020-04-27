<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<body data-gr-c-s-loaded="true" class="body-login">
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-10 col-sm-6 col-lg-4 col-lg-offset-4 col-sm-offset-3 col-xs-offset-1">
            <div class="account-wall">
                <div class="form-top">
                    <div class="image-wrapper">
                        <img class="profile-img" src="<?= base_url('assets/images/logo.png') ?>" alt="">
                    </div>
                    <h1 class="text-center login-title">Login as Administrator</h1>
                    <small class="small-title">E-Yudisium System STT Adisutjipto</small>
                </div>
                <div class="form-bottom">
                    <?php $this->load->view('admin/template/flash-message'); ?>
                    <form class="form-signin" action="<?= base_url('home_admin') ?>" method="POST">
                        <input type="text" name="username" class="form-control" placeholder="Username" required="" autofocus=""><br>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="">
                        <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">
                            Sign in</button>

                    </form>
                </div>
            </div>
            <a href="../index.php" class="text-center new-account">Kembali Ke Halaman Utama 
                <br>
                <i class="fas fa-hand-point-left"></i>
            </a>
        </div>
    </div>
</div>

</body><span class="gr__tooltip"><span class="gr__tooltip-content"></span><i class="gr__tooltip-logo"></i><span class="gr__triangle"></span></span></html>