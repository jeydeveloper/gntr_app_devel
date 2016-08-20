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
                    <th> No. </th>
                    <th> No. Permintaan </th>
                    <th> Tanggal </th>
                    <th> Vendor</th>
                    <th> Total Tagihan</th>
                    <th> File </th>
                    <th class="td-actions"> Actions </th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($result)): ?>
                    <?php foreach($result as $key => $value): ?>
                    <?php
                      $img_url = !empty($value['uploadfile']) ? (site_url('/').'assets/images/'.$value['uploadfile']) : '';
                    ?>
                    <tr>
                      <td><?php echo ($key+1); ?></td>
                      <td><?php echo $value['pbsrtjalan_no']; ?></td>
                      <td><?php echo $value['pbsrtjalan_tanggal']; ?></td>
                      <td><?php echo $value['vndr_nama']; ?></td>
                      <td><?php echo (!empty($total[$value['pbsrtjalan_pbptn_id']]) ? add_numberformat($total[$value['pbsrtjalan_pbptn_id']]) : ''); ?></td>
                      <td>
                        <?php if(!empty($img_url)): ?>
                        <a href="<?php echo $img_url; ?>" target="_blank">
                          <img src="<?php echo $img_url; ?>" width="50px" onError="this.onerror=null;this.src='http://localhost/gntr_app_devel/assets/images/noimage.png';">
                        </a>
                        <?php endif; ?>
                      </td>
                      <td class="td-actions"><a href="<?php echo ($module_base_url.'/surat-jalan/edit/'.$value['pbsrtjalan_id']); ?>" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a>
                      <a href="<?php echo ($module_base_url.'/surat-jalan/delete/'.$value['pbsrtjalan_id']); ?>" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a></td>
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