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
                    <th> Akun Aktiva </th>
                    <th> Harga Aktiva </th>
                    <th> Tgl Beli </th>
                    <th> Tgl Pakai </th>
                    <th> Qty </th>
                    <th> Umur Bulan Aktiva </th>
                    <th> %Penyusut/Tahun </th>
                    <th> Pajak </th>
                    <th class="td-actions"> </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> 1 </td>
                    <td> GD.001 </td>
                    <td> Bangunan </td>
                    <td> Ruko 3 Lt. </td>
                    <td> 1201-002 </td>
                    <td> Rp 900.000.000 </td>
                    <td> 01/03/2007 </td>
                    <td> 01/03/2007 </td>
                    <td> 1 </td>
                    <td> 240 </td>
                    <td> 5 </td>
                    <td> Ya </td>
                    <td class="td-actions"><a href="vendor_edit.html" class="btn btn-small btn-success" title="edit"><i class="btn-icon-only icon-pencil"> </i></a><a href="vendor_list_submit_delete.html" class="btn btn-danger btn-small" title="delete"><i class="btn-icon-only icon-remove"> </i></a></td>
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