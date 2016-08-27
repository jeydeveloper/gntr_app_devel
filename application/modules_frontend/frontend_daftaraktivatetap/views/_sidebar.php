<div class="widget">
  <div class="widget-header"> <i class="icon-bookmark"></i>
    <h3>Shortcuts</h3>
  </div>
  <!-- /widget-header -->
  <!-- /widget-content -->
  <div class="widget-content dua">
    <div class="shortcuts"> 
      <a href="<?php echo site_url('daftar-aktiva-tetap'); ?>" class="shortcut" style="width: 100%;">
        <i class="shortcut-icon icon-list-alt"></i>
        <span class="shortcut-label">Daftar Aktiva Tetap</span> 
      </a>
    </div>
    <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['daftar-aktiva-tetap']['create']))): ?>
    <div class="shortcuts"> 
      <a href="<?php echo site_url('daftar-aktiva-tetap/add'); ?>" class="shortcut" style="width: 100%;">
        <i class="shortcut-icon icon-reply"></i>
        <span class="shortcut-label">Aktiva Tetap Baru</span> 
      </a>
    </div>
    <?php endif; ?>
    <!-- /shortcuts --> 
  </div>
  <!-- /widget-content --> 
</div>
<!-- /widget -->