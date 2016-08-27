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
              <h3>Daftar Karyawan</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th width="30"> No. </th>
                    <th> NIK </th>
                    <th> Nama </th>
                    <th> Alamat </th>
                    <th> TTL </th>
                    <th> Telpon </th>
                    <th> Posisi </th>
                    <th> Jabatan </th>
                    <th> Tipe </th>
                    <th> Status Nikah </th>
                    <th> Status Karyawan </th>
                    <?php if(($this->session->userdata('userid') == 1) OR ((!empty($role_access['karyawan']['update'])) OR (!empty($role_access['karyawan']['delete'])))): ?>
                    <th class="td-actions"> Action</th>
                    <?php endif; ?>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($result)): ?>
                    <?php foreach($result as $key => $value): ?>
                    <tr>
                      <td><?php echo ($key+1); ?></td>
                      <td><?php echo $value['kary_nik']; ?></td>
                      <td><?php echo $value['kary_nama']; ?></td>
                      <td><?php echo $value['kary_alamat']; ?></td>
                      <td><?php echo $value['kary_tempat_lahir']; ?>, <?php echo $value['kary_tanggal_lahir']; ?></td>
                      <td><?php echo $value['kary_telpon']; ?></td>
                      <td><?php echo (!empty($static_data_source['kary_posisi'][$value['kary_posisi_id']]) ? $static_data_source['kary_posisi'][$value['kary_posisi_id']]['name'] : '-'); ?></td>
                      <td><?php echo (!empty($static_data_source['kary_jabatan'][$value['kary_jabatan_id']]) ? $static_data_source['kary_jabatan'][$value['kary_jabatan_id']]['name'] : '-'); ?></td>
                      <td><?php echo (!empty($static_data_source['kary_tipe'][$value['kary_tipe_id']]) ? $static_data_source['kary_tipe'][$value['kary_tipe_id']]['name'] : '-'); ?></td>
                      <td><?php echo (!empty($static_data_source['kary_status_nikah'][$value['kary_status_nikah_id']]) ? $static_data_source['kary_status_nikah'][$value['kary_status_nikah_id']]['name'] : '-'); ?></td>
                      <td><?php echo (!empty($static_data_source['kary_status_kontrak'][$value['kary_status_kontrak_id']]) ? $static_data_source['kary_status_kontrak'][$value['kary_status_kontrak_id']]['name'] : '-'); ?></td>
                      <?php if(($this->session->userdata('userid') == 1) OR ((!empty($role_access['karyawan']['update'])) OR (!empty($role_access['karyawan']['delete'])))): ?>
                      <td class="td-actions">
                        <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['karyawan']['update']))): ?>
                        <a href="<?php echo ($module_base_url.'/edit/'.$value['kary_id']); ?>" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a> 
                        <?php endif; ?>
                        <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['karyawan']['delete']))): ?>
                        <a href="<?php echo ($module_base_url.'/delete/'.$value['kary_id']); ?>" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a>
                        <?php endif; ?>
                      </td>
                      <?php endif; ?>
                    </tr>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <tr>
                      <td colspan="11" style="background: red;color: white;">Module ini belum terisi!</td>
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