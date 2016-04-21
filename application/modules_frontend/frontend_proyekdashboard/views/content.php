<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="row">
            <div class="span6 dashboard">
              <div class="widget widget-table action-table">
                <div class="widget-header"> <i class="icon-list-alt"></i>
                  <h3>List Table Proyek</h3>
                </div>
                <!-- /widget-header -->
                <div class="widget-content">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th> Deskripsi </th>
                        <th> Client</th>
                        <th> Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="3" style="background: red;color: white;">Module ini belum terisi!</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /widget-content --> 
              </div>
              <!-- /widget -->
              <div class="widget widget-table action-table">
                <div class="widget-header"> <i class="icon-share-alt"></i>
                  <h3>List Table Client</h3>
                </div>
                <!-- /widget-header -->
                <div class="widget-content">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th> No </th>
                        <th> Nama</th>
                        <th> Telpon</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if(!empty($result_client)): ?>
                        <?php foreach($result_client as $key => $value): ?>
                        <tr>
                          <td><?php echo ($key+1); ?></td>
                          <td><?php echo $value['clnt_nama']; ?></td>
                          <td><?php echo $value['clnt_telpon']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                      <?php else: ?>
                        <tr>
                          <td colspan="3" style="background: red;color: white;">Module ini belum terisi!</td>
                        </tr>
                      <?php endif; ?>
                    </tbody>
                  </table>
                </div>
                <!-- /widget-content --> 
              </div>
              <!-- /widget -->
            </div>
            <div class="span6 dashboard">
              <div class="widget widget-table action-table">
                <div class="widget-header"> <i class="icon-reply"></i>
                  <h3>List Table Vendor</h3>
                </div>
                <!-- /widget-header -->
                <div class="widget-content">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th> No </th>
                        <th> Nama</th>
                        <th> Telpon</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if(!empty($result_vendor)): ?>
                        <?php foreach($result_vendor as $key => $value): ?>
                        <tr>
                          <td><?php echo ($key+1); ?></td>
                          <td><?php echo $value['vndr_nama']; ?></td>
                          <td><?php echo $value['vndr_telpon']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                      <?php else: ?>
                        <tr>
                          <td colspan="3" style="background: red;color: white;">Module ini belum terisi!</td>
                        </tr>
                      <?php endif; ?>
                    </tbody>
                  </table>
                </div>
                <!-- /widget-content --> 
              </div>
              <!-- /widget -->
              <div class="widget widget-table action-table">
                <div class="widget-header"> <i class="icon-hdd"></i>
                  <h3>List Table Barang</h3>
                </div>
                <!-- /widget-header -->
                <div class="widget-content">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th> No </th>
                        <th> Nama</th>
                        <th> Kategori</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if(!empty($result_barangjasa)): ?>
                        <?php foreach($result_barangjasa as $key => $value): ?>
                        <tr>
                          <td><?php echo ($key+1); ?></td>
                          <td><?php echo $value['brjs_nama']; ?></td>
                          <td><?php echo (!empty($static_data_source['barjas_kategori'][$value['brjs_kategori_id']]) ? $static_data_source['barjas_kategori'][$value['brjs_kategori_id']]['name'] : '-'); ?></td>
                        </tr>
                        <?php endforeach; ?>
                      <?php else: ?>
                        <tr>
                          <td colspan="3" style="background: red;color: white;">Module ini belum terisi!</td>
                        </tr>
                      <?php endif; ?>
                    </tbody>
                  </table>
                </div>
                <!-- /widget-content --> 
              </div>
              <!-- /widget -->
            </div>
          </div>
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