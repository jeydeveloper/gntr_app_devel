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
              <h3>Grafik Pembelian per Barang</h3>
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
    var chart = new CanvasJS.Chart("chartContainer",
    {
      title: {
        text: "Grafik Pembelian per Barang"
      },
      animationEnabled: true,
      animationDuration: 2000,
      legend: {
        verticalAlign: "bottom",
        horizontalAlign: "center"
      },
      data: [
      {
        indexLabelFontSize: 20,
        indexLabelFontFamily: "Monospace",
        indexLabelFontColor: "darkgrey",
        indexLabelLineColor: "darkgrey",
        indexLabelPlacement: "outside",
        type: "pie",
        showInLegend: true,
        toolTipContent: "{y} - <strong>#percent%</strong>",
        dataPoints: [
          { y: 4181563, legendText: "Abu Batu", indexLabel: "Abu Batu" },
          { y: 2175498, legendText: "Alumunium", indexLabel: "Alumunium" },
          { y: 3125844, legendText: "Armatur", exploded: true, indexLabel: "Armatur" },
          { y: 1727161, legendText: "Jasa Manpower", indexLabel: "Jasa Manpower" },
          { y: 4303364, legendText: "Besi Stenleess", indexLabel: "Besi Stenleess" },
          { y: 1717786, legendText: "Batu Bata Merah Lokal", indexLabel: "Batu Bata Merah Lokal" }
        ]
      }
      ]
    });
    chart.render();
  }
</script>