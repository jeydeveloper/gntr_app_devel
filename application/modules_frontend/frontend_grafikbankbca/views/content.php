<style type="text/css">
    select{padding: 3px;margin: 0;}
    #wrap_form select, #wrap_form button{display: inline-block;width: initial;vertical-align: middle;}
</style>

<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="widget">
                        <div class="widget-header">
                            <i class="icon-bar-chart"></i>
                            <h3>Grafik Buku <?php echo (!empty($static_data_source['bank'][$select_bank_id]) ? $static_data_source['bank'][$select_bank_id]['name'] : ''); ?></h3>
                            <div id="wrap_form" style="float:right; margin-right:5px;">
                                <form action="<?php echo site_url('grafik-bank-bca'); ?>">
                                <select name="bank_id">
                                    <?php foreach($static_data_source['bank'] as $key => $value): ?>
                                    <option value="<?php echo $key; ?>" <?php echo ($key == $select_bank_id ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
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
                            <canvas id="bar-chart" class="chart-holder" width="1138" height="350">
                            </canvas>
                            <!-- /bar-chart -->
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
                fillColor: "rgba(255,0,0,0.5)",
                strokeColor: "rgba(255,0,0,1)",
                data: [<?php echo $data_pengeluaran; ?>]
            },
            {
                fillColor: "rgba(0,0,255,0.5)",
                strokeColor: "rgba(0,0,255,1)",
                data: [<?php echo $data_penerimaan; ?>]
            }
        ]

    }
    var myLine = new Chart(document.getElementById("bar-chart").getContext("2d")).Bar(barChartData);
</script>