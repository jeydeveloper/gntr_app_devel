<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Form Add</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <form action="" method="post">
                
                <div class="form-fields">
                  
                  <div class="field">
                    <label for="sham_nama">Nama Pemilik</label>
                    <input id="sham_nama" name="sham_nama" placeholder="Nama Pemilik" required />
                  </div> <!-- /field -->
                                
                </div> <!-- /form-fields -->

                <div class="form-fields">
                  
                  <div class="field">
                    <label for="sham_alamat">Alamat</label>
                    <textarea id="sham_alamat" name="sham_alamat" placeholder="Alamat" required></textarea>
                  </div> <!-- /field -->
                                
                </div> <!-- /form-fields -->

                <div class="form-fields">
                  
                  <div class="field">
                    <label for="sham_persentase">Jumlah Saham</label>
                    <input class="numberformat" id="sham_persentase" name="sham_persentase" placeholder="Jumlah Saham" required />
                  </div> <!-- /field -->
                                
                </div> <!-- /form-fields -->

                <div class="form-fields">
                  
                  <div class="field">
                    <label for="terbilang">Terbilang</label>
                    <p class="alert" id="terbilang">-</p>
                  </div> <!-- /field -->
                                
                </div> <!-- /form-fields -->
                
                <div class="form-actions">
                  <div class="pull-right">
                    <button type="reset" class="button btn btn-default btn-large">Reset</button>
                    <button type="submit" class="button btn btn-primary btn-large">Submit</button>
                  </div>
                </div> <!-- .actions -->
                
              </form>
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

<script type="text/javascript">
  $(function(){
    $('.numberformat').number( true, 0, ',', '.' );
  })
</script>

<script type="text/javascript">
  $(function(){
    var get_info = function(id) {
      if(id == '') {
        $('#terbilang').text('-');
        return true;
      }

      var url = '<?php echo site_url("lain-lain/terbilang"); ?>/'+id;
      $.getJSON(url, function(data){
        $('#terbilang').text(data.terbilang);
      });
    };

    var delay = (function(){
      var timer = 0;
      return function(callback, ms){
        clearTimeout (timer);
        timer = setTimeout(callback, ms);
      };
    })();

    $('#sham_persentase').keyup(function() {
        delay(function(){
          var me = $('#sham_persentase');
          get_info(me.val());
        }, 500 );
    });
  })
</script>