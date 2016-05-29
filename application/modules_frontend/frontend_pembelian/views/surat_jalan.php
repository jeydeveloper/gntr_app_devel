<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_surat_jalan.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Daftar Surat Jalan Pembelian</h3>
            </div>
            <!-- /widget-header -->

            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> Resource </th>
                    <th> URL</th>
                    <!-- <th class="td-actions"> </th> -->
                  </tr>
                </thead>
                <tbody>
                 <?php if(!empty($result)): ?>
                    <?php foreach($result as $key => $value): ?>
                      <tr>
                        <td> <?php echo $value['sj_vendor']; ?></td>
                        <td><a href="<?php echo ($module_base_url.'/surat-jalan/pdf/'.$value['sj_id']); ?>"><?php echo ($module_base_url.'/surat-jalan/pdf/'.$value['sj_id']); ?></a></td>
                      </tr>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <tr>
                      <td colspan="6" style="background: red;color: white;">Module ini belum terisi!</td>
                    </tr>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
            <!-- /widget-content -->
          </div>
          <!-- /widget -->
        </div>
        <!-- /span8 -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /main-inner -->
</div>
<!-- /main -->