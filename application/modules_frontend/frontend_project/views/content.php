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
              <h3>Daftar Project</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> No.</th>
                    <th> Nama</th>
                    <th> Client</th>
                    <th> Barang</th>
                    <th> Vendor</th>
                    <th> Nilai Proyek</th>
                    <th> Jangka Waktu Proyek</th>
                    <th> Status</th>
                    <th class="td-actions">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($result)): ?>
                    <?php foreach($result as $key => $value): ?>
                    <tr>
                      <td><?php echo ($key+1); ?></td>
                      <td><?php echo $value['proj_nama']; ?></td>
                      <td><?php echo $value['clnt_nama']; ?></td>
                      <td><?php echo $value['brjs_nama']; ?></td>
                      <td><?php echo $value['vndr_nama']; ?></td>
                      <td><?php echo add_numberformat($value['proj_nilai']); ?></td>
                      <td><?php echo $value['proj_jangka_waktu']; ?></td>
                      <td><?php echo (!empty($static_data_source['status_project'][$value['proj_status']]) ? $static_data_source['status_project'][$value['proj_status']]['name'] : '-'); ?></td>
                      <td class="td-actions"><a href="<?php echo ($module_base_url.'/edit/'.$value['proj_id']); ?>" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a> <a href="<?php echo ($module_base_url.'/delete/'.$value['proj_id']); ?>" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a></td>
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