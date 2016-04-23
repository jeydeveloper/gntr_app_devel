<div class="widget">
  <div class="widget-header"> <i class="icon-bookmark"></i>
    <h3>Shortcuts</h3>
  </div>
  <!-- /widget-header -->
  <div class="widget-content">
    <div class="shortcuts"> 
      <a href="<?php echo site_url('penjualan/penawaran'); ?>" class="shortcut" style="width: 100%;">
        <i class="shortcut-icon icon-list-alt"></i>
        <span class="shortcut-label">List</span> 
      </a>
    </div>
    <!-- /shortcuts -->
    <div class="shortcuts"> 
      <a href="<?php echo site_url('penjualan/penawaran/add'); ?>" class="shortcut" style="width: 100%;">
        <i class="shortcut-icon icon-file"></i>
        <span class="shortcut-label">New</span> 
      </a>
    </div>
    <!-- /shortcuts -->

    <?php if(!empty($_SERVER['HTTP_REFERER'])): ?>
    <?php if(strpos($_SERVER['HTTP_REFERER'], 'penjualan') !== false): ?>
    <div class="shortcuts"> 
      <a href="<?php echo site_url('penjualan'); ?>" class="shortcut" style="width: 100%;">
        <i class="shortcut-icon icon-circle-arrow-left"></i>
        <span class="shortcut-label">Penjualan</span> 
      </a>
    </div>
    <!-- /shortcuts --> 
    <?php endif; ?>
    <?php endif; ?>

  </div>
  <!-- /widget-content --> 
</div>
<!-- /widget -->