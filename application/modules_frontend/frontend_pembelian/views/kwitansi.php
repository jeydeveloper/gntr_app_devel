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
              <h3>Daftar Kwitansi Pembelian</h3>
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
                      <td><?php echo $value['pbkw_dari']; ?></td>
                      <td><?php echo $value['pbkw_total']; ?></td>
                      <td>
                          <?php echo $value['pbkw_bank']; ?><br />
                          No. Rekening: <?php echo $value['pbkw_norek']; ?><br />
                          Atas Nama: <?php echo $value['pbkw_an']; ?><br />
                      </td>
                      <td><a href="<?php echo ($module_base_url.'/kwitansi/pdf/'.$value['pbkw_id']); ?>" target="_blank">View PDF</a></td>
                      <td class="td-actions"><a href="<?php echo ($module_base_url.'/kwitansi/edit/'.$value['pbkw_id']); ?>" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a> <a href="<?php echo ($module_base_url.'/kwitansi/delete/'.$value['pbkw_id']); ?>" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a></td>
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