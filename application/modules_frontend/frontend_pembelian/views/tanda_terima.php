<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_tanda_terima.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Daftar Tanda Terima Pembelian</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> No. </th>
                    <th> Tagihan Dari </th>
                    <th> Nilai Tagihan </th>
                    <th> Lampiran </th>
                    <th> Yang menerima </th>
                    <th> PRINT </th>
                    <th class="td-actions"><div style="width:150px;">Actions</div></th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($result)): ?>
                    <?php foreach($result as $key => $value): ?>
                    <tr>
                      <td><?php echo ($key+1); ?></td>
                      <td><?php echo $value['pbttr_tagihan']; ?></td>
                      <td><?php echo (!empty($total[$value['pbttr_pbptn_id']]) ? add_numberformat($total[$value['pbttr_pbptn_id']]) : ''); ?></td>
                      <td><?php echo $value['pbttr_lampiran']; ?></td>
                      <td><?php echo $value['pbttr_menerima']; ?></td>
                      <td>
                        <a href="<?php echo ($module_base_url.'/tanda-terima/pdf/'.$value['pbttr_id']); ?>" target="_blank">View</a>
                      </td>
                      <td class="td-actions"><a href="<?php echo ($module_base_url.'/tanda-terima/edit/'.$value['pbttr_id']); ?>" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a>
                      <a href="<?php echo ($module_base_url.'/tanda-terima/delete/'.$value['pbttr_id']); ?>" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a></td>
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