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
              <h3>Daftar Client</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th width="30"> No. </th>
                    <th> Nama </th>
                    <th> Alamat </th>
                    <th> Contact Person </th>
                    <th> Telpon </th>
                    <th> Email </th>
                    <th> Status </th>
                    <th class="td-actions"> Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($result)): ?>
                    <?php foreach($result as $key => $value): ?>
                    <tr>
                      <td><?php echo ($key+1); ?></td>
                      <td><?php echo $value['clnt_nama']; ?></td>
                      <td><?php echo $value['clnt_alamat']; ?></td>
                      <td><?php echo $value['clnt_contact_person']; ?></td>
                      <td><?php echo $value['clnt_telpon']; ?></td>
                      <td><?php echo $value['clnt_email']; ?></td>
                      <td><?php echo $label_status[$value['clnt_status']]; ?></td>
                      <td class="td-actions"><a href="<?php echo ($module_base_url.'/edit/'.$value['clnt_id']); ?>" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a> <a href="<?php echo ($module_base_url.'/delete/'.$value['clnt_id']); ?>" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a></td>
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