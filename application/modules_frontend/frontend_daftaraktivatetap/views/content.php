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
              <h3>Daftar Aktiva Tetap</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th width="30"> No. </th>
                    <th> Kode Aktiva </th>
                    <th> Keterangan </th>
                    <th> Tipe Aktiva </th>
                    <th> Harga Aktiva </th>
                    <th> Tgl Beli </th>
                    <th> Tgl Pakai </th>
                    <th> Qty </th>
                    <th> Umur Bulan Aktiva </th>
                    <th> %Penyusut/Tahun </th>
                    <th> Pajak </th>
                    <?php if(($this->session->userdata('userid') == 1) OR ((!empty($role_access['daftar-aktiva-tetap']['update'])) OR (!empty($role_access['daftar-aktiva-tetap']['delete'])))): ?>
                    <th class="td-actions"> </th>
                    <?php endif; ?>
                  </tr>
                </thead>
                <tbody>
                  <?php if(!empty($result)): ?>
                    <?php foreach($result as $key => $value): ?>
                    <tr>
                      <td><?php echo ($key+1); ?></td>
                      <td><?php echo $value['dakt_kode']; ?></td>
                      <td><?php echo $value['dakt_keterangan']; ?></td>
                      <td><?php echo $value['dakt_tipe']; ?></td>
                      <td><?php echo $value['dakt_harga']; ?></td>
                      <td><?php echo $value['dakt_tanggalbeli']; ?></td>
                      <td><?php echo $value['dakt_tanggalpakai']; ?></td>
                      <td><?php echo $value['dakt_qty']; ?></td>
                      <td><?php echo $value['dakt_umurbulan']; ?></td>
                      <td><?php echo $value['dakt_persensusut']; ?></td>
                      <td><?php echo $value['dakt_pajak']; ?></td>
                      <?php if(($this->session->userdata('userid') == 1) OR ((!empty($role_access['daftar-aktiva-tetap']['update'])) OR (!empty($role_access['daftar-aktiva-tetap']['delete'])))): ?>
                      <td class="td-actions">
                        <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['daftar-aktiva-tetap']['update']))): ?>
                        <a href="<?php echo ($module_base_url.'/edit/'.$value['dakt_id']); ?>" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a> 
                        <?php endif; ?>
                        <?php if(($this->session->userdata('userid') == 1) OR (!empty($role_access['daftar-aktiva-tetap']['delete']))): ?>
                        <a href="<?php echo ($module_base_url.'/delete/'.$value['dakt_id']); ?>" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a>
                        <?php endif; ?>
                      </td>
                      <?php endif; ?>
                    </tr>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <tr>
                      <td colspan="12" style="background: red;color: white;">Module ini belum terisi!</td>
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