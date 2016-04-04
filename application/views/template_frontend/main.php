<?php include('_header.php'); //header html ?>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
        class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="<?php echo site_url('/'); ?>">Aplikasi Keuangan - PT. Putra Bahari Mandiri</a>
            <div class="nav-collapse">
                <ul class="nav pull-right">
                    <li>
                        <a href="login.html">
                        <i class="icon-lock"></i> Login
                        </a>
                    </li>
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
                <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-flag-alt"></i><span>Persiapan</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('pengguna'); ?>">Pengguna</a></li>
                        <li><a href="<?php echo site_url('wajib-pajak'); ?>">Data Wajib Pajak Pribadi & Badan</a></li>
                        <li><a href="<?php echo site_url('user-level'); ?>">User Level</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-list-ul"></i><span>Daftar</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('departemen'); ?>">Departemen</a></li>
                        <li><a href="<?php echo site_url('daftar-aktiva-tetap'); ?>">Aktiva Tetap</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-credit-card"></i><span>Kas Bank</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('kas-bank-penerimaan'); ?>">Penerimaan</a></li>
                        <li><a href="<?php echo site_url('kas-bank-pembayaran'); ?>.html">Pembayaran</a></li>
                        <li><a href="<?php echo site_url('grafik-bank-bca'); ?>">Buku Bank</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-book"></i><span>Buku Besar</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('daftar-akun'); ?>">Daftar Akun</a></li>
                        <li><a href="<?php echo site_url('wajib-pajak'); ?>">Info Perusahaan</a></li>
                        <li><a href="<?php echo site_url('mata-uang'); ?>">Mata Uang</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo site_url('pembelian'); ?>"><i class="icon-chevron-sign-left"></i><span>Pembelian</span></a></li>
                <li><a href="<?php echo site_url('penjualan'); ?>"><i class="icon-chevron-sign-right"></i><span>Penjualan</span></a></li>
                <li><a href="<?php echo site_url('proyek-dashboard'); ?>"><i class="icon-road"></i><span>Proyek</span></a></li>
                <li><a href="<?php echo site_url('lain-lain'); ?>"><i class="icon-sitemap"></i><span>Lain - lain</span></a></li>
                <li><a href="<?php echo site_url('bpu'); ?>"><i class="icon-paste"></i><span>BPU</span></a></li>
                <li><a href="<?php echo site_url('laporan'); ?>"><i class="icon-paste"></i><span>Laporan</span></a></li>
                <li><a href="<?php echo site_url('karyawan'); ?>"><i class="icon-user"></i><span>Karyawan</span></a>
                </li>
            </ul>
        </div>
        <!-- /container --> 
    </div>
    <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->

<?php echo $contents; //content data ?>

<?php include('_footer.php'); //footer html ?>