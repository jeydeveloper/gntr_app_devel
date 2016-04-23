<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_tanda_terima.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>List Tanda Terima Penjualan</h3>
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
                    <th> No. Proyek</th>
                    <th> Tagihan Dari </th>
                    <th> Nilai Tagihan </th>
                    <th> Lampiran </th>
                    <th> Yang menerima </th>
                    <th class="td-actions">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> 1 </td>
                    <td> 2001-001 </td>
                    <td> PT. Client 1 </td>
                    <td> Rp. 15.000.000,00 </td>
                    <td> Kwitansi, Invoice, PO </td>
                    <td> Budi Sudarsono </td>
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