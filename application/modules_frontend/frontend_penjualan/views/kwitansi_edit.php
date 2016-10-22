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
              <h3>Form Edit Kwitansi</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <?php echo form_open_multipart($module_base_url_kwitansi . '/edit/' . $detail['pjkw_id']);?>
                <input type="hidden" name="pjkw_id" value="<?php echo $detail['pjkw_id']; ?>" />

                <div class="form-fields">

                  <div class="field">
                    <label for="pjkw_pjinv_id">Referensi</label>
                    <select name="pjkw_pjinv_id" id="pjkw_pjinv_id" required />
                      <option value="">--Pilih--</option>
                      <?php foreach($option_referensi as $value): ?>
                        <option value="<?php echo $value['pjinv_id']; ?>" <?php echo ($detail['pjkw_pjinv_id'] == $value['pjinv_id'] ? 'selected' : ''); ?>><?php echo $value['pjinv_noinvoice']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pjkw_no">No Kwitansi</label>
                    <input id="pjkw_no" name="pjkw_no" value="<?php echo $detail['pjkw_no']; ?>" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="clnt_nama">Terima Dari: </label>
                    <p class="alert" id="clnt_nama">-</p>
                  </div> <!-- /field -->

                   <div class="field">
                    <label for="clnt_alamat">Alamat: </label>
                    <p class="alert" id="clnt_alamat">-</p>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="clnt_telpon">No Telp.: </label>
                    <p class="alert" id="clnt_telpon">-</p>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="ppnw_nilai_faktur">Total:</label>
                    <p class="alert" id="ppnw_nilai_faktur">-</p>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pjkw_bank">Transfer ke Bank:</label>
                    <select name="pjkw_bank" id="pjkw_bank" required /> 
                      <option value="">-- Pilih --</option>
                      <?php foreach($static_data_source['bank'] as $value): ?>
                        <option value="<?php echo $value['value']; ?>" <?php echo ($detail['pjkw_bank'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="email">Keterangan Print Out:</label>
                    <textarea name="pjkw_keterangan_print_out" class="editor"><?php echo $detail['pjkw_keterangan_print_out']; ?></textarea>
                  </div> <!-- /field -->

                  <div class="field" style="display: none;">
                    <label for="uploadfile">Upload File:</label>
                      <img src="<?php echo site_url('/'); ?>assets/images/<?php echo $detail['uploadfile']; ?>" width="100px">

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
      var url = '<?php echo site_url("penjualan/referensi_invoice"); ?>/'+id;
      $.getJSON(url, function(data){
        $('#clnt_nama').text(data.clnt_nama);
        $('#clnt_alamat').text(data.clnt_alamat);
        $('#clnt_telpon').text(data.clnt_telpon);
        $('#ppnw_nilai_faktur').text(data.ppnw_nilai_faktur);
      });
    };

    var clear_info = function() {
      $('#clnt_nama').text('-');
      $('#clnt_alamat').text('-');
      $('#clnt_telpon').text('-');
      $('#ppnw_nilai_faktur').text('-');
    };
    
    $('#pjkw_pjinv_id').change(function(){
      clear_info();
      var me = $(this);
      var nilai = me.val() || '';
      if(nilai == '') return;
      get_info(nilai);
    });

    get_info($('#pjkw_pjinv_id').val());

    $( 'textarea.editor' ).ckeditor();
  })
</script>

<script type="text/javascript">
  $(function(){
    $('.numberformat').number( true, 0, ',', '.' );
  })
</script>