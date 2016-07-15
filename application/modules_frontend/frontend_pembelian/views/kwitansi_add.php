<style type="text/css">
.form-fields input[type="radio"] {
    width: auto;
    height: auto;
    padding: 0;
    margin: 3px 0;
    line-height: normal;
    cursor: pointer;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    border: 0 \9;
}

.rd-inline label{
  padding-left: 20px;display:inline-block;margin-right:10px;
}

.rd-inline label input[type="radio"] {
  position: absolute;margin-left: -20px;
}
</style>

<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_kwitansi.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Form Add Kwitansi</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <?php echo form_open_multipart('');?>

                <div class="form-fields">

                  <div class="field">
                    <label for="pbkw_pbptn_id">Referensi</label>
                    <select name="pbkw_pbptn_id" id="pbkw_pbptn_id" required />
                      <option value="">--Pilih--</option>
                      <?php foreach($option_referensi as $value): ?>
                        <option value="<?php echo $value['pbptn_id']; ?>"><?php echo $value['pbptn_no']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbkw_no">No Kwitansi</label>
                    <input id="pbkw_no" name="pbkw_no" placeholder="No Kwitansi" required />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbkw_dari">Terima Dari: </label>
                    <p class="alert" id="pbkw_dari">-</p>
                  </div> <!-- /field -->

                   <div class="field">
                    <label for="pbkw_alamat">Pembayaran: </label>
                    <div class="rd-inline">
                      <label><input type="radio" name="pbkw_tipe_pembayaran" id="pbkw_tipe_pembayaran" value="1" checked> Cash</label>
                      <label><input type="radio" name="pbkw_tipe_pembayaran" id="pbkw_tipe_pembayaran" value="2"> Transfer</label>
                    </div>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbkw_notlpn">No Telp.: </label>
                    <p class="alert" id="pbkw_notlpn">-</p>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbkw_total">Total:</label>
                    <p class="alert" id="pbkw_total">-</p>
                  </div> <!-- /field -->
                  <div class="field">
                    <label for="pbkw_norek">No Rekening: </label>
                    <input id="pbkw_norek" name="pbkw_norek" placeholder="Nama Bank" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbkw_an">Rek. Atas Nama: </label>
                    <input id="pbkw_an" name="pbkw_an" placeholder="Atas nama" />
                  </div> <!-- /field -->


                  <div class="field">
                    <label for="pbkw_bank">Nama Bank</label>
                    <input id="pbkw_bank" name="pbkw_bank" placeholder="Nama Bank" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbkw_transfer_from_bank">Transfer Dari Bank ?</label>
                    <select name="pbkw_transfer_from_bank" id="pbkw_transfer_from_bank" required /> 
                      <option value="">-- Pilih --</option>
                      <?php foreach($static_data_source['bank'] as $value): ?>
                        <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="uploadfile">Upload File:</label>
                    <input type="file" class="form-control-file" name="uploadfile" id="uploadfile">
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

<script type="text/javascript">
  $(function(){
    var get_info = function(id) {
      var url = '<?php echo site_url("pembelian/referensi"); ?>/'+id;
      $.getJSON(url, function(data){
        $('#pbkw_dari').text(data.vndr_nama);
        $('#pbkw_notlpn').text(data.vndr_telpon);
        $('#pbkw_total').text(data.pbptn_totaltagihan);
      });
    };
    
    $('#pbkw_pbptn_id').change(function(){
      var me = $(this);
      get_info(me.val());
    });
  })
</script>