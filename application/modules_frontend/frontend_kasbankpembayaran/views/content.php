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
              <h3>Daftar Kas Bank Pembayaran</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th width="30"> No. </th>
                    <th> Paid From </th>
                    <th> Tanggal </th>
                    <th> No. Akun </th>
                    <th> Nama Akun </th>
                    <th> Jumlah </th>
                    <th> Keterangan </th>
                    <th class="td-actions"> Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($result)): ?>
                    <?php foreach($result as $key => $value): ?>
                    <tr>
                      <td><?php echo ($key+1); ?></td>
                      <td><?php echo $value['pgln_bank_id']; ?></td>
                      <td><?php echo $value['pgln_tanggal']; ?></td>
                      <td><?php echo $value['pgln_akun_id']; ?></td>
                      <td><?php echo $value['pgln_nama']; ?></td>
                      <td><?php echo $value['pgln_jumlah']; ?></td>
                      <td><?php echo $value['pgln_keterangan']; ?></td>
                      <td class="td-actions"><a href="<?php echo ($module_base_url.'/edit/'.$value['pgln_id']); ?>" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a> <a href="<?php echo ($module_base_url.'/delete/'.$value['pgln_id']); ?>" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a></td>
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