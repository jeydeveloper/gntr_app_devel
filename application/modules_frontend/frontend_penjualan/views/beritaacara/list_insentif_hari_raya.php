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
.wdclm{width:125px;}
.wdclm.no{width:50px;}
ol, ul {
  list-style: none;
}

#peserta_beritaacara table {
  width: 100%;
  border-collapse: collapse;
}

#peserta_beritaacara td, #peserta_beritaacara th {
  padding: 8px;
  border: 1px solid #dddddd;
}

#peserta_beritaacara tbody:nth-child(odd) {
  background: #f9f9f9;
}

#peserta_beritaacara tbody:hover td[rowspan], #peserta_beritaacara tr:hover td {
   background: #f2f2f2; 
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
              <h3>JADWAL KERJA INSENTIF HARI RAYA OPERATOR FORKLIFT  PT. ANDALAN FURNINDO</h3>
            </div>
            <div style="padding:10px;background:white;border: 1px solid #D5D5D5;">PERIODE  : Januari 2016</div>
            <!-- /widget-header -->
            <div class="widget-content" style="min-height:500px;" id="peserta_beritaacara">
              <?php echo $list_peserta; ?>
            </div>
            <div style="padding:10px;background:white;border: 1px solid #D5D5D5;">
              <p>NOTE : OVERTIME HARI BESAR</p>
              <ul>
                <li>
                  <div style="width:20px;height:20px;border:solid 1px;float:left;margin-right:10px;padding:2px;text-align: center;">P</div><p>Masuk Kerja Pagi</p>
                </li>
                <li>
                  <div style="width:20px;height:20px;border:solid 1px;float:left;margin-right:10px;padding:2px;text-align: center;">S</div><p>MASUK KERJA SIANG</p>
                </li>
                <li>
                  <div style="width:20px;height:20px;border:solid 1px;float:left;margin-right:10px;padding:2px;text-align: center;">M</div><p>MASUK KERJA MALAM</p>
                </li>
                <li>
                  <div style="width:20px;height:20px;border:solid 1px;float:left;margin-right:10px;padding:2px;text-align: center;color:white;background:red;">Off</div><p>LIBUR KERJA SHIFT</p>
                </li>
                <li>
                  <div style="width:20px;height:20px;border:solid 1px;float:left;margin-right:10px;padding:2px;text-align: center;color:white;background:blue;">&nbsp;</div><p>LIBUR HARI BESAR</p>
                </li>
              </ul>
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
    $("#fixTable").tableHeadFixer(); 
  });
</script>