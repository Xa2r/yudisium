<body data-gr-c-s-loaded="true">
  <div class="container">
        <nav class="navbar navbar-inverse sidebar">      
          <div class="container-fluid">
          <div class="navbar-header">
            <a href="<?= base_url('home_admin') ?>">
              <img class="profile-img" src="<?= base_url('assets/images/logo.png') ?>" alt="">
            </a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <div id="navbar-custome" class="navbar-collapse collapse in">
            <ul class="nav navbar-nav">
                <li><a href="<?= base_url('home_admin') ?>"><i class="fas fa-home"></i> Home Page</a></li>
                <li><a href="<?= base_url('kategory_yudisium') ?>"><i class="fas fa-list-ol"></i> Kategori Persyaratan</a></li>
                <li><a href="<?= base_url('list_seleksi') ?>"><i class="fas fa-university"></i> Jurusan</a></li>             
                
                <li class="dropdown-kabag"> 
        
                  <a href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-chalkboard-teacher"></i>Kabag lab<span class="show-icon" style="display: block;">+</span> 
    <span class="hide-icon" style="display: none;">-</span></a>
                  <ul class="dropdown-menu-kabag" style="display: none;">
                    <li><a href="<?= base_url('laboran') ?>">Daftar Mahasiswa Bebas Lab</a></li>
                  <li><a href="index.php?view=laboran&amp;act=cetak">Cetak Surat Bebas Lab</a></li>
                  </ul>
                </li>
            </ul>
            <div class="user-session">
              <i class="fas fa-user-circle"></i>
              <ul class="nav navbar-nav navbar-right">
                  <li class="admin-info">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login as! <strong class="text-default"><?= $admin->level ?></strong></a>
                  </li>
                  <li class="setting"><a href="<?= base_url('edit_profile') ?>">Setting Account</a></li>
                  <li class="logout"><a href="<?= base_url('admin_logout') ?>">Logout</a></li>
              </ul>
          </div>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->

      </nav>
      <div class="banner-top">
            <img style="width:100%; height: auto;" src="<?= base_url('assets/images/header.png') ?>" alt="header"/>
      </div>