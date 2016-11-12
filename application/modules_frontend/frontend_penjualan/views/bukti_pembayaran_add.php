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
              <h3>Bukti Pembayaran Penjualan</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <?php echo form_open_multipart('');?>
                
                <div class="form-fields">

                  <div class="field">
                    <label for="pbktp_pttr_id">Referensi</label>
                    <select name="pbktp_pttr_id" id="pbktp_pttr_id" required />
                      <option value="">--Pilih--</option>
                      <?php foreach($option_referensi as $value): ?>
                        <option value="<?php echo $value['pttr_id']; ?>"><?php echo $value['pttr_no']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="pbktp_tgltransaksi">Tgl Transaksi:</label>
                    <input id="pbktp_tgltransaksi" class="date-picker" name="pbktp_tgltransaksi" value="" placeholder="Tgl Transaksi" />
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="pbktp_notransaksi">No. Transaksi</label>  
                    <input type="text"  id="pbktp_notransaksi" name="pbktp_notransaksi" value="" placeholder="No Transaksi" />
                  </div> <!-- /field -->
                  
                  
                  <div class="field">
                    <label for="phone">Tranfer ke Rekening:</label>
                    <select name="pbktp_norekening" id="pbktp_norekening" required /> 
                      <option value="">-- Pilih --</option>
                      <?php foreach($static_data_source['bank'] as $value): ?>
                        <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="pbktp_namakonsultan">Nama Konsultan:</label>
                    <input type="text" id="pbktp_namakonsultan" name="pbktp_namakonsultan" value="" placeholder="Nama Konsultan"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbktp_noinvoice">No. Invoice</label>
                    <p class="alert" id="pbktp_noinvoice">-</p>
                  </div> <!-- /field -->
                  
                  <div class="field">
                    <label for="pbktp_totaltagihan">Total Tagihan</label>
                    <p class="alert" id="pbktp_totaltagihan">-</p>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbktp_terbilang">Terbilang</label>
                    <p class="alert" id="pbktp_terbilang">-</p>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbktp_jenistransaksi">Jenis Transaksi</label>
                    <textarea id="pbktp_jenistransaksi" name="pbktp_jenistransaksi" value="" placeholder="Jenis Transaksi"></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbktp_jamtransaksi">Jam Transaksi:</label>
                    <input  type="text" id="pbktp_jamtransaksi" name="pbktp_jamtransaksi" type="text" class="time ui-timepicker-input" autocomplete="off">
                
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbktp_channel">Channel:</label>
                    <textarea id="pbktp_channel" name="pbktp_channel" value="" placeholder="Channel"></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbktp_userid">User ID:</label>
                    <textarea id="pbktp_userid" name="pbktp_userid" value="" placeholder="User ID"></textarea>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbktp_uploadfile">Upload File:</label>
                    <input type="file" class="form-control-file" name="uploadfile" id="uploadfile">
                  </div> <!-- /field -->

                  <div class="form-actions">
                  <div class="pull-right">
                    <button type="reset" class="button btn btn-default btn-large">Reset</button>
                    <button type="submit" class="button btn btn-primary btn-large">Submit</button>
                  </div>
                </div> <!-- .actions -->
                  
                </div> <!-- /form-fields -->
                
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
      var url = '<?php echo site_url("penjualan/referensi_tandaterima"); ?>/'+id;
      $.getJSON(url, function(data){
        $('#pbktp_noinvoice').text(data.pjinv_noinvoice);
        $('#pbktp_totaltagihan').text(data.pbktp_totaltagihan);
        $('#pbktp_terbilang').text(data.terbilang);
      });
    };
    
    $('#pbktp_pttr_id').change(function(){
      var me = $(this);
      if(me.val() == '') {
        $('#pbktp_noinvoice').text('-');
        $('#pbktp_totaltagihan').text('-');
        $('#pbktp_terbilang').text('-');
        return;
      }
      get_info(me.val());
    });
  })
</script>