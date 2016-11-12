<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_permintaan.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Form Add Permintaan</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <?php echo form_open_multipart('');?>
                <div class="form-fields">

                  <div class="field">
                    <label for="ppmt_ppnw_id">Referensi</label>
                    <select name="ppmt_ppnw_id" id="ppmt_ppnw_id" required />
                      <option value="">--Pilih--</option>
                      <?php foreach($option_referensi as $value): ?>
                        <option value="<?php echo $value['ppnw_id']; ?>"><?php echo $value['ppnw_no_penawaran']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="ppmt_noso">No Permintaan</label>
                    <input type="text" name="ppmt_noso" placeholder="No Permintaan"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="name">Tanggal:</label>
                    <input type="text" name="ppmt_tanggal" name="ppmt_tanggal" class="date-picker" placeholder="Tanggal" />
                  </div> <!-- /field -->


                <div class="field">
                    <label for="ppmt_clnt_id">Nama Pelanggan</label>
                    <select name="ppmt_clnt_id" id="ppmt_clnt_id" />
                      <option value="">-- Pilih --</option>
                      <?php foreach($option_client as $value): ?>
                        <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->


                  <div class="field">
                    <label for="ppmt_status">Status</label>
                    <select name="ppmt_status" id="ppmt_status" />
                      <option value="">-- Pilih --</option>
                      <?php foreach($static_data_source['status_penjualan'] as $value): ?>
                        <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field" style="display:none;">
                    <label for="email">Diskon:</label>
                    <p class="alert" id="ppmt_diskon">-</p>
                  </div> <!-- /field -->

                  <div class="field" style="display:none;">
                    <label for="email">Pajak:</label>
                    <p class="alert" id="ppmt_pajak">-</p>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="email">Biaya Kirim:</label>
                    <p class="alert" id="ppmt_biayakirim">-</p>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="email">Nilai Faktur:</label>
                    <p class="alert" id="ppmt_nilaifaktur">-</p>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="email">Uang Muka:</label>
                    <input class="numberformat" type="text" name="ppmt_uangmuka" placeholder="Uang Muka"/>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="email">Keterangan:</label>
                    <input type="text" name="ppmt_keterangan" placeholder="Keterangan"/>
                  </div> <!-- /field -->
                  <div class="field">
                    <label for="ppmt_uploadfile">Upload File:</label>
                    <input type="file" class="form-control-file" name="uploadfile" id="uploadfile">
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
      var url = '<?php echo site_url("penjualan/referensi_penawaran"); ?>/'+id;
      $.getJSON(url, function(data){
        $('#ppmt_diskon').text(data.ppmt_diskon);
        $('#ppmt_pajak').text(data.ppmt_pajak);
        $('#ppmt_biayakirim').text(data.ppmt_biayakirim);
        $('#ppmt_nilaifaktur').text(data.ppmt_nilaifaktur);
      });
    };

    var clear_info = function() {
      $('#ppmt_diskon').text('-');
      $('#ppmt_pajak').text('-');
      $('#ppmt_biayakirim').text('-');
      $('#ppmt_nilaifaktur').text('-');
    };
    
    $('#ppmt_ppnw_id').change(function(){
      clear_info();
      var me = $(this);
      var nilai = me.val() || '';
      if(nilai == '') return;
      get_info(nilai);
    });
  })
</script>

<script type="text/javascript">
  $(function(){
    $('.numberformat').number( true, 0, ',', '.' );
  })
</script>