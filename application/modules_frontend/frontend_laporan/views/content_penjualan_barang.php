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
                        <th>No Penawaran</th>
                        <th>Keterangan Barang</th>
                        <th>Kuantitas</th>
                        <th>Satuan</th>
                        <th>Jumlah</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if(!empty($result)): ?>
                      <?php foreach($result as $key => $value): ?>
                      <tr>
                        <td><?php echo ($key + 1); ?></td>
                        <td><?php echo $value['ppnw_no_penawaran']; ?></td>
                        <td><?php echo $value['ppnwd_jenisbarang']; ?></td>
                        <td><?php echo $value['ppnwd_volume']; ?></td>
                        <td><?php echo $value['ppnwd_satuan']; ?></td>
                        <td><a target="_blank" href="<?php echo site_url('penjualan/invoice/pdf/'.$value['pjinv_id']); ?>"><?php echo add_numberformat($value['ppnwd_volume'] * $value['ppnwd_hargasatuan']); ?></a></td>
                      </tr>
                      <?php endforeach; ?>
                      <?php else: ?>
                      <tr>
                        <td colspan="6">Belum ada transaksi penjualan di periode ini</td>
                      </tr>
                      <?php endif; ?>
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