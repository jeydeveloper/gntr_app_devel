<style type="text/css">
  .filter{display: none;}
  p{margin: 0;}
  .bld{font-weight: bold;}
  tr{border-bottom: solid 1px #eee;}
  tr.no-border{border-bottom: 0;}
  .hdr p{font-size: 18px;font-weight: bold;}
  .hdr p.sub{font-size: 14px;}
</style>

<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-bookmark"></i> 
              <h3>Laporan Pembelian per Vendor</h3>
            </div>
            <!-- /widget-header -->
            <div class="control-group">
              <div class="controls">
                <div style="border: 1px solid #e5e5e5;padding:5px 10px;background: #e5e5e5;">
                  <p style="margin:0;">Periode : <?php echo $static_data_source['daftar_bulan'][$periode_bulan_1]; ?> - <?php echo $static_data_source['daftar_bulan'][$periode_bulan_2]; ?> <?php echo $periode_tahun; ?></p>
                </div>
                <div style="border: 1px solid #e5e5e5;padding:5px 10px;">
                  <div style="text-align: center;">
                    <h1>PT. Putra Bahari Mandiri</h1>
                    <h2>Pembelian per Vendor</h2>
                    <p>Periode <?php echo $static_data_source['daftar_bulan'][$periode_bulan_1]; ?> - <?php echo $static_data_source['daftar_bulan'][$periode_bulan_2]; ?> <?php echo $periode_tahun; ?></p>  
                  </div>
                  <table class="table table-hover" style="width:100%;">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nama Vendor</th>
                        <th>No. Vendor</th>
                        <th>Jumlah</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>PT. Jakarta Vendor 1</td>
                        <td>1001</td>
                        <td>Rp 1.000.000,-</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>PT. Bandung Vendor 2</td>
                        <td>1002</td>
                        <td>Rp 1.050.000,-</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>PT. Semarang Vendor 3</td>
                        <td>1003</td>
                        <td>Rp 5.000.000,-</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div> <!-- /controls --> 
            </div> <!-- /control-group -->
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
        </div>
        <!-- /span4 -->
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->