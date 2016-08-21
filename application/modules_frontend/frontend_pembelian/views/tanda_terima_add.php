<style type="text/css">
.form-fields input[type="radio"], .form-fields input[type="checkbox"] {
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

.rd-inline{
  margin-bottom: 20px;
}

.rd-inline label{
  padding-left: 20px;margin-right:10px;
}

.rd-inline label input[type="radio"], .rd-inline label input[type="checkbox"] {
  position: absolute;margin-left: -20px;
}
</style>

<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_tanda_terima.php'); ?>
        </div>
        <!-- /span4 -->
        <div class="span10">
          <div class="widget">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Form Add Tanda Terima</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <?php echo form_open_multipart('');?>

                <div class="form-fields">

                  <div class="field">
                    <label for="pbttr_pbinv_id">Referensi</label>
                    <select name="pbttr_pbinv_id" id="pbttr_pbinv_id" required />
                      <option value="">--Pilih--</option>
                      <?php foreach($option_referensi as $value): ?>
                        <option value="<?php echo $value['pbinv_id']; ?>"><?php echo $value['pbinv_noinvoice']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbttr_no">No:</label>
                    <input id="pbttr_no" name="pbttr_no" value="" placeholder="No" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="phone">Tagihan Dari</label>
                    <div class="rd-inline">
                      <label class="checkbox-inline"><input type="radio" name="pbttr_tghndari" value="Subcontractor">Subcontractor</label>
                      <label class="checkbox-inline"><input type="radio" name="pbttr_tghndari" value="Supplier">Supplier</label>
                      <label class="checkbox-inline"><input type="radio" name="pbttr_tghndari" value="Lain Lain">Lain Lain</label>
                    </div>
                    <input id="pbcr_tagihan" name="pbttr_tagihan" value="" placeholder="Tagihan Dari" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="pbttr_nilaitagihan">Nilai Tagihan</label>
                    <p class="alert" id="pbttr_nilaitagihan">-</p>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="note">Lampiran</label>
                    <div class="rd-inline">
                      <label class="checkbox-inline"><input type="checkbox" name="pbttr_lampiran[]" value="Kwitansi Asli">Kwitansi Asli</label>
                      <label class="checkbox-inline"><input type="checkbox" name="pbttr_lampiran[]" value="Invoice Asli">Invoice Asli</label>
                      <label class="checkbox-inline"><input type="checkbox" name="pbttr_lampiran[]" value="Faktur Pajak Asli">Faktur Pajak Asli</label>
                      <label class="checkbox-inline"><input type="checkbox" name="pbttr_lampiran[]" value="Surat Jalan Asli">Surat Jalan Asli</label>
                      <label class="checkbox-inline"><input type="checkbox" name="pbttr_lampiran[]" value="Tanda Terima Asli + Quality Control Approval">Tanda Terima Asli + Quality Control Approval</label>
                      <label class="checkbox-inline"><input type="checkbox" name="pbttr_lampiran[]" value="Purchase Order Asli/SPK">Purchase Order Asli/SPK</label>
                    </div>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="note">Lampiran</label>
                    <div class="rd-inline">
                      <label class="checkbox-inline"><input type="checkbox" value="">Dikembalikan, untuk dimasukkan kembali tanggal<input id="pbttr_tglkembali" class="date-picker" name="pbttr_tglkembali" value="" placeholder="tanggal" />karena lampiran tidak lengkap</label>
                    </div>
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="address">No. BPKC</label>
                    <input id="pbttr_nobpkc" name="pbttr_nobpkc" value="" placeholder="No. BPKC" /></br>
                    <input id="pbttr_tglbpkc" name="pbttr_tglbpkc" class="date-picker" value="" placeholder="Tanggal" />
                  </div> <!-- /field -->

                  <div class="field">
                    <label for="address">Yang menerima</label>
                    <input id="pbttr_menerima" name="pbttr_menerima" value="" placeholder="Yang menerima" /></br>
                    <input id="pbttr_tglterima" class="date-picker" name="pbttr_tglterima" value="" placeholder="Tanggal" />
                  </div> <!-- /field -->

                  <div class="field" style="display: none;">
                    <label for="ppmt_uploadfile">Upload File:</label>
                    <input type="file" class="form-control-file" name="uploadfile" id="uploadfile">
                    <small class="text-muted">Upload hardcopy tanda terima.</small>
                  </div> <!-- /field -->

                  <div class="form-actions">
                  <div class="pull-right">
                    <button type="reset" class="button btn btn-default btn-large">Reset</button>
                    <button class="button btn btn-primary btn-large"><a href="print_tanda_terima.html"></a> Submit</button>
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
      var url = '<?php echo site_url("pembelian/referensi_invoice"); ?>/'+id;
      $.getJSON(url, function(data){
        $('#pbttr_nilaitagihan').text(data.pbptn_totaltagihan);
      });
    };

    var clear_info = function() {
      $('#pbttr_nilaitagihan').text('-');
    };
    
    $('#pbttr_pbinv_id').change(function(){
      clear_info();
      var me = $(this);
      var nilai = me.val() || '';
      if(nilai == '') return;
      get_info(nilai);
    });
  })
</script>