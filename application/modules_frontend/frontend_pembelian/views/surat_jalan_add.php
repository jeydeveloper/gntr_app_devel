<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_surat_jalan.php'); ?>
        </div>
        <!-- /span4 -->
          <?php echo form_open_multipart('');?>
            <div class="span5">
              <div class="widget">
                <div class="widget-header"> <i class="icon-th-list"></i>
                  <h3>Form Surat Jalan</h3>
                </div>
                <!-- /widget-header -->
                <div class="widget-content">

                    <div class="form-fields">

                      <div class="field">
                        <label for="pbsrtjalan_pbkw_id">Referensi</label>
                        <select name="pbsrtjalan_pbkw_id" id="pbsrtjalan_pbkw_id" required />
                          <option value="">--Pilih--</option>
                          <?php foreach($option_referensi as $value): ?>
                            <option value="<?php echo $value['pbkw_id']; ?>"><?php echo $value['pbkw_no']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_tanggal">Tanggal</label>
                        <input type="text"  class="date-picker" id="pbsrtjalan_tanggal" name="pbsrtjalan_tanggal" value="" placeholder="Tanggal" />
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_no">No:</label>
                        <input type="text" id="pbsrtjalan_no" name="pbsrtjalan_no" value="" placeholder="No." />
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_nokendaraan">No Kendaraan:</label>
                        <input type="text" id="pbsrtjalan_nokendaraan" name="pbsrtjalan_nokendaraan" value="" placeholder="No. Kendaraan" />
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_matauang">Mata Uang</label>
                        <select name="pbsrtjalan_matauang" id="pbsrtjalan_matauang" />
                          <option value="">-- Pilih --</option>
                          <?php foreach($option_matauang as $value): ?>
                            <option value="<?php echo $value['value']; ?>"><?php echo $value['name']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_vendor">Vendor:</label>
                        <p class="alert" id="pbsrtjalan_vendor">-</p>
                      </div> <!-- /field -->


                      <div class="field">
                        <label for="pbsrtjalan_tanggalditerima">Tanggal Penerimaan</label>
                        <input type="text"  class="date-picker" id="pbsrtjalan_tanggalditerima" name="pbsrtjalan_tanggalditerima" value="" placeholder="Tanggal Penerimaan" />
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pbsrtjalan_namapenerima">Nama Penerima:</label>
                        <input type="text" id="pbsrtjalan_namapenerima" name="pbsrtjalan_namapenerima" value="" placeholder="Nama Penerima"/>
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
  $(document).ready(function () {
     $('<div/>', {
         'class' : 'extraPerson form-fields', html: GetHtml()
     }).appendTo('#container');
     $('#addRow').click(function () {
           $('<div/>', {
               'class' : 'extraPerson form-fields', html: GetHtml()
     }).hide().appendTo('#container').slideDown('slow');

     });
 })
 function GetHtml()
{
      var len = $('.extraPerson form-fields').length;
    var $html = $('.extraPersonTemplate').clone();
    $html.find('[name=pbsuratjaland_jenisbarang]').name="pbsuratjaland_jenisbarang[]" + len;
    $html.find('[name=pbsuratjaland_jumlah]').name="pbsuratjaland_jumlah[]" + len;
    return $html.html();
}
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
  })
</script>