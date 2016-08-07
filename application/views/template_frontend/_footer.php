    <div class="footer">
        <div class="footer-inner">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        &copy; <a href="#"><?php echo date('Y'); ?> Putra Bahari Mandiri</a>.
                    </div>
                    <!-- /span12 -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /footer-inner -->
    </div>
    <!-- /footer -->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="<?php echo $assets; ?>/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo $assets; ?>/js/base.js"></script>
    <script type="text/javascript" src="<?php echo $assets; ?>/js/jquery.timepicker.js"></script>
    <script type="text/javascript" src="<?php echo $assets; ?>/js/jquery.number.min.js"></script>
    <script type="text/javascript" src="<?php echo $assets; ?>/js/tableHeadFixer.js"></script>
    <script type="text/javascript">
        $(function(){
            $(".date-picker").datepicker({
                //yearRange: "-100:+0",
                dateFormat: 'yy-mm-dd',
                yearRange: '1950:2020',
                changeMonth: true,
                changeYear: true
            });
        });
    </script>
    <script type="text/javascript">
        $(function(){
            $('.time').timepicker({ 'scrollDefault': 'now' });
        });
    </script
</body>
</html>