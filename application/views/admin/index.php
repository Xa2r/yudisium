<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html class="gr__stta_name"><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Administrator Login</title>
<link href="<?= base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
<link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
</head>

<body data-gr-c-s-loaded="true">
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
        <h1 class="text-center login-title">Login as Administrator<br><small>E-Yudisium System STT Adisutjipto</small></h1>
                <img class="profile-img" src="<?= base_url('assets/images/logo.png') ?>" alt="">
                <?php $this->load->view('admin/template/flash-message'); ?>
                <form class="form-signin" action="<?= base_url('home_admin') ?>" method="POST">
                <input type="text" name="username" class="form-control" placeholder="Username" required="" autofocus=""><br>
                <input type="password" name="password" class="form-control" placeholder="Password" required="">
                <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">
                    Sign in</button>

                </form>
            </div>
            <a href="../index.php" class="text-center new-account">Kembali Ke Halaman Utama </a>
        </div>
    </div>
</div>

</body><span class="gr__tooltip"><span class="gr__tooltip-content"></span><i class="gr__tooltip-logo"></i><span class="gr__triangle"></span></span></html>