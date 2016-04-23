<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_kwitansi.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>List Kwitansi Penjualan</h3>
              <div style="float:right; margin-top:5px; margin-right:5px;">
                <input type="checkbox">Terproses
                <input type="checkbox">Ditutup
                <input type="checkbox">Menunggu
                <input type="checkbox">Mengantri
              </div>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> No. </th>
                    <th> Diterima Dari</th>
                    <th> Jumlah </th>
                    <th> Untuk Pembayaran </th>
                    <th> Rekening Tujuan Pembayaran </th>
                    <th> File </th>
                    <th class="td-actions">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> 1 </td>
                    <td> PT. Client 1 </td>
                    <td> Rp. 10.000.000,00 </td>
                    <td> Pembayaran Sewa Pallet </td>
                    <td> Bank Mandiri </td>
                    <td> <img src="assets/img/1.png" alt="" height="100px" width="100px"> </td>
                    <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>
                  <tr>
                    <td> 2 </td>
                    <td> PT. Client 2 </td>
                    <td> Rp. 10.000.000,00 </td>
                    <td> Pembayaran Material Alam </td>
                    <td> Bank Mandiri </td>
                    <td> <img src="assets/img/2.jpg" alt="" height="100px" width="100px"> </td>
                    <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>
                  <tr>
                    <td> 3 </td>
                    <td> PT. Client 3 </td>
                    <td> Rp. 10.000.000,00 </td>
                    <td> Pembayaran Operator Forklift </td>
                    <td> Bank Mandiri </td>
                    <td> <img src="assets/img/3.jpg" alt="" height="100px" width="100px"> </td>
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