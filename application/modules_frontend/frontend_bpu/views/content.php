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
              <h3>Daftar BPU</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th width="30"> No. </th>
                    <th> Nama </th>
                    <th> Besaran (harga) </th>
                    <th> Terbilang </th>
                    <th> Approved By </th>
                    <th> Project </th>
                    <?php if(($this->session->userdata('userid') == 1) OR ((!empty($role_access['bpu']['update'])) OR (!empty($role_access['bpu']['delete'])))): ?>
                    <th class="td-actions"> Action</th>
                    <?php endif; ?>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($result)): ?>
                    <?php foreach($result as $key => $value): ?>
                    <tr>
                      <td><?php echo ($key+1); ?></td>
                      <td><?php echo $value['bpu_nama']; ?></td>
                      <td style="text-align:right;"><?php echo number_format_rupiah($value['bpu_harga']); ?></td>
                      <td><?php echo (!empty($value['bpu_harga']) ? terbilang($value['bpu_harga']) : '-'); ?></td>
                      <td><?php echo (!empty($value['bpu_approved_by']) ? $value['bpu_approved_by'] : '-'); ?></td>
                      <td><?php echo (!empty($value['proj_nama']) ? $value['proj_nama'] : '-'); ?></td>
                      <?php if(($this->session->userdata('userid') == 1) OR ((!empty($role_access['bpu']['update'])) OR (!empty($role_access['bpu']['delete'])))): ?>
                      <td class="td-actions">
                        <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['bpu']['update']))): ?>
                        <a href="<?php echo ($module_base_url.'/edit/'.$value['bpu_id']); ?>" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a> 
                        <?php endif; ?>
                        <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['bpu']['delete']))): ?>
                        <a href="<?php echo ($module_base_url.'/delete/'.$value['bpu_id']); ?>" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a>
                        <?php endif; ?>
                      </td>
                      <?php endif; ?>
                    </tr>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <tr>
                      <td colspan="8" style="background: red;color: white;">Module ini belum terisi!</td>
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