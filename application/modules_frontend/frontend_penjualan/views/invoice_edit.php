<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span2">
          <?php include('_sidebar_invoice.php'); ?>
        </div>
        <!-- /span4 -->
          <form action="<?php echo ($module_base_url_invoice . '/edit/' . $detail['pjinv_id']); ?>" method="post">
                <input type="hidden" name="pjinv_id" value="<?php echo $detail['pjinv_id']; ?>" />
                <input type="hidden" name="pjinv_noinvoice" value="<?php echo $detail['pjinv_noinvoice']; ?>" />
            <div class="span5">
              <div class="widget">
                <div class="widget-header"> <i class="icon-th-list"></i>
                  <h3>Form Edit Invoice Penjualan</h3>
                </div>
                <!-- /widget-header -->
                <div class="widget-content">
                    
                    <div class="form-fields">

                      <div class="field">
                        <label for="pjinv_ppmt_id">Referensi</label>
                        <select name="pjinv_ppmt_id" id="pjinv_ppmt_id" required />
                          <option value="">--Pilih--</option>
                          <?php foreach($option_referensi as $value): ?>
                            <option value="<?php echo $value['ppmt_id']; ?>" <?php echo ($detail['pjinv_ppmt_id'] == $value['ppmt_id'] ? 'selected' : ''); ?>><?php echo $value['ppmt_noso']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div> <!-- /field -->
                      
                      <div class="field">
                        <label for="pjinv_noinvoice">Invoice No:</label>
                        <input type="text" id="pjinv_noinvoice" name="pjinv_noinvoice" value="<?php echo $detail['pjinv_noinvoice']; ?>" disabled/>
                      </div> <!-- /field -->
                      
                      <div class="field">
                        <label for="pjinv_tanggal">Tanggal</label>  
                        <input type="text"  class="date-picker" id="pjinv_tanggal" name="pjinv_tanggal" value="<?php echo $detail['pjinv_tanggal']; ?>" />
                      </div> <!-- /field -->
                      
                      
                      <div class="field">
                        <label for="ppmt_noso">PO No:</label>
                        <p class="alert" id="ppmt_noso">-</p>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="ppmt_tanggal">Tanggal:</label>  
                        <p class="alert" id="ppmt_tanggal">-</p>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="ppnw_no_penawaran">Penawaran WO</label>
                        <p class="alert" id="ppnw_no_penawaran">-</p>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="clnt_nama">Ditujukan Ke:</label>  
                        <p class="alert" id="clnt_nama">-</p>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="clnt_alamat">Alamat:</label>  
                        <p class="alert" id="clnt_alamat">-</p>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="ppnw_nilai_faktur">Total Tagihan:</label>
                        <p class="alert" id="ppnw_nilai_faktur">-</p>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="terbilang">Terbilang:</label>
                        <p class="alert" id="terbilang">-</p>
                      </div> <!-- /field -->

                      <div class="field">
                        <label for="pjinv_description">Deskripsi:</label>  
                        <textarea id="pjinv_description" name="pjinv_description"><?php echo $detail['pjinv_description']; ?></textarea>
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
                            <th>Satuan</th>
                            <th>Harga</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td colspan="5">Data is empty</td>
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
    $html.find('[name=pjinvd_jenisbarang]').name="pjinvd_jenisbarang[]" + len;
    $html.find('[name=pjinvd_jumlah]').name="pjinvd_jumlah[]" + len;
    return $html.html();    
}
</script>

<script type="text/javascript">
  $(function(){
    var info_barang = function(id) {
      var url = '<?php echo site_url("penjualan/info_barang"); ?>/'+id;
      $.getJSON(url, function(data){
        var txtHtml = '';
        var cnt = 1;
        $.each(data, function(idx, val){
          //console.log(val);
          if(val.ppnwd_jenisbarang != '') { 
            txtHtml += '<tr>';
            txtHtml += '<td>'+ cnt++ +'</td>';
            txtHtml += '<td>'+val.ppnwd_jenisbarang+'</td>';
            txtHtml += '<td>'+val.ppnwd_volume+'</td>';
            txtHtml += '<td>'+val.ppnwd_satuan+'</td>';
            txtHtml += '<td>'+val.ppnwd_hargasatuan+'</td>';
            txtHtml += '<tr>';
          }
        });
        $('#tblInfoBarang tbody').empty().append(txtHtml);
      });
    };

    var get_info = function(id) {
      var url = '<?php echo site_url("penjualan/referensi_permintaan"); ?>/'+id;
      $.getJSON(url, function(data){
        $('#ppmt_noso').text(data.ppmt_noso);
        $('#ppmt_tanggal').text(data.ppmt_tanggal);
        $('#ppnw_no_penawaran').text(data.ppnw_no_penawaran);
        $('#clnt_nama').text(data.clnt_nama);
        $('#clnt_alamat').text(data.clnt_alamat);
        $('#ppnw_nilai_faktur').text(data.ppnw_nilai_faktur);
        $('#terbilang').text(data.terbilang);

        info_barang(data.ppnw_id);
      });
    };

    var clear_info = function() {
      $('#ppmt_noso').text('-');
      $('#ppmt_tanggal').text('-');
      $('#ppnw_no_penawaran').text('-');
      $('#clnt_nama').text('-');
      $('#clnt_alamat').text('-');
      $('#ppnw_nilai_faktur').text('-');
      $('#terbilang').text('-');
    };
    
    $('#pjinv_ppmt_id').change(function(){
      clear_info();
      var me = $(this);
      var nilai = me.val() || '';
      if(nilai == '') return;
      get_info(nilai);
    });

    get_info($('#pjinv_ppmt_id').val());
  })
</script>

<script type="text/javascript">
  $(function(){
    $('.numberformat').number( true, 0, ',', '.' );
  })
</script>