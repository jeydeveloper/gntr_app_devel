<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_invoice.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>List Invoice Penjualan</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> No. </th>
                    <th> No. Invoice </th>
                    <th> Tanggal </th>
                    <th> No. PO</th>
                    <th> Tanggal </th>
                    <th> No. Penawaran </th>
                    <th> Ditujukan Ke </th>
                    <th> Total Tagihan</th>
                    <th> PDF </th>
                    <th class="td-actions"> Actions </th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($result)): ?>
                    <?php foreach($result as $key => $value): ?>
                    <tr>
                      <td><?php echo ($key+1); ?></td>
                      <td><?php echo $value['pjinv_noinvoice']; ?></td>
                      <td><?php echo $value['pjinv_tanggal']; ?></td>
                      <td><?php echo $value['ppmt_noso']; ?></td>
                      <td><?php echo $value['ppmt_tanggal']; ?></td>
                      <td><?php echo $value['ppnw_no_penawaran']; ?></td>
                      <td><?php echo $value['clnt_nama']; ?></td>
                      <td><?php echo add_numberformat($value['ppnw_nilai_faktur']); ?></td>
                      <td><a href="<?php echo ($module_base_url_invoice.'/pdf/'.$value['pjinv_id']); ?>" target="_blank">View PDF</a></td>

                      <td class="td-actions"><a href="<?php echo ($module_base_url_invoice.'/edit/'.$value['pjinv_id']); ?>" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a> <a href="<?php echo ($module_base_url_invoice.'/delete/'.$value['pjinv_id']); ?>" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a></td>
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