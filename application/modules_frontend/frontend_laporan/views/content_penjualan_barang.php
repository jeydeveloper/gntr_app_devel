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
              <h3>Laporan Penjualan Per Barang</h3>
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
                    <h2>Penjualan per Barang</h2>
                    <p>Periode <?php echo $static_data_source['daftar_bulan'][$periode_bulan_1]; ?> - <?php echo $static_data_source['daftar_bulan'][$periode_bulan_2]; ?> <?php echo $periode_tahun; ?></p>  
                  </div>
                  <table class="table table-hover" style="width:100%;">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Keterangan Barang</th>
                        <th>Kuantitas</th>
                        <th>Satuan</th>
                        <th>Jumlah</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Besi 10mm-12mm</td>
                        <td>100</td>
                        <td>Batang</td>
                        <td>Rp 1.000.000,-</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Aspal Curah</td>
                        <td>10</td>
                        <td>Kg</td>
                        <td>Rp 1.050.000,-</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Batu Merah Lokal</td>
                        <td>1000</td>
                        <td>Buah</td>
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