<div class="widget">
  <div class="widget-header"> <i class="icon-bookmark"></i>
    <h3>Shortcuts</h3>
  </div>
  <!-- /widget-header -->
  <div class="widget-content">
    <div class="shortcuts"> 
      <a href="<?php echo site_url('lain-lain'); ?>" class="shortcut" style="width: 100%;">
        <i class="shortcut-icon icon-list-alt"></i>
        <span class="shortcut-label">List</span> 
      </a>
    </div>
    <!-- /shortcuts -->
    <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['lain-lain']['create']))): ?>
    <div class="shortcuts"> 
      <a href="<?php echo site_url('lain-lain/add'); ?>" class="shortcut" style="width: 100%;">
        <i class="shortcut-icon icon-file"></i>
        <span class="shortcut-label">New</span> 
      </a>
    </div>
    <?php endif; ?>
    <!-- /shortcuts --> 
  </div>
  <!-- /widget-content --> 
</div>
<!-- /widget -->