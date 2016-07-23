<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_bukti_pembayaran.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Form Edit Bukti Pembayaran</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
               <form action="<?php echo ($module_base_url . '/bukti-pembayaran/edit/' . $detail['bp_id']); ?>" method="post">
                <input type="hidden" name="bp_id" value="<?php echo $detail['bp_id']; ?>" />
                <div class="form-fields">

                  <div class="field">
                    <label for="bp_pbttr_id">Referensi</label>
                    <select name="bp_pbttr_id" id="bp_pbttr_id" required />
                      <option value="">--Pilih--</option>
                      <?php foreach($option_referensi as $value): ?>
                        <option value="<?php echo $value['pbttr_id']; ?>" <?php echo ($detail['bp_pbttr_id'] == $value['pbttr_id'] ? 'selected' : ''); ?>><?php echo $value['pbttr_no']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="bp_no">Nomor:</label>
                    <input id="bp_no" name="bp_no" value="<?php echo $detail['bp_no']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="bp_tgltransaksi">Tanggal Transaksi:</label>
                    <input id="bp_tgltransaksi" class="date-picker" name="bp_tgltransaksi" value="<?php echo $detail['bp_tgltransaksi']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbkw_norek">No Rekening:</label>
                    <p class="alert" id="pbkw_norek">-</p>
                  </div> <!-- /field -->

                   <div class="field">
                    <label for="pbkw_an">Nama Rekening:</label>
                    <p class="alert" id="pbkw_an">-</p>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbinv_noinvoice">No Invoice:</label>
                    <p class="alert" id="pbinv_noinvoice">-</p>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbptn_totaltagihan">Total Tagihan:</label>
                    <p class="alert" id="pbptn_totaltagihan">-</p>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="terbilang">Terbilang:</label>
                    <p class="alert" id="terbilang">-</p>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="bp_jamtransaksi">Jam Transaksi:</label>
                    <input type="bp_jamtransaksi" name="bp_jamtransaksi" value="<?php echo $detail['bp_jamtransaksi']; ?>"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="bp_jenistransaksi">Jenis Transaksi:</label>
                    <input type="bp_jenistransaksi" name="bp_jenistransaksi" value="<?php echo $detail['bp_jenistransaksi']; ?>"/>
                  </div> <!-- /field -->

                </div> <!-- /form-fields -->

                <div class="form-actions">
                  <div class="pull-right">
                    <button type="reset" class="button btn btn-default btn-large">Reset</button>
                    <button class="button btn btn-primary btn-large">Submit</button>
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

<script type="text/javascript">
  $(function(){

    var get_info = function(id) {
      var url = '<?php echo site_url("pembelian/referensi_tandaterima"); ?>/'+id;
      $.getJSON(url, function(data){
        $('#pbkw_norek').text(data.pbkw_norek);
        $('#pbkw_an').text(data.pbkw_an);
        $('#pbinv_noinvoice').text(data.pbinv_noinvoice);
        $('#pbptn_totaltagihan').text(data.pbptn_totaltagihan);
        $('#terbilang').text(data.terbilang);
      });
    };

    var clear_info = function() {
      $('#pbkw_norek').text('-');
      $('#pbkw_an').text('-');
      $('#pbinv_noinvoice').text('-');
      $('#pbptn_totaltagihan').text('-');
      $('#terbilang').text('-');
    };
    
    $('#bp_pbttr_id').change(function(){
      clear_info();
      var me = $(this);
      var nilai = me.val() || '';
      if(nilai == '') return;
      get_info(nilai);
    });

    get_info($('#bp_pbttr_id').val());
  })
</script>