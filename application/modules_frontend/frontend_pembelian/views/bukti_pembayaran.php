<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_bukti_pembayaran.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Daftar Bukti Pembayaran Pembelian</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> No. Bukti Pembayaran </th>
                    <th> PRINT</th>
                    <th> Action</th>
                    <!-- <th class="td-actions"> </th> -->
                  </tr>
                </thead>
                <tbody>
                 <?php if(!empty($result)): ?>
                    <?php foreach($result as $key => $value): ?>
                      <tr>
                        <td> <?php echo $value['bp_no']; ?></td>
                        <td><a href="<?php echo ($module_base_url.'/bukti-pembayaran/pdf/'.$value['bp_id']); ?>" target="_blank">View</a></td>

                      <td class="td-actions"><a href="<?php echo ($module_base_url.'/bukti-pembayaran/edit/'.$value['bp_id']); ?>" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a>
                      <a href="<?php echo ($module_base_url.'/bukti-pembayaran/delete/'.$value['bp_id']); ?>" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a></td>
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