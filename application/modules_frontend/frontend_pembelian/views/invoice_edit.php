<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_invoice.php'); ?>
        </div>
        <!-- /span4 -->
        <!-- /span4 -->
         <?php echo form_open_multipart($module_base_url.'/invoice/edit/' . $detail['pbinv_id']);?>
                <input type="hidden" name="pbinv_id" value="<?php echo $detail['pbinv_id']; ?>" />
                <input type="hidden" name="pbinv_noinvoice" value="<?php echo $detail['pbinv_noinvoice']; ?>" />
            <div class="span5">
              <div class="widget">
                <div class="widget-header"> <i class="icon-th-list"></i>
                  <h3>Form Edit Invoice Penjualan</h3>
                </div>
                <!-- /widget-header -->
                <div class="widget-content">

                    <div class="form-fields">

                      <div class="field">
                        <label for="pbinv_pbsrtjalan_id">Referensi</label>
                        <select name="pbinv_pbsrtjalan_id" id="pbinv_pbsrtjalan_id" required />
                          <option value="">--Pilih--</option>
                          <?php foreach($option_referensi as $value): ?>
                            <option value="<?php echo $value['pbsrtjalan_id']; ?>" <?php echo ($detail['pbinv_pbsrtjalan_id'] == $value['pbsrtjalan_id'] ? 'selected' : ''); ?>><?php echo $value['pbsrtjalan_no']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbinv_noinvoice">Invoice No:</label>
                        <input type="text" id="pbinv_noinvoice" name="pbinv_noinvoice" value="<?php echo $detail['pbinv_noinvoice']; ?>" disabled/>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbinv_tanggal">Tanggal</label>
                        <input type="text"  class="date-picker" id="pbinv_tanggal" name="pbinv_tanggal" value="<?php echo $detail['pbinv_tanggal']; ?>" />
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbinv_totaltagihan">Total Tagihan:</label>
                        <p class="alert" id="pbinv_totaltagihan">-</p>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbinv_terbilang">Terbilang:</label>
                        <p class="alert" id="pbinv_terbilang">-</p>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbinv_description">Deskripsi:</label>
                        <textarea id="pbinv_description" name="pbinv_description"><?php echo $detail['pbinv_description']; ?></textarea>
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
      var url = '<?php echo site_url("pembelian/referensi_suratjalan"); ?>/'+id;
      $.getJSON(url, function(data){
        $('#pbinv_totaltagihan').text(data.pbptn_totaltagihan);
        $('#pbinv_terbilang').text(data.pbinv_terbilang);

        info_barang(data.pbptn_id);
      });
    };

    var clear_info = function() {
      $('#pbinv_totaltagihan').text('-');
      $('#pbinv_terbilang').text('-');

      $('#tblInfoBarang tbody').empty();
    };
    
    $('#pbinv_pbsrtjalan_id').change(function(){
      clear_info();
      var me = $(this);
      var nilai = me.val() || '';
      if(nilai == '') return;
      get_info(nilai);
    });

    get_info($('#pbinv_pbsrtjalan_id').val());
  })
</script>