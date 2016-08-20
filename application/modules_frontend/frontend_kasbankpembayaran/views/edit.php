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
              <form action="<?php echo ($module_base_url . '/edit/' . $detail['pgln_id']); ?>" method="post">
                <input type="hidden" name="pgln_id" value="<?php echo $detail['pgln_id']; ?>" />
                <div class="form-fields">
                  
                  <div class="field">
                    <label for="pgln_nama">Nama</label>
                    <input id="pgln_nama" name="pgln_nama" placeholder="Nama" value="<?php echo $detail['pgln_nama']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pgln_bank_id">Paid From</label>
                    <select name="pgln_bank_id" id="pgln_bank_id" required /> 
                      <option value="">-- Pilih --</option>
                      <?php foreach($static_data_source['bank'] as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['pgln_bank_id'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pgln_tanggal">Tanggal</label>
                    <input class="date-picker" id="pgln_tanggal" name="pgln_tanggal" placeholder="Tanggal" value="<?php echo $detail['pgln_tanggal']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pgln_jumlah">Jumlah</label>
                    <input class="numberformat" id="pgln_jumlah" name="pgln_jumlah" placeholder="Jumlah" value="<?php echo $detail['pgln_jumlah']; ?>" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="terbilang">Terbilang</label>
                    <p class="alert" id="terbilang">-</p>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pgln_keterangan">Keterangan</label>
                    <textarea id="pgln_keterangan" name="pgln_keterangan" placeholder="Keterangan"><?php echo $detail['pgln_keterangan']; ?></textarea>
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

      var url = '<?php echo site_url("kas-bank-pembayaran/terbilang"); ?>/'+id;
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

    $('#pgln_jumlah').keyup(function() {
        delay(function(){
          var me = $('#pgln_jumlah');
          get_info(me.val());
        }, 500 );
    });

    delay(function(){
      var me = $('#pgln_jumlah');
      get_info(me.val());
    }, 500 );
  })
</script>