<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Daftar Akun</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> No. Akun</th>
                    <th> Nama</th>
                    <th> Tipe</th>
                    <th> Saldo</th>
                    <th class="td-actions">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($result_parent)): ?>
                    <?php foreach($result_parent as $key => $val1): ?>

                      <?php if(!empty($result[$val1])): ?>
                      <?php
                        $value = $result[$val1];
                        //-------saldo penerimaan--------
                        if(!empty($saldo_penerimaan['parent'][$value['akun_id']])) $saldo_1 = $saldo_penerimaan['parent'][$value['akun_id']];
                        else if(!empty($saldo_penerimaan['child'][$value['akun_id']])) $saldo_1 = $saldo_penerimaan['child'][$value['akun_id']];
                        else $saldo_1 = 0;
                        //-------saldo pembayaran--------
                        if(!empty($saldo_pembayaran['parent'][$value['akun_id']])) $saldo_2 = $saldo_pembayaran['parent'][$value['akun_id']];
                        else if(!empty($saldo_pembayaran['child'][$value['akun_id']])) $saldo_2 = $saldo_pembayaran['child'][$value['akun_id']];
                        else $saldo_2 = 0;

                        $saldo = $saldo_1 - $saldo_2;
                      ?>
                      <tr>
                        <td><?php echo (!empty($parent[$value['akun_parent']]) ? ('&nbsp;&nbsp;&nbsp;' . $parent[$value['akun_parent']] . '-') : ''); ?><?php echo $value['akun_nomor']; ?></td>
                        <td><?php echo $value['akun_nama']; ?></td>
                        <td><?php echo (!empty($static_data_source['akun_tipe'][$value['akun_tipe_id']]) ? $static_data_source['akun_tipe'][$value['akun_tipe_id']]['name'] : '-'); ?></td>
                        <td style="text-align: right;"><?php echo number_format_rupiah($saldo); ?></td>
                        <td class="td-actions"><a href="<?php echo ($module_base_url.'/edit/'.$value['akun_id']); ?>" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a> <a href="<?php echo ($module_base_url.'/delete/'.$value['akun_id']); ?>" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a></td>
                      </tr>
                      <?php endif; ?>

                      <?php if(!empty($val1)): ?>
                        <?php foreach($result_child[$val1] as $key => $val2): //----list child here---- ?>
                          <?php
                            $value = $result[$val2];
                            //-------saldo penerimaan--------
                            if(!empty($saldo_penerimaan['parent'][$value['akun_id']])) $saldo_1 = $saldo_penerimaan['parent'][$value['akun_id']];
                            else if(!empty($saldo_penerimaan['child'][$value['akun_id']])) $saldo_1 = $saldo_penerimaan['child'][$value['akun_id']];
                            else $saldo_1 = 0;
                            //-------saldo pembayaran--------
                            if(!empty($saldo_pembayaran['parent'][$value['akun_id']])) $saldo_2 = $saldo_pembayaran['parent'][$value['akun_id']];
                            else if(!empty($saldo_pembayaran['child'][$value['akun_id']])) $saldo_2 = $saldo_pembayaran['child'][$value['akun_id']];
                            else $saldo_2 = 0;

                            $saldo = $saldo_1 - $saldo_2;
                          ?>
                          <tr>
                            <td><?php echo (!empty($parent[$value['akun_parent']]) ? ('&nbsp;&nbsp;&nbsp;' . $parent[$value['akun_parent']] . '-') : ''); ?><?php echo $value['akun_nomor']; ?></td>
                            <td><?php echo $value['akun_nama']; ?></td>
                            <td><?php echo (!empty($static_data_source['akun_tipe'][$value['akun_tipe_id']]) ? $static_data_source['akun_tipe'][$value['akun_tipe_id']]['name'] : '-'); ?></td>
                            <td style="text-align: right;"><?php echo number_format_rupiah($saldo); ?></td>
                            <td class="td-actions"><a href="<?php echo ($module_base_url.'/edit/'.$value['akun_id']); ?>" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a> <a href="<?php echo ($module_base_url.'/delete/'.$value['akun_id']); ?>" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a></td>
                          </tr>
                        <?php endforeach; ?>
                      <?php endif; ?>
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