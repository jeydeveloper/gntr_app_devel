<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_kwitansi.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>List Kwitansi Penjualan</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> No. </th>
                    <th> Diterima Dari</th>
                    <th> Jumlah </th>
                    <th> Rekening Tujuan Pembayaran </th>
                    <th> PDF </th>
                    <th class="td-actions">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($result)): ?>
                    <?php foreach($result as $key => $value): ?>
                    <tr>
                      <td><?php echo ($key+1); ?></td>
                      <td><?php echo $value['clnt_nama']; ?></td>
                      <td><?php echo add_numberformat($value['ppnw_nilai_faktur']); ?></td>
                      <td><?php echo (!empty($static_data_source['bank'][$value['pjkw_bank']]) ? $static_data_source['bank'][$value['pjkw_bank']]['name'] : '-'); ?></td>
                      <td><a href="<?php echo ($module_base_url_kwitansi.'/pdf/'.$value['pjkw_id']); ?>" target="_blank">View PDF</a></td>
                      <td class="td-actions"><a href="<?php echo ($module_base_url_kwitansi.'/edit/'.$value['pjkw_id']); ?>" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a> <a href="<?php echo ($module_base_url_kwitansi.'/delete/'.$value['pjkw_id']); ?>" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a></td>
                    </tr>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <tr>
                      <td colspan="13" style="background: red;color: white;">Module ini belum terisi!</td>
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