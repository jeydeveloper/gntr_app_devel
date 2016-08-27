<div class="widget">
  <div class="widget-header"> <i class="icon-bookmark"></i>
    <h3>Shortcuts</h3>
  </div>
  <!-- /widget-header -->
  <div class="widget-content">
    <div class="shortcuts"> 
      <a href="<?php echo site_url('karyawan'); ?>" class="shortcut" style="width: 100%;">
        <i class="shortcut-icon icon-list-alt"></i>
        <span class="shortcut-label">List</span> 
      </a>
    </div>
    <!-- /shortcuts -->
    <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['karyawan']['create']))): ?>
    <div class="shortcuts"> 
      <a href="<?php echo site_url('karyawan/add'); ?>" class="shortcut" style="width: 100%;">
        <i class="shortcut-icon icon-file"></i>
        <span class="shortcut-label">New</span> 
      </a>
    </div>
    <?php endif; ?>
    <!-- /shortcuts -->
    <div class="shortcuts"> 
      <a href="<?php echo site_url('karyawan/absen'); ?>" class="shortcut" style="width: 100%;">
        <i class="shortcut-icon icon-list-alt"></i>
        <span class="shortcut-label">Absen Karyawan</span> 
      </a>
    </div>
    <!-- /shortcuts -->
    <div class="shortcuts"> 
      <a href="<?php echo site_url('karyawan/gaji'); ?>" class="shortcut" style="width: 100%;">
        <i class="shortcut-icon icon-usd"></i>
        <span class="shortcut-label">Gaji Karyawan</span> 
      </a>
    </div>
    <!-- /shortcuts -->
    <div class="shortcuts"> 
      <a href="<?php echo site_url('karyawan/pph-21'); ?>" class="shortcut" style="width: 100%;">
        <i class="shortcut-icon icon-stackexchange"></i>
        <span class="shortcut-label">Laporan Pajak PPh 21</span> 
      </a>
    </div>
    <!-- /shortcuts -->
  </div>
  <!-- /widget-content --> 
</div>
<!-- /widget -->