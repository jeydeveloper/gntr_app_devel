<div class="widget">
  <div class="widget-header"> <i class="icon-bookmark"></i>
    <h3>Shortcuts</h3>
  </div>
  <!-- /widget-header -->
  <div class="widget-content">
    <div class="shortcuts"> 
      <a href="<?php echo site_url('departemen'); ?>" class="shortcut" style="width: 100%;">
        <i class="shortcut-icon icon-list-alt"></i>
        <span class="shortcut-label">List</span> 
      </a>
    </div>
    <!-- /shortcuts -->
    <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['departemen']['create']))): ?>
    <div class="shortcuts"> 
      <a href="<?php echo site_url('departemen/add'); ?>" class="shortcut" style="width: 100%;">
        <i class="shortcut-icon icon-file"></i>
        <span class="shortcut-label">New</span> 
      </a>
    </div>
    <?php endif; ?>
  </div>
  <!-- /widget-content --> 
</div>
<!-- /widget -->