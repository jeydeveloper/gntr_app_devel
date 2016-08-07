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
              <h3>REKAPITULASI POTONGAN BPJS KETENAGA KERJAAN</h3>
            </div>
            <div style="padding:10px;background:white;border: 1px solid #D5D5D5;">PERIODE  : Januari 2016</div>
            <!-- /widget-header -->
            <div class="widget-content" style="height:500px;">
              <table class="table table-striped table-bordered sticky-header" id="fixTable">
                <thead>
                  <tr>
                    <th><div class="wdclm">Group</div></th>
                    <th><div class="wdclm no">No.</div></th>
                    <th><div class="wdclm">Nama</div></th>
                    <th><div class="wdclm">BPJS Ketenaga Kerjaan</div></th>
                    <th><div class="wdclm">BPJS Kesehatan</div></th>
                    <th><div class="wdclm">Perusahaan</div></th>
                    <th><div class="wdclm">Keterangan</div></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Group 1</td>
                    <td>01</td>
                    <td>FEBRI. DW</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>02</td>
                    <td>MULYADI</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>03</td>
                    <td>MUKTAR</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>04</td>
                    <td>MURSALI</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Group 2</td>
                    <td>01</td>
                    <td>FEBRI. DW</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>02</td>
                    <td>MULYADI</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>03</td>
                    <td>MUKTAR</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>04</td>
                    <td>MURSALI</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Group 3</td>
                    <td>01</td>
                    <td>FEBRI. DW</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>02</td>
                    <td>MULYADI</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>03</td>
                    <td>MUKTAR</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>04</td>
                    <td>MURSALI</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Group 4</td>
                    <td>01</td>
                    <td>FEBRI. DW</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>02</td>
                    <td>MULYADI</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>03</td>
                    <td>MUKTAR</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>04</td>
                    <td>MURSALI</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Total</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
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