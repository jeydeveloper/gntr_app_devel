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
              <h3>Grafik Penjualan Client</h3>
            </div>
            <!-- /widget-header -->
            <div class="control-group">
              <div class="controls">
                <div style="border: 1px solid #e5e5e5;padding:5px 10px;background: #e5e5e5;">
                  <p style="margin:0;">Periode : <?php echo $static_data_source['daftar_bulan'][$periode_bulan_1]; ?> - <?php echo $static_data_source['daftar_bulan'][$periode_bulan_2]; ?> <?php echo $periode_tahun; ?></p>
                </div>
                <div style="border: 1px solid #e5e5e5;padding:5px 10px;">
                  <div id="chartContainer" style="height: 400px; width: 100%;"></div>
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
  window.onload = function () {
    CanvasJS.addCultureInfo("es", {
      decimalSeparator: ",",// Observe ToolTip Number Format
      digitGroupSeparator: ".", // Observe axisY labels
      days: ["PT. Jakarta Client 1", "PT. Bandung Client 2", "PT. Medan Client 3", "PT. Semarang Client 4", "PT. Surabaya Client 6", "PT. Makassar Client 7", "PT. Pontianak Client 8"]

    });

    var chart = new CanvasJS.Chart("chartContainer", {
      theme: "theme1",
      culture: "es",
      axisX: {
        valueFormatString: "DDDD"
      },
      // change to "theme1"
      title: {
        text: "Grafik Penjualan Per Client"
      },
      data: [
      {
        type: "column",
        dataPoints: [
        //Note: month input is 0-11 in JavaScript - 05 is June
        { x: new Date(2013, 05, 3), y: 3275.6 },
        { x: new Date(2013, 05, 4), y: 5250.8 },
        { x: new Date(2013, 05, 5), y: 6255.3 },
        { x: new Date(2013, 05, 6), y: 8275.2 },
        { x: new Date(2013, 05, 7), y: 6378.1 },
        { x: new Date(2013, 05, 8), y: 5258.4 },
        { x: new Date(2013, 05, 9), y: 3514.8 }
        ]
      }
      ]
    });

    chart.render();
  }
</script>