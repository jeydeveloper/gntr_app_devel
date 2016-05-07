<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_permintaan.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>List Permintaan Penjualan</h3>
              <div style="float:right; margin-top:5px; margin-right:5px;">
                <input type="checkbox">Menunggu
                <input type="checkbox">Diproses
                <input type="checkbox">Ditutup
              </div>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> Tanggal </th>
                    <th> No. SO </th>
                    <th> No. Pelanggan </th>
                    <th> Nama Pelanggan </th>
                    <th> Status </th>
                    <th> No. PO </th>
                    <th> Diskon </th>
                    <th> Pajak </th>
                    <th> Biaya Kirim </th>
                    <th> Nilai Faktur </th>
                    <th> Uang Muka </th>
                    <th> Keterangan</th>
                    <th class="td-actions">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> 2016/01/01 </td>
                    <td> 1000 </td>
                    <td> 1001 </td>
                    <td> PT. Client 1 </td>
                    <td> Mengantri </td>
                    <td> - </td>
                    <td> 0 </td>
                    <td> Rp 180.000 </td>
                    <td> - </td>
                    <td> Rp 385.000 </td>
                    <td> - </td>
                    <td> - </td>
                    <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>                
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