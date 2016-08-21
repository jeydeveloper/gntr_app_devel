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
              <h3>List Bukti Pembayaran Penjualan</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> No. </th>
                    <th> Tanggal Transaksi </th>
                    <th> No. Transaksi </th>
                    <th> Tranfer ke Rekening </th>
                    <th> No. Invoice </th>
                    <th> Total Tagihan </th>
                    <th> Jenis Transaksi </th>
                    <th> File </th>
                    <th class="td-actions"> Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($result)): ?>
                    <?php foreach($result as $key => $value): ?>
                    <tr>
                      <td><?php echo ($key+1); ?></td>
                      <td><?php echo $value['pbktp_tgltransaksi']; ?></td>
                      <td><?php echo $value['pbktp_notransaksi']; ?></td>
                      <td><?php echo (!empty($static_data_source['bank'][$value['pbktp_norekening']]) ? $static_data_source['bank'][$value['pbktp_norekening']]['name'] : '-'); ?></td>
                      <td><?php echo $value['pjinv_noinvoice']; ?></td>
                      <td><?php echo (!empty($total[$value['pbktp_ppnw_id']]) ? add_numberformat($total[$value['pbktp_ppnw_id']]) : ''); ?></td>
                      <td><?php echo $value['pbktp_jenistransaksi']; ?></td>
                      <td>
                        <a href="<?php echo site_url('/'); ?>assets/images/<?php echo $value['pbktp_uploadfile']; ?>" target="_blank">
                          <img src="<?php echo site_url('/'); ?>assets/images/<?php echo $value['pbktp_uploadfile']; ?>" width="50px">
                        </a>
                      </td>
                      <td class="td-actions"><a href="<?php echo ($module_base_url_bukti_pembayaran.'/edit/'.$value['pbktp_id']); ?>" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a> <a href="<?php echo ($module_base_url_bukti_pembayaran.'/delete/'.$value['pbktp_id']); ?>" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a></td>
                    </tr>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <tr>
                      <td colspan="9" style="background: red;color: white;">Module ini belum terisi!</td>
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