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
                            <input placeholder="Tanggal Mulai" name="" id="" value="" /> - <input placeholder="Tanggal Akhir" name="" id="" value="" /> <input type="submit" value="Submit" />
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
    })
  })
</script>