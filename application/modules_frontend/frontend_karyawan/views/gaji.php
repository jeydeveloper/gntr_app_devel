<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_gaji.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Daftar Gaji Karyawan</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> No.</th>
                    <th> NIK</th>
                    <th> Nama</th>
                    <th> Status</th>
                    <th> Jabatan</th>
                    <th> Gaji Pokok</th>
                    <th> Tunjangan</th>
                    <th> Lembur</th>
                    <th> Uang Makan</th>
                    <th> Transport</th>
                    <th> Bonus</th>
                    <th> Pinjaman</th>
                    <th> Lain-lain</th>
                    <th> Total</th>
                    <th class="td-actions">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($result)): ?>
                    <?php foreach($result as $key => $value): ?>
                    <tr>
                      <td><?php echo ($key+1); ?></td>
                      <td><?php echo $value['kary_nik']; ?></td>
                      <td><?php echo $value['kary_nama']; ?></td>
                      <td><?php echo (!empty($static_data_source['kary_status_kontrak'][$value['kary_status_kontrak_id']]) ? $static_data_source['kary_status_kontrak'][$value['kary_status_kontrak_id']]['name'] : '-'); ?></td>
                      <td><?php echo (!empty($static_data_source['kary_jabatan'][$value['kary_jabatan_id']]) ? $static_data_source['kary_jabatan'][$value['kary_jabatan_id']]['name'] : '-'); ?></td>
                      <td><?php echo $value['kygj_gaji_pokok']; ?></td>
                      <td><?php echo $value['kygj_tunjangan']; ?></td>
                      <td><?php echo $value['kygj_lembur']; ?></td>
                      <td><?php echo $value['kygj_uang_makan']; ?></td>
                      <td><?php echo $value['kygj_transport']; ?></td>
                      <td><?php echo $value['kygj_bonus']; ?></td>
                      <td><?php echo $value['kygj_pinjaman']; ?></td>
                      <td><?php echo $value['kygj_lain_lain']; ?></td>
                      <td><?php echo $value['kygj_total']; ?></td>
                      <td class="td-actions"><a href="<?php echo ($module_base_url_gaji.'/edit/'.$value['kygj_id']); ?>" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a> <a href="<?php echo ($module_base_url_gaji.'/delete/'.$value['kygj_id']); ?>" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a></td>
                    </tr>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <tr>
                      <td colspan="15" style="background: red;color: white;">Module ini belum terisi!</td>
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