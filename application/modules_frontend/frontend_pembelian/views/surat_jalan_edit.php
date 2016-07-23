<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_surat_jalan.php'); ?>
        </div>
        <!-- /span4 -->
         <?php echo form_open_multipart($module_base_url.'/surat-jalan/edit/' . $detail['pbsrtjalan_id']);?>
                <input type="hidden" name="pbsrtjalan_id" value="<?php echo $detail['pbsrtjalan_id']; ?>" />
                <input type="hidden" name="pbsrtjalan_no" value="<?php echo $detail['pbsrtjalan_no']; ?>" />
            <div class="span5">
              <div class="widget">
                <div class="widget-header"> <i class="icon-th-list"></i>
                  <h3>Form Edit Surat Jalan</h3>
                </div>
                <!-- /widget-header -->
                <div class="widget-content">

                    <div class="form-fields">

                      <div class="field">
                        <label for="pbsrtjalan_pbkw_id">Referensi</label>
                        <select name="pbsrtjalan_pbkw_id" id="pbsrtjalan_pbkw_id" required />
                          <option value="">--Pilih--</option>
                          <?php foreach($option_referensi as $value): ?>
                            <option value="<?php echo $value['pbkw_id']; ?>" <?php echo ($detail['pbsrtjalan_pbkw_id'] == $value['pbkw_id'] ? 'selected' : ''); ?>><?php echo $value['pbkw_no']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_tanggal">Tanggal</label>
                        <input type="text"  class="date-picker" id="pbsrtjalan_tanggal" name="pbsrtjalan_tanggal" value="<?php echo $detail['pbsrtjalan_tanggal']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_no">No:</label>
                        <input type="text" id="pbsrtjalan_no" name="pbsrtjalan_no" value="<?php echo $detail['pbsrtjalan_no']; ?>" disabled/>
                      </div> <!-- /field -->

                       <div class="field">
                        <label for="pbsrtjalan_nokendaraan">No Kendaraan:</label>
                        <input type="text" id="pbsrtjalan_nokendaraan" name="pbsrtjalan_nokendaraan" value="<?php echo $detail['pbsrtjalan_nokendaraan']; ?>" />
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_matauang">Mata Uang</label>
                        <select name="pbsrtjalan_matauang" id="pbsrtjalan_matauang" />
                          <option value="">-- Pilih --</option>
                          <?php foreach($option_matauang as $value): ?>
                            <option value="<?php echo $value['value']; ?>" <?php echo ($detail['pbsrtjalan_matauang'] == $value['value'] ? 'selected' : ''); ?>><?php echo $value['name']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_vendor">Vendor:</label>
                        <p class="alert" id="pbsrtjalan_vendor">-</p>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_tanggalditerima">Tanggal Penerimaan</label>
                        <input type="text"  class="date-picker" id="pbsrtjalan_tanggalditerima" name="pbsrtjalan_tanggalditerima" value="<?php echo $detail['pbsrtjalan_tanggalditerima']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_namapenerima">Nama Penerima:</label>
                        <input type="text" id="pbsrtjalan_namapenerima" name="pbsrtjalan_namapenerima" value="<?php echo $detail['pbsrtjalan_namapenerima']; ?>"/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_totaltagihan">Total Tagihan:</label>
                        <p class="alert" id="pbsrtjalan_totaltagihan">-</p>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_terbilang">Terbilang:</label>
                        <p class="alert" id="pbsrtjalan_terbilang">-</p>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="uploadfile">Upload File:</label>
                          <img src="<?php echo site_url('/'); ?>assets/images/<?php echo $detail['uploadfile']; ?>" width="100px">

                        <input type="file" class="form-control-file" name="uploadfile" id="uploadfile">
                      </div> <!-- /field -->

                      <div class="form-actions">
                        <div class="pull-right">
                          <button type="reset" class="button btn btn-default btn-large">Reset</button>
                          <button class="button btn btn-primary btn-large">Submit</button>
                        </div>
                      </div>

                    </div> <!-- /form-fields -->
                </div>
                <!-- /widget-content -->
              </div>
              <!-- /widget -->
            </div>
            <div class="span5">
              <div class="widget">
                <div class="widget-header"> <i class="icon-th-list"></i>
                  <h3>Form</h3>
                </div>
                <!-- /widget-header -->
                <div class="widget-content">
                    <div class="form-fields">
                      <table style="width:100%;" border="1" cellpadding="5" id="tblInfoBarang">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Volume</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td colspan="3">Data is empty</td>
                          </tr>
                        </tbody>
                      </table>
                    </div> <!-- /form-fields -->
                </div>
                <!-- /widget-content -->
              </div>
              <!-- /widget -->
            </div>
        </form>
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
      var url = '<?php echo site_url("pembelian/referensi_kwitansi"); ?>/'+id;
      $.getJSON(url, function(data){
        $('#pbsrtjalan_vendor').text(data.vndr_nama);
        $('#pbsrtjalan_totaltagihan').text(data.pbptn_totaltagihan);
        $('#pbsrtjalan_terbilang').text(data.pbsrtjalan_terbilang);
      });
    };
    
    $('#pbsrtjalan_pbkw_id').change(function(){
      var me = $(this);
      get_info(me.val());
    });

    get_info($('#pbsrtjalan_pbkw_id').val());
  })
</script>

<script type="text/javascript">
  $(function(){
    var info_barang = function(id) {
      var url = '<?php echo site_url("pembelian/info_barang"); ?>/'+id;
      $.getJSON(url, function(data){
        var txtHtml = '';
        var cnt = 1;
        $.each(data, function(idx, val){
          console.log(val);
          txtHtml += '<tr>';
          txtHtml += '<td>'+ cnt++ +'</td>';
          txtHtml += '<td>'+val.brjs_nama+'</td>';
          txtHtml += '<td>'+val.pbptnd_jumlah+'</td>';
          txtHtml += '<tr>';
        });
        $('#tblInfoBarang tbody').empty().append(txtHtml);
      });
    };

    var get_info = function(id) {
      var url = '<?php echo site_url("pembelian/referensi_kwitansi"); ?>/'+id;
      $.getJSON(url, function(data){
        $('#pbsrtjalan_vendor').text(data.vndr_nama);
        $('#pbsrtjalan_totaltagihan').text(data.pbptn_totaltagihan);
        $('#pbsrtjalan_terbilang').text(data.pbsrtjalan_terbilang);

        info_barang(data.pbptn_id);
      });
    };

    var clear_info = function() {
      $('#pbsrtjalan_vendor').text('-');
      $('#pbsrtjalan_totaltagihan').text('-');
      $('#pbsrtjalan_terbilang').text('-');

      $('#tblInfoBarang tbody').empty();
    };
    
    $('#pbsrtjalan_pbkw_id').change(function(){
      clear_info();
      var me = $(this);
      var nilai = me.val() || '';
      if(nilai == '') return;
      get_info(nilai);
    });

    get_info($('#pbsrtjalan_pbkw_id').val());
  })
</script>