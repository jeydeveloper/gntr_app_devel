<style type="text/css">
#sticky {
    width: 100%;
    background-color: #333;
    color: #fff;
}
#sticky.stick {
    position: fixed;
    top: 0;
    z-index: 10000;
    border-radius: 0 0 0.5em 0.5em;
}
.wdclm{width:120px;}
.wdclm.no{width:50px;}
ol, ul {
  list-style: none;
}
</style>

<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_beritaacara.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget widget-table action-table">
            <div id="sticky-anchor"></div>
            <div id="sticky" class="widget-header"> <i class="icon-th-list"></i>
              <h3>Slip Gaji</h3>
            </div>
            <div style="padding:10px;background:white;border: 1px solid #D5D5D5;">
              <p>Periode  : 01 Desember '15 s/d '31 Desember '15</p>
              <p>Nama  : EKO WIBOWO</p>
              <p>Jabatan  : Operator Porklift</p>
            </div>
            <!-- /widget-header -->
            <div class="widget-content" style="min-height:400px;">
              <table class="table table-striped table-bordered sticky-header" id="fixTable">
                <thead>
                  <tr>
                    <th><div class="wdclm">No.</div></th>
                    <th><div class="wdclm">Keterangan</div></th>
                    <th><div class="wdclm">Volume</div></th>
                    <th><div class="wdclm">Satuan</div></th>
                    <th><div class="wdclm">Jumlah</div></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Gaji Pokok</td>
                    <td>2.700.000</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Uang Makan</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Uang Transport</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Potongan BPJS</td>
                    <td></td>
                    <td>100.000</td>
                    <td>100.000</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Potongan Gaji</td>
                    <td>2</td>
                    <td>100.000</td>
                    <td>200.000</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Potongan Kasbon</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Overtime</td>
                    <td>20</td>
                    <td>100.000</td>
                    <td>100.000</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>TOTAL GAJI YANG DITERIMA</td>
                    <td></td>
                    <td></td>
                    <td>2.600.000</td>
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

<script>
  $(document).ready(function() {
    $("#fixTable").tableHeadFixer({"head" : true, "left" : 3}); 
  });
</script>