<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Saham</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> No. </th>
                    <th> Pemilik Saham</th>
                    <th> Alamat </th>
                    <th> Prosentase Saham</th>
                    <th> Nilai Saham</th>
                    <?php if(($this->session->userdata('userid') == 1) OR ((!empty($role_access['lain-lain']['update'])) OR (!empty($role_access['lain-lain']['delete'])))): ?>
                    <th class="td-actions"> </th>
                    <?php endif; ?>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($result)): ?>
                    <?php foreach($result as $key => $value): ?>
                    <?php
                      $nilai_saham = round(($static_data_source['total_saham']*$value['sham_persentase'])/100);
                    ?>
                    <tr>
                      <td><?php echo ($key+1); ?></td>
                      <td><?php echo $value['sham_nama']; ?></td>
                      <td><?php echo $value['sham_alamat']; ?></td>
                      <td><?php echo (!empty($persentase[$value['sham_id']]) ? $persentase[$value['sham_id']] : ''); ?></td>
                      <td style="text-align: right;"><?php echo number_format_rupiah($value['sham_persentase']); ?></td>
                      <?php if(($this->session->userdata('userid') == 1) OR ((!empty($role_access['lain-lain']['update'])) OR (!empty($role_access['lain-lain']['delete'])))): ?>
                      <td class="td-actions">
                        <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['lain-lain']['update']))): ?>
                        <a href="<?php echo ($module_base_url.'/edit/'.$value['sham_id']); ?>" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a> 
                        <?php endif; ?>
                        <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['lain-lain']['delete']))): ?>
                        <a href="<?php echo ($module_base_url.'/delete/'.$value['sham_id']); ?>" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a>
                        <?php endif; ?>
                      </td>
                      <?php endif; ?>
                    </tr>
                    <?php endforeach; ?>

                    <tr>
                      <td colspan="4">Total saham saat ini adalah : </td>
                      <td style="text-align: right;font-weight:bold;font-size:20px;"><?php echo number_format_rupiah($total); ?></td>
                      <?php if(($this->session->userdata('userid') == 1) OR ((!empty($role_access['lain-lain']['update'])) OR (!empty($role_access['lain-lain']['delete'])))): ?>
                      <td class="td-actions"></td>
                      <?php endif; ?>
                    </tr>
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
<!-- /main -->