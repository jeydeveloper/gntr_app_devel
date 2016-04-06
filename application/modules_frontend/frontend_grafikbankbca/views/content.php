<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-header">
                            <i class="icon-bar-chart"></i>
                            <h3>Grafik Buku Bank BCA</h3>
                            <div style="float:right; margin-top:5px; margin-right:5px;">
                                <select name="" id="" onchange="if( this.options[this.selectedIndex].value != '' ) location.href=this.options[this.selectedIndex].value;">
                                  <option value="http://localhost:8080/gntr_app_html/grafik_bank_bca.html">Bank BCA</option>
                                  <option value="http://localhost:8080/gntr_app_html/grafik_bank_mandiri.html">Bank Mandiri</option>
                                  <option value="http://localhost:8080/gntr_app_html/grafik_bank_bni.html">Bank BNI</option>
                                </select>
                            </div>
                        </div>
                        <!-- /widget-header -->
                        <div class="widget-content">
                            <canvas id="bar-chart" class="chart-holder" width="1138" height="350">
                            </canvas>
                            <!-- /bar-chart -->
                        </div>
                        <div style="text-align:right; margin-top:10px;">
                            <a href="buku_bank_bca.html" class="button btn btn-primary btn-large">Buku Rekening BCA</a>
                        </div>
                        <!-- /widget-content -->
                    </div>
                    <!-- /widget -->
                </div>
                <!-- /span12 -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /main-inner -->
</div>
<!-- /main -->

<script type="text/javascript" src="<?php echo $assets; ?>/js/excanvas.min.js"></script>
<script type="text/javascript" src="<?php echo $assets; ?>/js/chart.min.js"></script>
<script>
    var barChartData = {
        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "Octobre", "November", "December"],
        datasets: [
            {
                fillColor: "rgba(220,220,220,0.5)",
                strokeColor: "rgba(220,220,220,1)",
                data: [65, 59, 90, 81, 56, 55, 40, 100, 100, 80, 90, 40]
            },
            {
                fillColor: "rgba(151,187,205,0.5)",
                strokeColor: "rgba(151,187,205,1)",
                data: [28, 48, 40, 19, 96, 27, 100, 50, 50, 40, 70, 50]
            }
        ]

    }
    var myLine = new Chart(document.getElementById("bar-chart").getContext("2d")).Bar(barChartData);
</script>