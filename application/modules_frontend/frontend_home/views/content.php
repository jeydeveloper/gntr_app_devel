<style type="text/css">
    select{padding: 3px;margin: 0;}
    #wrap_form select, #wrap_form button{display: inline-block;width: initial;vertical-align: middle;}
    .bar-legend, .line-legend, .doughnut-legend {
        list-style: none;
    }
    .bar-legend span, .line-legend span, .doughnut-legend span {
        width: 30px;
        height: 10px;
        display: inline-block;
        margin-right: 5px;
    }
</style>
<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="row">
                <div class="span6">
                    <div class="widget">
                        <div class="widget-header">
                            <i class="icon-bar-chart"></i>
                            <h3>Grafik Pembelian & Penjualan</h3>
                            <div id="wrap_form" style="float:right; margin-right:5px;">
                                <form action="<?php echo site_url('home'); ?>">
                                    <select name="year">
                                        <option value="2016" <?php echo (2016 == $select_year ? 'selected' : ''); ?>>2016</option>
                                        <option value="2017" <?php echo (2017 == $select_year ? 'selected' : ''); ?>>2017</option>
                                        <option value="2018" <?php echo (2018 == $select_year ? 'selected' : ''); ?>>2018</option>
                                        <option value="2019" <?php echo (2019 == $select_year ? 'selected' : ''); ?>>2019</option>
                                        <option value="2020" <?php echo (2020 == $select_year ? 'selected' : ''); ?>>2020</option>
                                    </select>
                                    <button type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                        <!-- /widget-header -->
                        <div class="widget-content">
                            <canvas id="bar-chart" class="chart-holder" width="538" height="250">
                            </canvas>
                            <!-- /bar-chart -->
                            <div id="legendDiv"></div>
                        </div>
                        <!-- /widget-content -->
                    </div>
                    <!-- /widget -->
                    <div class="widget">
                        <div class="widget-header">
                            <i class="icon-bar-chart"></i>
                            <h3>Line Chart</h3>
                        </div>
                        <!-- /widget-header -->
                        <div class="widget-content">
                            <canvas id="area-chart" class="chart-holder" width="538" height="250">
                            </canvas>
                            <!-- /line-chart -->
                            <div id="legendDivLine"></div>
                        </div>
                        <!-- /widget-content -->
                    </div>
                    <!-- /widget -->
                </div>
                <!-- /span6 -->
                <div class="span6">
                    <div class="widget">
                        <div class="widget-header">
                            <i class="icon-bar-chart"></i>
                            <h3>Grafik Vendor / Client</h3>
                            <div id="wrap_form" style="float:right; margin-right:5px;">
                                <form action="<?php echo site_url('home'); ?>">
                                    <select name="vendor_client">
                                        <option value="vendor" <?php echo ('vendor' == $select_vendor_client ? 'selected' : ''); ?>>Vendor</option>
                                        <option value="client" <?php echo ('client' == $select_vendor_client ? 'selected' : ''); ?>>Client</option>
                                    </select>
                                    <button type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                        <!-- /widget-header -->
                        <div class="widget-content">
                            <canvas id="donut-chart" class="chart-holder" width="538" height="250">
                            </canvas>
                            <!-- /bar-chart -->
                            <div id="legendDivDoughnut"></div>
                        </div>
                        <!-- /widget-content -->
                    </div>
                    <!-- /widget -->
                    <div class="widget">
                        <div class="widget-header">
                            <i class="icon-bar-chart"></i>
                            <h3>Pie Chart</h3>
                        </div>
                        <!-- /widget-header -->
                        <div class="widget-content">
                            <canvas id="pie-chart" class="chart-holder" width="538" height="250">
                            </canvas>
                            <!-- /pie-chart -->
                        </div>
                        <!-- /widget-content -->
                    </div>
                    <!-- /widget -->
                </div>
                <!-- /span6 -->
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
<script type="text/javascript">
    var doughnutData = [
        <?php foreach ($data_vendor_client as $value): ?>
        {
            label: '<?php echo $value['label']; ?>',
            value: <?php echo $value['value']; ?>,
            color: "<?php echo $value['color']; ?>"
        },
        <?php endforeach; ?>
    ];

    var myDoughnut = new Chart(document.getElementById("donut-chart").getContext("2d")).Doughnut(doughnutData);
    document.getElementById("legendDivDoughnut").innerHTML = myDoughnut.generateLegend();

    var lineChartData = {
        labels: [<?php echo $data_bulan; ?>],
        datasets: [
            {
                label: 'Pembelian',
                fillColor: "rgba(220,220,220,0.5)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                data: [<?php echo $data_pembelian; ?>]
            },
            {
                label: 'Penjualan',
                fillColor: "rgba(151,187,205,0.5)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                data: [<?php echo $data_penjualan; ?>]
            }
        ]

    }

    var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);
    document.getElementById("legendDivLine").innerHTML = myLine.generateLegend();

    var barChartData = {
        labels: [<?php echo $data_bulan; ?>],
        datasets: [
            {
                label: 'Pembelian',
                fillColor: "rgba(220,220,220,0.5)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [<?php echo $data_pembelian; ?>]
            },
            {
                label: 'Penjualan',
                fillColor: "rgba(151,187,205,0.5)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [<?php echo $data_penjualan; ?>]
            }
        ]

    }

    var myLine = new Chart(document.getElementById("bar-chart").getContext("2d")).Bar(barChartData);
    document.getElementById("legendDiv").innerHTML = myLine.generateLegend();

    var pieData = [
        {
            value: 30,
            color: "#F38630"
        },
        {
            value: 50,
            color: "#E0E4CC"
        },
        {
            value: 100,
            color: "#69D2E7"
        }

    ];

    var myPie = new Chart(document.getElementById("pie-chart").getContext("2d")).Pie(pieData);
</script>