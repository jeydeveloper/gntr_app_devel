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
              <h3>Grafik Pembelian Per Vendor</h3>
            </div>
            <!-- /widget-header -->
            <div class="control-group">
              <div class="controls">
                <div style="border: 1px solid #e5e5e5;padding:5px 10px;background: #e5e5e5;">
                  <p style="margin:0;">Periode : <?php echo $static_data_source['daftar_bulan'][$periode_bulan_1]; ?> - <?php echo $static_data_source['daftar_bulan'][$periode_bulan_2]; ?> <?php echo $periode_tahun; ?></p>
                </div>
                <div style="border: 1px solid #e5e5e5;padding:5px 10px;">
                  <?php if(!empty($result['label'])): ?>
                  <div id="chartContainer" style="height: 400px; width: 100%;"></div>
                  <?php else: ?>
                  <div style="width: 100%;">
                    <p>Belum ada transaksi pembelian di periode ini</p>
                  </div>
                  <?php endif; ?>
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

<?php if(!empty($result['label'])): ?>
<script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer", {
      theme: "theme1",
      culture: "es",
      axisX: {
        valueFormatString: "DDDD"
      },
      // change to "theme1"
      title: {
        text: "Grafik Pembelian Per Vendor"
      },
      data: [
      {
        type: "column",
        dataPoints: [
          <?php echo join(',', $result['total']); ?>
        ]
      }
      ]
    });

    chart.render();
  }
</script>
<?php endif; ?>