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
              <h3>Buku Kas Keuangan</h3>
            </div>
            <div style="padding:10px;background:white;border: 1px solid #D5D5D5;">PERIODE  : Januari 2016</div>
            <!-- /widget-header -->
            <div class="widget-content" style="min-height:400px;">
              <table class="table table-striped table-bordered sticky-header" id="fixTable">
                <thead>
                  <tr>
                    <th><div class="wdclm">Tanggal</div></th>
                    <th><div class="wdclm">Uraian</div></th>
                    <th><div class="wdclm">Debit</div></th>
                    <th><div class="wdclm">Tanggal</div></th>
                    <th><div class="wdclm">Uraian</div></th>
                    <th><div class="wdclm">Kredit</div></th>
                    <th><div class="wdclm">Keterangan</div></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td>Total Pengeluaran Gaji Operator dan Lain2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Group I</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Group I</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Group II</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Group III</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Group IV</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Shobur</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Total</td>
                    <td>Rp. </td>
                    <td></td>
                    <td>Total</td>
                    <td>Rp. </td>
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