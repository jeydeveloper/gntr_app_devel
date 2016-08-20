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
              <h3>Form Edit</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <form action="<?php echo ($module_base_url . '/edit/' . $detail['bpu_id']); ?>" method="post">
                <input type="hidden" name="bpu_id" value="<?php echo $detail['bpu_id']; ?>" />
                <div class="form-fields">
                  
                  <div class="field">
                    <label for="bpu_nama">Nama</label>
                    <input id="bpu_nama" name="bpu_nama" placeholder="Nama" value="<?php echo $detail['bpu_nama']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="bpu_harga">Harga</label>
                    <input class="numberformat" id="bpu_harga" name="bpu_harga" placeholder="Harga" value="<?php echo $detail['bpu_harga']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="bpu_terbilang">Terbilang</label>
                    <p class="alert" id="bpu_terbilang">-</p>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="bpu_proj_id">Project</label>
                    <select name="bpu_proj_id" id="bpu_proj_id" />
                      <option value="">-- Pilih --</option>
                      <?php foreach($option_project as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['bpu_proj_id'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="bpu_approved_by">Approved By</label>
                    <input id="bpu_approved_by" name="bpu_approved_by" placeholder="Approved By" value="<?php echo $detail['bpu_approved_by']; ?>" />
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
        $('#bpu_terbilang').text('-');
        return true;
      }

      var url = '<?php echo site_url("bpu/terbilang"); ?>/'+id;
      $.getJSON(url, function(data){
        $('#bpu_terbilang').text(data.terbilang);
      });
    };

    var delay = (function(){
      var timer = 0;
      return function(callback, ms){
        clearTimeout (timer);
        timer = setTimeout(callback, ms);
      };
    })();

    $('#bpu_harga').keyup(function() {
        delay(function(){
          var me = $('#bpu_harga');
          get_info(me.val());
        }, 500 );
    });

    delay(function(){
      var me = $('#bpu_harga');
      get_info(me.val());
    }, 500 );
  })
</script>