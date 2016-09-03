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
              <h3>Laporan Neraca Keuangan</h3>
            </div>
            <!-- /widget-header -->
            <div class="control-group">
              <div class="controls">
                <div style="border: 1px solid #e5e5e5;padding:5px 10px;background: #e5e5e5;">
                  <p style="margin:0;">Periode : <?php echo $static_data_source['daftar_bulan'][$periode_bulan_1]; ?> - <?php echo $static_data_source['daftar_bulan'][$periode_bulan_2]; ?> <?php echo $periode_tahun; ?></p>
                </div>
                <div style="border: 1px solid #e5e5e5;padding:5px 10px;">
                  <table style="width:100%;">
                    <tr class="no-border">
                      <td colspan="3" style="text-align:center;">
                        <div class="hdr">
                          <p>NERACA</p>
                          <p>PT. PUTRA BAHARI MANDIRI</p>
                          <p class="sub">Periode <?php echo $static_data_source['daftar_bulan'][$periode_bulan_1]; ?> - <?php echo $static_data_source['daftar_bulan'][$periode_bulan_2]; ?> <?php echo $periode_tahun; ?></p>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="3" style="text-align:left;">
                        <div style="margin-top: 50px;">
                          <p class="bld">AKTIVA</p>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="3" style="text-align:left;">
                        <div>
                          <p class="bld">Aktiva Lancar</p>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align:left;">- Kas & Bank</td>
                      <td style="text-align:right;">Rp. 100.000</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td style="text-align:left;">- Piutang</td>
                      <td style="text-align:right;">Rp. 100.000</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td style="text-align:left;">- Persediaan Barang</td>
                      <td style="text-align:right;">Rp. 100.000</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="2" style="text-align:left;">
                        <div>
                          <p class="bld">Jumlah</p>
                        </div>
                      </td>
                      <td style="text-align:right;">Rp. 1.000.000</td>
                    </tr>
                    <tr>
                      <td colspan="3" style="text-align:left;">
                        <div>
                          <p class="bld">Aktiva Tetap</p>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align:left;">- Inventaris Kendaraan</td>
                      <td style="text-align:right;">Rp. 100.000</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td style="text-align:left;">- Inventaris Kantor</td>
                      <td style="text-align:right;">Rp. 100.000</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td style="text-align:left;">- Inventaris Perlengkapan</td>
                      <td style="text-align:right;">Rp. 100.000</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td style="text-align:left;">- Inventaris Penyusutan</td>
                      <td style="text-align:right;">Rp. 100.000</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="2" style="text-align:left;">
                        <div>
                          <p class="bld">Jumlah</p>
                        </div>
                      </td>
                      <td style="text-align:right;">Rp. 1.000.000</td>
                    </tr>
                    <tr>
                      <td colspan="2" style="text-align:left;">
                        <div>
                          <p class="bld">Jumlah Total Aktiva</p>
                        </div>
                      </td>
                      <td style="text-align:right;">Rp. 1.000.000</td>
                    </tr>
                    <tr class="no-border">
                      <td colspan="3" style="text-align:left;">
                        <div style="margin-top: 50px;">
                          <p>Bekasi, 27 April 2016</p>
                          <p>PT. PUTRA BAHARI MANDIRI</p>
                        </div>
                      </td>
                    </tr>
                    <tr class="no-border">
                      <td colspan="3" style="text-align:left;">
                        <div style="margin-top: 20px;">
                          <p>Andri Lestari S. Kom.</p>
                          <p>46,936,304,8-435,000</p>
                        </div>
                      </td>
                    </tr>
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

<script type="text/javascript">
  $(document).ready(function(){
    $('.el-fil').click(function(e){
      e.preventDefault();
      var me = $(this);
      var nxt = me.parent().next();
      if(nxt.is(':visible')) {
        nxt.hide();
      } else {
        $('.filter').hide();
        nxt.show()
      }
    })
  })
</script>