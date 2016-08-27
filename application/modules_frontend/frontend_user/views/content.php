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
              <h3>Daftar Pengguna</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th width="30"> No. </th>
                    <th> Username </th>
                    <th> Level </th>
                    <th> Status </th>
                    <?php if(($this->session->userdata('userid') == 1) OR ((!empty($role_access['pengguna']['update'])) OR (!empty($role_access['pengguna']['delete'])))): ?>
                    <th class="td-actions"> </th>
                    <?php endif; ?>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($result)): ?>
                    <?php foreach($result as $key => $value): ?>
                    <tr>
                      <td><?php echo ($key+1); ?></td>
                      <td><?php echo $value['admusr_username']; ?></td>
                      <td><?php echo $value['aulv_name']; ?></td>
                      <td><?php echo $label_status[$value['admusr_user_status']]; ?></td>

                      <?php if(($this->session->userdata('userid') == 1) OR ((!empty($role_access['pengguna']['update'])) OR (!empty($role_access['pengguna']['delete'])))): ?>
                      <td class="td-actions">
                        <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['pengguna']['update']))): ?>
                        <a href="<?php echo ($module_base_url.'/edit/'.$value['admusr_id']); ?>" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a> 
                        <?php endif; ?>

                        <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['pengguna']['delete']))): ?>
                        <a href="<?php echo ($module_base_url.'/delete/'.$value['admusr_id']); ?>" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a>
                        <?php endif; ?>
                      </td>
                      <?php endif; ?>

                    </tr>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <tr>
                      <td colspan="5" style="background: red;color: white;">Module ini belum terisi!</td>
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