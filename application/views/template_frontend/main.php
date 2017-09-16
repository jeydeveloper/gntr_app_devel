<?php include('_header.php'); //header html ?>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
        class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="<?php echo site_url('/'); ?>">Aplikasi Keuangan - PT. Putra Bahari Mandiri</a>
            <div class="nav-collapse">
                <ul class="nav pull-right">
                    <?php if($this->session->userdata('userid')): ?>
                    <li>
                        <a href="<?php echo site_url('logout'); ?>">Hi <i><?php echo $this->session->userdata('username'); ?></i>, (logout)</a>
                    </li>
                    <?php else: ?>
                    <li>
                        <a href="<?php echo site_url('login'); ?>">
                            <i class="icon-lock"></i> Login
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
                <form class="navbar-search pull-right">
                    <input type="text" class="search-query" placeholder="Search">
                </form>
            </div>
            <!--/.nav-collapse --> 
        </div>
        <!-- /container --> 
    </div>
    <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">   
    <div class="subnavbar-inner">
        <div class="container">
            <ul class="mainnav">
                <?php if(($this->session->userdata('userid') == 1) OR ((!empty($role_access['pengguna']['read'])) OR (!empty($role_access['wajib-pajak']['read'])) OR (!empty($role_access['user-level']['read'])))): ?>
                <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-flag-alt"></i><span>Persiapan</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['pengguna']['read']))): ?><li><a href="<?php echo site_url('pengguna'); ?>">Pengguna</a></li><?php endif; ?>
                        <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['wajib-pajak']['read']))): ?><li><a href="<?php echo site_url('wajib-pajak'); ?>">Data Wajib Pajak Pribadi & Badan</a></li><?php endif; ?>
                        <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['user-level']['read']))): ?><li><a href="<?php echo site_url('user-level'); ?>">User Level</a></li><?php endif; ?>
                    </ul>
                </li>
                <?php endif; ?>

                <?php if(($this->session->userdata('userid') == 1) OR ((!empty($role_access['departemen']['read'])) OR (!empty($role_access['daftar-aktiva-tetap']['read'])))): ?>
                <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-list-ul"></i><span>Daftar</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['departemen']['read']))): ?><li><a href="<?php echo site_url('departemen'); ?>">Departemen</a></li><?php endif; ?>
                        <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['daftar-aktiva-tetap']['read']))): ?><li><a href="<?php echo site_url('daftar-aktiva-tetap'); ?>">Aktiva Tetap</a></li><?php endif; ?>
                    </ul>
                </li>
                <?php endif; ?>

                <?php if(($this->session->userdata('userid') == 1) OR ((!empty($role_access['kas-bank-penerimaan']['read'])) OR (!empty($role_access['kas-bank-pembayaran']['read'])) OR (!empty($role_access['grafik-bank-bca']['read'])))): ?>
                <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-credit-card"></i><span>Kas Bank</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['kas-bank-penerimaan']['read']))): ?><li><a href="<?php echo site_url('kas-bank-penerimaan'); ?>">Penerimaan</a></li><?php endif; ?>
                        <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['kas-bank-pembayaran']['read']))): ?><li><a href="<?php echo site_url('kas-bank-pembayaran'); ?>">Pembayaran</a></li><?php endif; ?>
                        <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['grafik-bank-bca']['read']))): ?><li><a href="<?php echo site_url('grafik-bank-bca'); ?>">Buku Bank</a></li><?php endif; ?>
                    </ul>
                </li>
                <?php endif; ?>

                <?php if(($this->session->userdata('userid') == 1) OR ((!empty($role_access['daftar-akun']['read'])) OR (!empty($role_access['mata-uang']['read'])))): ?>
                <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-book"></i><span>Buku Besar</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['daftar-akun']['read']))): ?><li><a href="<?php echo site_url('daftar-akun'); ?>">Daftar Akun</a></li><?php endif; ?>
                        <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['mata-uang']['read']))): ?><li><a href="<?php echo site_url('mata-uang'); ?>">Mata Uang</a></li><?php endif; ?>
                    </ul>
                </li>
                <?php endif; ?>

                <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['pembelian']['read']))): ?><li><a href="<?php echo site_url('pembelian'); ?>"><i class="icon-chevron-sign-left"></i><span>Pembelian</span></a></li><?php endif; ?>
                <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['penjualan']['read']))): ?><li><a href="<?php echo site_url('penjualan'); ?>"><i class="icon-chevron-sign-right"></i><span>Penjualan</span></a></li><?php endif; ?>
                <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['proyek-dashboard']['read']))): ?><li><a href="<?php echo site_url('proyek-dashboard'); ?>"><i class="icon-road"></i><span>Proyek</span></a></li><?php endif; ?>
                <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['lain-lain']['read']))): ?><li><a href="<?php echo site_url('lain-lain'); ?>"><i class="icon-sitemap"></i><span>Lain - lain</span></a></li><?php endif; ?>
                <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['bpu']['read']))): ?><li><a href="<?php echo site_url('bpu'); ?>"><i class="icon-paste"></i><span>BPU</span></a></li><?php endif; ?>
                <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['laporan']['read']))): ?><li><a href="<?php echo site_url('laporan'); ?>"><i class="icon-paste"></i><span>Laporan</span></a></li><?php endif; ?>
                <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['karyawan']['read']))): ?><li><a href="<?php echo site_url('karyawan'); ?>"><i class="icon-user"></i><span>Karyawannn</span></a></li><?php endif; ?>
            </ul>
        </div>
        <!-- /container --> 
    </div>
    <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->

<?php echo $contents; //content data ?>

<?php include('_footer.php'); //footer html ?>