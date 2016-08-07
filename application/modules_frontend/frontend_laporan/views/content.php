<style type="text/css">
  .filter{display: none;}
</style>

<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3>Kategori Laporan</h3>
            </div>
            <!-- /widget-header -->
            <div class="control-group">
              <div class="controls">
                <div class="accordion" id="accordion2">
                  <div class="accordion-group">

                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                        Laporan Keuangan
                      </a>
                    </div>
                    <div id="collapseTwo" class="accordion-body collapse">
                      <div class="accordion-inner">
                        <div>
                          <i class="shortcut-icon icon-tag"></i>
                          <span class="shortcut-label"><a href="print_neraca.html" class="el-fil">Neraca</a><br/></span>
                          <div class="filter">
                            <select name="sl_periode_bulan_1" id="sl_periode_bulan_1" style="width:initial;padding:3px;">
                              <option value="">---Pilih Bulan----</option>
                              <?php foreach($static_data_source['daftar_bulan'] as $key => $value): ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                              <?php endforeach; ?>
                            </select> - 
                            <select name="sl_periode_bulan_2" id="sl_periode_bulan_2" style="width:initial;padding:3px;">
                              <option value="">---Pilih Bulan----</option>
                              <?php foreach($static_data_source['daftar_bulan'] as $key => $value): ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                              <?php endforeach; ?>
                            </select>
                            <?php $year_now = date('Y'); ?>
                            <select name="sl_periode_tahun" id="sl_periode_tahun" style="width:initial;padding:3px;">
                              <option value="">---Pilih Tahun----</option>
                              <?php for($i=$static_data_source['report_tahun']['before'];$i>0;$i--): ?>
                              <?php $res_year = $year_now - $i; ?>
                              <option value="<?php echo $res_year; ?>"><?php echo $res_year; ?></option>
                              <?php endfor; ?>

                              <option value="<?php echo $year_now; ?>"><?php echo $year_now; ?></option>

                              <?php for($i=1;$i<=$static_data_source['report_tahun']['after'];$i++): ?>
                              <?php $res_year = $year_now + $i; ?>
                              <option value="<?php echo $res_year; ?>"><?php echo $res_year; ?></option>
                              <?php endfor; ?>
                            </select>
                            <button id="btn_neraca" name="btn_neraca" style="vertical-align: top;padding: 3px;">Submit</button>
                          </div>

                          <i class="shortcut-icon icon-tag"></i>
                          <span class="shortcut-label"><a href="print_general_report.html" class="el-fil">General Report</a><br/></span>
                          <div class="filter">
                            <input placeholder="Tanggal Mulai" name="" id="" value="" /> - <input placeholder="Tanggal Akhir" name="" id="" value="" /> <input type="submit" value="Submit" />
                          </div>

                          <i class="shortcut-icon icon-tag"></i>
                          <span class="shortcut-label"><a href="#" class="el-fil">Grafik Perbandingan Akun</a><br/></span>
                          <div class="filter">
                            <input placeholder="Tanggal Mulai" name="" id="" value="" /> - <input placeholder="Tanggal Akhir" name="" id="" value="" /> <input type="submit" value="Submit" />
                          </div>

                          <i class="shortcut-icon icon-tag"></i>
                          <span class="shortcut-label"><a href="#" class="el-fil">Grafik Pendapatan dan Beban</a><br/></span>
                          <div class="filter">
                            <input placeholder="Tanggal Mulai" name="" id="" value="" /> - <input placeholder="Tanggal Akhir" name="" id="" value="" /> <input type="submit" value="Submit" />
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <br/>

                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                        Laporan Penjualan
                      </a>
                    </div>
                    <div id="collapseThree" class="accordion-body collapse">
                      <div class="accordion-inner">
                        <div>
                          <i class="shortcut-icon icon-tag"></i>
                          <span class="shortcut-label"><a href="#">Penjualan per Client</a></span><br/>

                          <i class="shortcut-icon icon-tag"></i>
                          <span class="shortcut-label"><a href="#">Grafik Penjualan Barang</a></span><br/>

                          <i class="shortcut-icon icon-tag"></i>
                          <span class="shortcut-label"><a href="#">Grafik Penjualan Client</a></span><br/>
                        </div>
                      </div>
                    </div>

                    <br/>
                    
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                        Laporan Pembelian
                      </a>
                    </div>
                    <div id="collapseFour" class="accordion-body collapse">
                      <div class="accordion-inner">
                        <div>
                          <i class="shortcut-icon icon-tag"></i>
                          <span class="shortcut-label"><a href="#">Pembelian per Vendor</a></span><br/>

                          <i class="shortcut-icon icon-tag"></i>
                          <span class="shortcut-label"><a href="#">Grafik Pembelian Barang</a></span><br/>

                          <i class="shortcut-icon icon-tag"></i>
                          <span class="shortcut-label"><a href="#">Grafik Pembelian Vendor</a></span><br/>
                        </div>
                      </div>
                    </div>

                    <br/>
                  </div>
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
    });

    $('#btn_neraca').click(function(e){
      e.preventDefault();
      var periode_bulan_1 = $('#sl_periode_bulan_1').val();
      var periode_bulan_2 = $('#sl_periode_bulan_2').val();
      var periode_tahun = $('#sl_periode_tahun').val();

      if(periode_bulan_1 == '' || periode_bulan_2 == '' || periode_tahun == '') {
        alert('Periode bulan atau tahun tidak boleh kosong');
        return false;
      }

      window.location.href = '<?php echo site_url("laporan/neraca"); ?>?periode_bulan_1='+periode_bulan_1+'&periode_bulan_2='+periode_bulan_2+'&periode_tahun='+periode_tahun;
    });
  })
</script>