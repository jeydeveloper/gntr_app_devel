<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_berita_acara.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>List Berita Acara Penjualan</h3>
              <div style="float:right; margin-top:5px; margin-right:5px;">
                <input type="checkbox">Terproses
                <input type="checkbox">Ditutup
                <input type="checkbox">Menunggu
                <input type="checkbox">Mengantri
              </div>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> No. </th>
                    <th> No. Proyek</th>
                    <th> Tagihan Dari </th>
                    <th> Nilai Tagihan </th>
                    <th> Lampiran </th>
                    <th> Yang menerima </th>
                    <th> PDF </th>
                    <th class="td-actions"><div style="width:150px;">Actions</div></th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($result)): ?>
                    <?php foreach($result as $key => $value): ?>
                    <tr>
                      <td><?php echo ($key+1); ?></td>
                      <td><?php echo $value['pbcr_noproyek']; ?></td>
                      <td><?php echo $value['clnt_nama']; ?></td>
                      <td><?php echo add_numberformat($value['ppnw_nilai_faktur']); ?></td>
                      <td><?php echo $value['pbcr_lampiran']; ?></td>
                      <td><?php echo $value['pbcr_menerima']; ?></td>
                      <td><a href="<?php echo ($module_base_url_berita_acara.'/pdf/'.$value['pbcr_id']); ?>" target="_blank">View PDF</a></td>
                      <td class="td-actions"><a href="<?php echo ($module_base_url_berita_acara.'/edit/'.$value['pbcr_id']); ?>" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a> <a href="<?php echo ($module_base_url_berita_acara.'/delete/'.$value['pbcr_id']); ?>" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a> <a href="<?php echo site_url('penjualan/berita-acara-insentif-hari-raya'); ?>" class="btn btn-small btn-warning" title="edit">detail</a></td>
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